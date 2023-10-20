<?php

//Todo: This needs to move into Rollbar PHP
//if(isset($_GET['ef_tx_id'])){
//    if(!isset($_GET['ef_aff_id']) && !isset($_GET['ef_offer_id'])){
//        echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
// ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ]! MISSING [ef_offer_id] AND [ef_aff_id]');</script>";
//    }else{
//        if(!isset($_GET['ef_aff_id']) && isset($_GET['ef_offer_id'])){
//            echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
// ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and offer ID [ '+ getUrlParameter('ef_offer_id') +' ]! MISSING [ef_aff_id]');</script>";
//        }else{
//            if(!isset($_GET['ef_offer_id']) && isset($_GET['ef_aff_id'])){
//                echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
// ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and affiliate ID [ '+ getUrlParameter('ef_aff_id') +' ]! MISSING [ef_offer_id]');</script>";
//            }
//        }
//    }
//}

if(empty($_GET['ef_aff_id'])){
    if(empty($_GET['ef_tx_id'])){
        header("Location: https://foreverhomehub.com", true, 302);
        exit;
    }
}
