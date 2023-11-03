<?php
use Illuminate\Support\Facades\Log;

$leadProsperUrl = env('LEAD_PROSPER_SUBMIT_URL');
$submitUrl = env('WINTERBOT_LEAD_SUBMIT_URL');
$leadBackupUrl = env('LEAD_BACKUP_URL');

callHealthcheckIfVisitCameFromThankYouPageOffer();



