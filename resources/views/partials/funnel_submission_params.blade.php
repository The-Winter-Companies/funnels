<?php
if(isset($_SERVER['HTTP_HOST']) && str_contains($_SERVER['HTTP_HOST'], "local")){
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "http://localhost";
    $leadBackupUrl = $submitUrl;

} else {
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "https://winterbot.app";
    $leadBackupUrl = "https://lb.winterbot.app";
}
