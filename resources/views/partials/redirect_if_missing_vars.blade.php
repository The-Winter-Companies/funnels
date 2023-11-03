<?php
use Illuminate\Support\Facades\Log;

if(empty($_GET['ef_aff_id']) || empty($_GET['ef_tx_id']) || empty($_GET['ef_offer_id'])){
    Log::error('Required Everflow Parameters were not in URL.');
    header("Location: https://foreverhomehub.com", true, 302);
    exit;
}
