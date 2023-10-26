<?php

use Illuminate\Support\Facades\Log;

if(isset($_SERVER['HTTP_HOST']) && str_contains($_SERVER['HTTP_HOST'], "local")){
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "http://localhost";
    $leadBackupUrl = $submitUrl;

} else {
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "https://winterbot.app";
    $leadBackupUrl = "https://lead-backup.winterbot.app/";
}
if(!empty($_GET['ef_aid']) && !empty($_GET['ef_adv_event_id'])){
    callHealthcheck('https://hc-ping.com/28df2a22-4a91-430a-9870-acd5a5f121e7', null, null, null, ['$_GET' => $_GET, '$_POST' => $_POST]);
}
