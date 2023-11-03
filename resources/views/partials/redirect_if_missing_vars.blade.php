<?php
use Rollbar\Rollbar;

if(empty($_GET['ef_aff_id']) || empty($_GET['ef_tx_id']) || empty($_GET['ef_offer_id'])){
    Rollbar::error('Required Everflow Parameters were not in URL.');
    header("Location: https://foreverhomehub.com", true, 302);
    exit;
}
