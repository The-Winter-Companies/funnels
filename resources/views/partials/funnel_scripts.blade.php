<?php
    if(!isset($vertical, $page)){
        abort(500, 'Vertical or Page was not passed to the blade template.');
    }

    if(!isset($includeAddressValidation)){
        $includeAddressValidation = true;
    }
?>

<script src="{{ asset('js/jquery/jquery.custom-validators.js') }}"></script>
<script src="{{ asset('js/funnel-support.js') }}"></script>
<script src="{{ asset('js/funnel-support-document-ready.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/solar/power_companies.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_MAPS_API_KEY")}}&libraries=places"></script>
<script src="{{ asset('js/jquery/jquery.geocomplete.min.js') }}"></script>

@if ( $includeAddressValidation == true )
    <script src="{{ asset('js/address-validation.js') }}"></script>
@endif

<script>

    "use strict";
    $.token = $.makeid(6);

    /**
     *
     * @param formData
     */
    function submitLead(formData){
        stl(formData);
        let lpResult = false;
        let winterbotResult = submitToWinterbot(formData);

        if(winterbotResult === false && isTestLead(formData) === false) {
            lpResult = submitToLP(formData);
            if(lpResult === true){
                Rollbar.warning('WARNING: Failed to submit the lead through Winterbot, but sent successfully directly to LP.',
                    {formData: formData, winterbotResult: winterbotResult, lpResult: lpResult}
                );
            } else {
                Rollbar.error('EMERGENCY! Lead failed to submit through both Winterbot AND LP! User stuck on page.',
                    {formData: formData, winterbotResult: winterbotResult, lpResult: lpResult}
                );
            }
        }

        if(winterbotResult || lpResult) {
            window.location.replace(getThankYouPageUrl('{{$vertical}}'));
        } else {
            alert("There was an issue, please try again or contact us at info@foreverhomehub.com");
        }
    }

    /**
     * Submits data to Winterbot
     * @param formData
     * @returns {boolean}
     */
    function submitToWinterbot(formData){
        let result = false;
        $.ajax({
            type: 'POST',
            url: '{{ env("WINTERBOT_LEAD_SUBMIT_URL") }}/ingest.php',
            data: formData,
            async: false,
            dataType: "text",
            success: function (response) {
                response = JSON.parse(response);
                if(response.status === 200){
                    result = true;
                } else {
                    result = false;
                    Rollbar.error('Winterbot Submit - Error', {formData: formData, formSubmitResponse: response});
                }
            }, error: function (jqXHR, textStatus, errorThrown) {
                Rollbar.error('Winterbot - AJAX error: ' + textStatus + ', ' + errorThrown, {jqXHR: jqXHR, textStatus: textStatus, errorThrown: errorThrown, formData: formData});
                result = false;
            }
        });
        return result;
    }

    /**
     * Sends requests to backup server
     * @param formData
     */
    function stl(formData){
        var submitUrl = "{{ env('LEAD_BACKUP_URL') }}/stl.php"
        $.ajax({
            type: 'POST',
            url: submitUrl,
            data: formData,
            async: true,
            dataType: "text",
            success: function (data) {
            }, error: function (jqXHR, textStatus, errorThrown) {
                Rollbar.error('Lead Backup (STL) - AJAX error: ' + textStatus + ', ' + errorThrown, {jqXHR: jqXHR, textStatus: textStatus, errorThrown: errorThrown, formData: formData});
            }
        });
    }

    $.submittingToLP = false;

    /**
     * Submits data to LP
     * @param formData
     * @returns {boolean}
     */
    function submitToLP(formData){
        let result = false;
        if($.submittingToLP === false){
            $.submittingToLP = true;

            $.ajax({
                type: 'POST',
                url: '{{ env("LEAD_PROSPER_SUBMIT_URL") }}',
                data: formData,
                async: false,
                dataType: "text",
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status === 'ACCEPTED') {
                        result = true;
                    } else if (response.status === 'DUPLICATED') {
                        result = true;
                        Rollbar.warning('LP Submission - Duplicate: ' + response.message, {lpResponse: response, formData: formData});
                    } else {
                        Rollbar.error('LP Submission - Error: ' + response.message, {lpResponse: response, formData: formData});
                    }
                }, error: function (jqXHR, textStatus, errorThrown) {
                    Rollbar.error('LP - AJAX error: ' + textStatus + ', ' + errorThrown, {jqXHR: jqXHR, textStatus: textStatus, errorThrown: errorThrown, formData: formData});
                }, complete: function () {
                    $.submittingToLP = false;
                }
            });
        } else {
            console.log('Already submitting to LeadProsper, please wait...');
        }
        return result;
    }



    function phoneIsValid(){

        var response = true;

        var phone = $("#phone").val();

        if(phone === '(111) 111-1111' || phone === '(612) 842-0000'){
            return true;
        }

        const phoneValidation = $.ajax({
            type: "POST",
            url: "{{ env("WINTERBOT_LEAD_SUBMIT_URL") }}/validatePhone.php",
            data: {"phone":phone},
            async: false,
            dataType: 'json'
        }).then((fullResponse) => {
            return fullResponse;
        });

        const promiseFunction =
            phoneValidation.then((a) => {
                if(a.valid === false){
                    $("#phone").addClass(" .form-control .error")
                    $("#phone-custom-error").html("Please provide a valid phone number to proceed.");
                    $("#phone-custom-error").fadeIn('fast');
                    response = false;
                }
                return response;
            });

        return promiseFunction.then(function (response){
            return response;
        });

    }

    function emailIsValid() {

        function isTestEmail(email){
            return email === 'test@test.com' || email === 'pingdom@test.com';
        }

        var response = true;
        var email = $('#email').val();
        var ipAddress = $("#ip_address").val();

        if(!isTestEmail(email)){

            const emailValidation = $.ajax({
                type: "POST",
                url: "{{ env("WINTERBOT_LEAD_SUBMIT_URL") }}/validateEmail.php",
                data: {"email":email,"ip_address":ipAddress},
                async: false,
                dataType: 'json'
            }).then((fullResponse) => {
                return fullResponse;
            });

            const promiseFunction = emailValidation.then((a) => {
                if(a.valid === false){
                    $("#email").addClass(" .form-control .error")
                    $("#email-custom-error").html("Please provide a valid email address to proceed.");
                    $("#email-custom-error").fadeIn('fast');
                    response = false;
                }
                return response;
            });

            return promiseFunction.then(function (response){
                return response;
            });
        }
    }

    /**
     *
     * @param vertical
     * @param pageKey
    */
    function prepFormDataForSubmit(vertical, pageKey){
        var formData = getAllInputFieldsAsObject();

        formData['vertical'] = vertical;
        formData['s1'] = getUrlParameter('s1');
        formData['s2'] = getUrlParameter('s2');
        formData['s3'] = getUrlParameter('s3');
        formData['s4'] = getUrlParameter('s4');
        formData['s5'] = getUrlParameter('s5');
        formData['ef_aff_id'] = getUrlParameter('ef_aff_id');
        formData['ef_tx_id'] = getUrlParameter('ef_tx_id');
        formData['ef_aid'] = getUrlParameter('ef_aid');
        formData['ef_adv_event_id'] = getUrlParameter('ef_adv_event_id');
        formData['ef_offer_id'] = getUrlParameter('ef_offer_id');
        formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
        formData['jornaya_leadid'] = $('#leadid_token').val();
        formData['user_agent'] = window.navigator.userAgent;
        formData['landing_page_url'] = window.location.href;
        formData['phone'] = stripPhoneNumber($('#phone').val());

        if (formData['landing_page_url'].includes('127.0.0.1') || formData['landing_page_url'].includes('localhost')) {
            formData['landing_page_url'] = 'https://localhost.com';
        }

        formData['url'] = window.location.href;
        formData['getParams'] = getURLParams();
        formData['lead'] = 1;
        formData['complete'] = 1;
        formData['token'] = $.token;
        formData['healthchecks_slug'] = vertical + '-' + pageKey;

        if(vertical === 'solar'){
            formData['lp_campaign_id'] = "17604";
            formData['lp_supplier_id'] = "38531";
            formData['lp_key'] = "qqz1h52vku0dpy";
            formData['home_owner'] = "Yes";
            formData['roof_shade'] = "No Shade";
            formData['monthly_electric_bill'] = $('#monthly_electric_bill').val();
            formData['credit_rating'] = $('#credit_rating').val();
            formData['time_frame'] = $('#time_frame').val();
            formData['property_type'] = $('#property_type').val();
            formData['roof_type'] = $('#roof_type').val();
            formData['utility_provider'] = $('#utility_provider').val();
        } else if(vertical === 'tubs'){
            formData['lp_campaign_id'] = "18372";
            formData['lp_supplier_id'] = "41113";
            formData['lp_key'] = "x2yzfldq0srz17";
            formData['time_frame'] = $('#time_frame').val();
            formData['project_reason'] = $('#project_reason').val();
        } else if(vertical === 'roofing'){
            formData['lp_campaign_id'] = "17608";
            formData['lp_supplier_id'] = "38543";
            formData['lp_key'] = "2e3nsxqveudg5l";
            formData['roof_type'] = $('#roofing_type').val();
            formData['time_frame'] = $('#time_frame').val();
            formData['project_type'] = $('#project_type').val();
        }

        if(isTestLead(formData)){
            formData['lp_action'] = "test";
        }
        return formData;
    }

    function isTestLead(formData){
        if(formData['email_address'] === 'test@test.com' || formData['email_address'] === 'pingdom@test.com' || (formData['first_name'].toLowerCase() === "test" && formData['last_name'].toLowerCase() === "test")){
            return true;
        } else {
            return false;
        }
    }


    /**
     * Populates form with dummy data for testing
     */
    function populateFormWithDummyData() {
        $('#monthly_electric_bill').val('$101-$150');
        $('#credit_rating').val('Good');
        $('#time_frame').val('Immediately');
        $('#property_type').val('Single Family');
        $('#roof_type').val('Tile');
        $('#utility_provider').val('Other');
        $('#email').val('test@test.com');

        $('#first_name').val('test');
        $('#last_name').val('test');
        $('#phone').val('1111111111');
        $('#address').val('123 Main Street');
        $('#city').val('Minneapolis');
        $('#state').val('MN');
        $('#zip_code').val('55442');
        $('#s1').val('s1-test');
        $('#s2').val('s2-test');
        $('#s3').val('s3-test');
        $('#s4').val('s4-test');
        $('#s5').val('s5-test');
    }

    /**
     * Used to force a dummy test lead to be submitted on page load
     */
    function dummyTest(){
        populateFormWithDummyData();

        let formData = prepFormDataForSubmit('{{$vertical}}', '{{$page}}');
        submitLead(formData);
    }

    @if(!empty($_GET['dummyTest']) && ($_GET['dummyTest'] == 'true' || $_GET['dummyTest'] == 1))
        setTimeout(dummyTest(), 1000);
    @endif

    @if(!empty($_GET['populateDummyData']) && $_GET['populateDummyData'] == 'true')
        populateFormWithDummyData();
    @endif

</script>

