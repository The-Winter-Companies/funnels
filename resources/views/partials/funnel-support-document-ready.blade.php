

<script>
    $(document).ready(function () {
        populateIPHiddenFields('{{env('IP_INFO_TOKEN')}}');

        $.getJSON("https://api.ipify.org?format=json", function(data) {
            $('#ip_address').val(data.ip);
        });

        $.getJSON("https://api64.ipify.org?format=json", function(json) {
            if ($('#ip_address').val() != json.ip) {
                $('#ip_address_v6').val(json.ip);
            }
        });

        $('form input').on('keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                var next_btn = $(this).closest("fieldset").find(".btn-next");
                if(!next_btn.prop('disabled'))
                    next_btn.trigger("click");
                e.preventDefault();
                return false;

            }
        });

        $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());

        //disable copy/paste
        $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
            e.preventDefault();
        });

        $.ajaxSetup({
            cache: false
        });

        var phoneSelector = $('input[name="phone"]');

        var maskOptions = {
            onKeyPress: function (cep, e, field, options) {
                var masks = ['(000) 000-0000'];
                var mask = masks[0];
                $('input[name="phone_home"]').mask(mask, options);
            },
            translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
            }
        };

        if (phoneSelector.mask !== undefined) {
            phoneSelector.mask('(000) 000-0000', maskOptions);
        }

        $(".btn-next").click(function() {
            $("#email-preferences-link").hide();
        });

        $('#zip-container').on('step-redirect', function () {
            $("#email-preferences-link").hide();
        });

    });
</script>


@php
    $offerMappings = [
        'roofing' => 1,
        'solar' => 2,
        'windows' => 3,
        'tubs' => 8,
        'astrology' => 9,
    ];
    $offerId = $offerMappings[$vertical];
    $defaultAffiliateId = 25;
@endphp

@if(empty($_GET['ef_tx_id']) && !empty($offerId) && \Illuminate\Support\Facades\Request::get('source') !== 'pingdom')
    <script type="text/javascript"
            src="https://www.twck93j.com/scripts/sdk/everflow.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            var affiliateId = EF.urlParameter('ef_aff_id') ? EF.urlParameter('ef_aff_id') : {{$defaultAffiliateId}};
            var offerId = {{$offerId}};
            var efClickPromiseFulfilled = false;
            var efClickPromise = EF.click({
                offer_id: offerId,
                affiliate_id: affiliateId,
                sub1: EF.urlParameter('s1'),
                sub2: EF.urlParameter('s2'),
                sub3: EF.urlParameter('s3'),
                sub4: EF.urlParameter('s4'),
                sub5: EF.urlParameter('s5'),
                uid: EF.urlParameter('uid'),
                fbclid: EF.urlParameter('fbclid')}
            );
            efClickPromise.then(function(transactionId)  {
                efClickPromiseFulfilled = true;
                if (!transactionId && offerId) {
                    transactionId = EF.getTransactionId(offerId);
                }

                if(offerId) {
                    if (!transactionId) {
                        transactionId = EF.getTransactionId(offerId);
                    }
                    if(transactionId) {
                        $("#ef_tx_id").val(transactionId);
                        $("#ef_offer_id").val(offerId);
                        $("#ef_aff_id").val(affiliateId);
                    } else {
                        Rollbar.critical("Critical Issue Detected: The Transaction ID essential for EF Direct Linking could not be identified or retrieved.");
                    }
                } else {
                    Rollbar.critical("Direct Linking Setup Incomplete: The Offer ID (OID) is missing or inaccessible, which is essential for processing a direct link click within EF.");
                }
            }).catch(function(error) {
                Rollbar.critical("Error in EF Direct Linking: " + error.message);
            });

            setTimeout(function(){
                if(!efClickPromiseFulfilled) {
                    Rollbar.critical("Error in EF Direct Linking: No response received for the promise.");
                }
            }, 10000);
        });
    </script>
@endif
