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
    Log::info('One lead came through from thank-you page - Please look further if it converted !');
}
