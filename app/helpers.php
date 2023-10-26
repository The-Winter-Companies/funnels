<?php

use Illuminate\Support\Facades\Log;
use Rollbar\Payload\Level;

function callHealthcheck($url, $start = false, $fail = false, $rid = null, $attachLog = null){
    try{
        if(!empty($url)){
            $url = getHealthcheckUrl($url);
            $fullUrl = $url. ($start ? "/start" : ""). ($fail ? "/fail" : ""). ($rid ? "?rid=".$rid : "");
            if(empty($attachLog)){
                fetchWithoutResponseURL($fullUrl);
            } else {
                $jsonLogData = json_encode($attachLog, JSON_PRETTY_PRINT);

                postCurl($fullUrl, $jsonLogData, false);
            }
        }
    } catch (Exception $e){
        Log::log(Level::ERROR, $e->getMessage());
    }
}

function getHealthcheckUrl($healthCheck){
    if(!str_contains($healthCheck, "https://")) {
        return "https://hc-ping.com/QJOYV7yUbShlIA_R4ntWog/" . $healthCheck;
    }
    return $healthCheck;
}

function fetchWithoutResponseURL($url)
{
    $parts=parse_url($url);

    for($i = 0; $i<5; $i++){
        try {
            $fp = openSocketWithRetries($parts['host'],isset($parts['port'])?$parts['port']:80, 10, 10);
            break;
        } catch (Exception $e){
            usleep(250000);
        }
    }
    $out = "GET ".$parts['path']." HTTP/1.1\r\n";
    $out.= "Host: ".$parts['host']."\r\n";
    $out.= "Content-Length: 0"."\r\n";
    $out.= "Connection: Close\r\n\r\n";
    if(!is_bool($fp)){
        fwrite($fp, $out);
        fclose($fp);
    }
}

function openSocketWithRetries($host, $port = 80, $maxAttempts = 5, $sleepSeconds = 2) {
    $attempt = 0;
    $fp = false;
    $errno = 0;
    $errstr = '';

    while ($attempt < $maxAttempts) {
        try {
            $fp = fsockopen($host, $port, $errno, $errstr, 30);
            if ($fp === false) {
                throw new Exception('Open Socket failed: ' . $errno . " " . $errstr);
            } else {
                break;
            }
        } catch (Exception $e) {
            if ($attempt < $maxAttempts - 1) {
                $sleepSeconds = $sleepSeconds * 3;
                sleep($sleepSeconds);
            } else {
                Log::error($e->getMessage());
                break;
            }
        }

        $attempt++;
    }

    return $fp;
}

function postCurl($url, $postParams, $httpBuildQuery = true, $timeoutMs = null, $ch = null, $bearerToken = null, $header = []){
    if(!isset($ch)){
        $ch = curl_init();
    }
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);

    if(isset($bearerToken)){
        $header[] =
            "Authorization: Bearer $bearerToken";
    }

    if(isset($header)){
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }

    if($httpBuildQuery){
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postParams));
    } elseif(isset($postParams)){
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
    }

    if(!empty($timeoutMs)){
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeoutMs);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
//    $info = curl_error($ch);
//    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);
    return $result;
}
