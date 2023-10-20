<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
?>
@include('partials.redirect_if_missing_vars')
    <!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi">
    <title>Walk-in Bathtub - ForeverHomeHub</title>
    <meta name="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta itemprop="name" content="Walk-in Bathtub - ForeverHomeHub">
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta itemprop="image" content="{{ asset('img/logo.png') }}">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Walk-in Bathtub - ForeverHomeHub">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Walk-in Bathtub - ForeverHomeHub">
    <meta name="twitter:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tubs-o7.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lp12-tubs-o7.css') }}" rel="stylesheet">

    <link href="{{ asset('css/footer-tubs-o7.css') }}" rel="stylesheet">

    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=453931845671812&amp;ev=PageView&amp;noscript=1"></noscript>
</head>
<body>
<main class="container">
    <header>
        <h1>Simple Walk-In Bathtubs Survey</h1>
        <h2>
            Get Your Free
            Walk-In Bathtubs
            Quotes
        </h2>
        <p> Takes less than 30 seconds!</p>
    </header>
    <div class="progress_box">
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="10" style="width: 12%" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
    <div class="form_box">
        <div class="form_nav">Question <span id="slidenum">1</span></div>
        <form id="msform" class="form">
            <input id="leadid_token" name="universal_leadid" type="hidden" value>
            <input type="hidden" id="xxTrustedFormCertUrl" name="xxTrustedFormCertUrl" value>
            <input type="hidden" id="ef_aff_id" name="ef_aff_id" value>
            <input type="hidden" id="ef_tx_id" name="ef_tx_id" value>
            <input type="hidden" id="s1" name="s1" value>
            <input type="hidden" id="s2" name="s2" value>
            <input type="hidden" id="s3" name="s3" value>
            <input type="hidden" id="s4" name="s4" value>
            <input type="hidden" id="s5" name="s5" value>
            <input type="hidden" id="tcpa_text" name="tcpa_text" value>
            <input type="hidden" id="city" name="city" value>
            <input type="hidden" id="state" name="state" value>
            <input type="hidden" id="ip_address" name="ip_address" value>
            <input type="hidden" id="address_short" value>
            <input type="hidden" id="time_frame" name="time_frame" value>
            <input type="hidden" name="own_rented" id="own_rented" value="Own">
            <input type="hidden" id="project_reason" name="project_reason" value>
            <fieldset id="zip-container">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">What is your zip code?</h3>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="zip_code">Zip Code</label>
                    <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                    <input type="hidden" id="city" name="city" value>
                    <input type="hidden" id="state" name="state" value>
                    <div class="zip-error form-error-message">Please enter valid US zip code.</div>
                </div>
                <div class="zip_error mb-2" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                <label style="visibility: hidden; position: absolute;" for="city">city</label>
                <input type="hidden" id="city" name="city" value>
                <label style="visibility: hidden; position: absolute;" for="state">state</label>
                <input type="hidden" id="state" name="state" value>
                <div class="form-btns ml-auto">
                    <button class="btn form-btn btn-next" id="btn-zip" type="button"><span class="btn-text">Get Started</span>
                    </button>
                </div>
            </fieldset>
            <fieldset data-step="1" id="emailContainer">
                <h3 class="form_box-question">Where should your free quotes be sent?</h3>
                <div class="form-group">
                    <label for="email" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">Email</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email_address" placeholder="Email Address" required>
                    <p class="form-error-message">Please enter your email address.</p>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="2">
                <legend hidden="true">windows</legend>
                <h3 class="form_box-question">Why are you considering a walk-in-tub?</h3>
                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input id="rfi-01" type="radio" name="project_reason_radio" value="Maintaining independence" required>
                        <label for="rfi-01"><span>Maintaining independence</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rfi-02" type="radio" name="project_reason_radio" value="Pain relief" required>
                        <label for="rfi-02"><span>Pain relief</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rfi-04" type="radio" name="project_reason_radio" value="Safety" required>
                        <label for="rfi-04"><span>Safety</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rfi-05" type="radio" name="project_reason_radio" value="Other" required>
                        <label for="rfi-05"><span>Other</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="3">
                <legend hidden="true">windows</legend>
                <h3 class="form_box-question">How soon do you want to have your tub?</h3>
                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input id="ptf-01" type="radio" name="time_frame_radio" value="Immediately" required>
                        <label for="ptf-01"><span>Immediately</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="ptf-02" type="radio" name="time_frame_radio" value="Within 6 months" required>
                        <label for="ptf-02"><span>Within 6 months</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="ptf-03" type="radio" name="time_frame_radio" value="Not Sure" required>
                        <label for="ptf-03"><span>Not Sure</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="4" id="phoneContainer">
                <legend hidden="true">Email</legend>
                <h3 class="form_box-question mb-1"> Final Step! </h3>
                <p class="form_box-desc">Enter your info so we can personalize your results.</p>
                <div class="form-group">
                    <label class="label" for="first_name">First Name*</label>
                    <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="Enter First Name" required>
                    <div class="form-error-message"> Please complete this field</div>
                </div>
                <div class="form-group ">
                    <label class="label" for="last_name">Last Name*</label>
                    <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Enter Last Name" required>
                    <div class="form-error-message"> Please complete this field</div>
                </div>
                <div class="form-group ">
                    <label class="label" for="phone">Phone*</label>
                    <input id="phone" class="form-control" type="tel" name="phone" pattern="\d?[\(]\d{3}[\)][\-]\d{3}[\-]\d{4}" placeholder="Enter Phone Number" required>
                    <div class="form-error-message phone-valid-error">Please enter a valid phone.</div>
                    <label id="phone-custom-error" class="mt-3" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-group" id="street_address">
                    <label for="address" class="label">Street Address*</label>
                    <input id="address" class="form-control" name="address" type="text" placeholder="Enter Street Address" data-geocomplete="street address" required>
                    <div class="form-error-message"> Please complete this field</div>
                    <input type="hidden" id="address_short" value="">
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                </div>
                <div class="form-btns mx-auto sbmt">
                    <button class="btn form-btn btn-next" type="button" id="form_submit"><span class="btn-text">Continue</span>
                    </button>
                </div>
                <center><img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="trusted mt-3"></center>
            </fieldset>
        </form>
    </div>
    <div id="tcpa_cont" style="display: none;">
        <p class="tcpa form-tcpa text-center mt-3">
            <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                <input type="hidden" id="leadid_tcpa_disclosure">
                By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                a condition of purchase. I also have read and agree to the <a href="https://foreverhomehub.com/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://foreverhomehub.com/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
            </label>
        </p>
    </div>
</main>
<footer class="ft">
    <div class="container">
        <div class="footer-disclaimer">This Website is an advertising marketplace for individuals and companies who are seeking consumer referrals for services or products. We are not a provider, manufacturer, or installer. The information provided by you to us will be sent to a manufacturer and/or installer in your area. We do not endorse, warrant, or guarantee any service or products of any individual or company you choose. While any information shared with you is believed to be accurate and reliable, the owners/operators of this Website specifically disclaim all warranties, express, implied or statutory, regarding the accuracy, timeliness, and/or completeness of the information provided. The content of any information or service contained thereon (the “Content”) are provided on an "as is" basis. Federal and State tax credits or incentives are not available in all locations and not available to all individuals.</div>
        <div class="sub-footer-links">
            <span>
                <a href="https://foreverhomehub.com/privacy-policy/">Privacy Policy&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
            </span>
            <span>
                <a href="https://foreverhomehub.com/terms-and-conditions">Terms Of Use&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
            </span>
            <span>
                <a href="https://foreverhomehub.com/disclaimer">Disclaimer&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
            </span>
            <span>
                <a href="https://foreverhomehub.com/please-do-not-sell-my-personal-information/" target="_blank">Do Not Sell My Information&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
            </span>
            <span>
                <a href="https://foreverhomehub.com/contact-us/">Contact</a>
            </span>
        </div>

        <span class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> Forever Home Hub. All Rights Reserved.</span>
    </div>
</footer>
<style type="text/css" id="wp-custom-css">
    /* Footer styles */
    .footer-disclaimer {
        width: 100%;
        display: inline-block;
        font-size: 12px;
        margin-bottom: 20px;
        line-height: 1.5;
    }
    .sub-footer-links {
        margin-bottom: 20px;
    }
</style>
<div id="loading" style="display: none;">
    <div class="loading">
        <div class="loading_inner">
            <h3 class="loading_title">We are currently matching you with our partners.</h3>
            <div class="spinner"><span></span><span></span><span></span></div>
            <p>Loading your options</p>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0-tubs-o7.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>

    (function () {
        "use strict";
        $(document).ready(function () {

            var totalStep = $("fieldset").length;
            var currentStep = $('fieldset:visible').data('step');
            var s = 1;
            $('form fieldset').each(function () {
                $(this).attr('data-step', s++);
            });


            var fieldset = $("form fieldset");
            var totalStep = fieldset.length;
            var current_step = 0;

            var zip_inclick = false;

            var zip_container = true;

            function is_int(value) {
                return parseFloat(value) === parseInt(value) && !isNaN(value);
            }

            $("#zip_code").on('keyup change', function (e) {
                var el = $("[name='zip_code']");
                if (el.val().length === 5){
                    $('#btn-zip').removeAttr('disabled');
                }else{
                    $('#btn-zip').attr('disabled', 'disabled');
                }
                $(".zip_error").hide();
            });

            $("#btn-zip").on("click", function () {
                var el = $("[name='zip_code']");

                $('#btn-zip .btn-text').text('Please Wait');

                setTimeout(function() {
                    // check if zip is valid
                    if (el.val().length === 5 && is_int(el.val()) && !zip_inclick) {
                        zip_inclick = true;

                        $.getJSON("https://zip.getziptastic.com/v2/US/" + el.val())
                            .done(function (result) {
                                $("#zip_code").val(result.postal_code).addClass('valid');
                                $("[name='city']").val(result.city).addClass('valid');
                                $("[name='state']").val(result.state_short).addClass('valid');

                                zip_inclick = false;
                                $(".zip_error").hide();

                                el.parents("fieldset").fadeOut(function () {
                                    $(".headline").hide("blind");
                                    $(this)
                                        .next()
                                        .fadeIn(function () {
                                            $(this).find("input,select").first().focus();
                                            current_step = fieldset.index($(this));
                                            zip_container = false;
                                            stepanimate();
                                        });
                                });
                            })
                            .fail(function () {
                                zipValidationError()
                            })
                            .always(function () {
                                $('#btn-zip .btn-text').text('Get Started');
                                zip_inclick = false;
                            });

                    } else if (el.val().length < 5) {
                        zipValidationError()
                    }

                    function zipValidationError() {
                        $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block").css("color", "red");
                        $('#btn-zip .btn-text').text('Get Started');
                        $(".zip_box").addClass('fail')
                    }

                });
            });

            /* next step*/
            $(".radio-next input[type=radio],.btn-next").bind("click",function () {
                if(!zip_container){
                    var parent_fieldset = $(this).parents('fieldset').last();
                    current_step = fieldset.index(parent_fieldset);
                    var next_step = true;
                    var result = $("#msform").valid();


                    if (!result){
                        next_step = false;
                        $(this).closest('.form-group').children('.form-error-message').slideDown();
                        $(this).addClass('has-error');
                        parent_fieldset.find('.has-error').first().focus();
                    }

                    if(next_step){

                        if(current_step+1 === $('#emailContainer').data('step')){
                            (async function(){
                                var emailValid = await emailIsValid();
                                if(emailValid === false){
                                    return;
                                }else{
                                    var ls = $('#phoneContainer').data('step');

                                    if( parent_fieldset.data('step') < ls ) {
                                        parent_fieldset.fadeOut(function() {
                                            $(this).next().fadeIn(function() {
                                                $(this).find('input:not([name=address]),select').first().focus();
                                            });
                                            stepanimate();
                                        });

                                    }
                                }
                            })()
                        }else{
                            var ls = $('#phoneContainer').data('step');

                            if( parent_fieldset.data('step') < ls ) {
                                parent_fieldset.fadeOut(function() {
                                    $(this).next().fadeIn(function() {
                                        $(this).find('input:not([name=address]),select').first().focus();
                                    });
                                    stepanimate();
                                });

                            }else{
                                (async function(){
                                    var phoneValid = await phoneIsValid();
                                    if(phoneValid === false){
                                        return;
                                    }else{
                                        $('form').submit();
                                        $('#form_submit').attr('disabled', 'disabled');
                                    }
                                })()
                            }
                        }

                    }
                }
            });

            function phoneIsValid(){

                var response = true;

                var phone = $("#phone").val();

                if(phone === '(111) 111-1111' || phone === '(612) 842-0000'){
                    return true;
                }

                const phoneValidation = $.ajax({
                    type: "POST",
                    url: "<?php echo $submitUrl;?>/validatePhone.php",
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
                        url: "<?php echo $submitUrl;?>/validateEmail.php",
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

            function validateEmail(email, returnFullResponse = false) {

                var phpData = (function get_php_data() {
                    var php_data;
                    var ip_address = $("#ip_address").val();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo $submitUrl;?>/validateEmail.php",
                        data: {"email":email,"ip_address":ip_address},
                        async: false,
                        dataType: 'json',
                        timeout: 3000,
                        success: function (json) {
                            php_data = json;
                        },
                        fail: function () {
                            php_data.valid = true;
                            console.log("Failed to get response to validate");
                        },
                    });
                    return php_data;
                })();

                if(returnFullResponse === true){
                    return phpData;
                } else {
                    if(phpData.valid===true){
                        return true;
                    } else {
                        return false;
                    }
                }
            }


            function validatePhone(phone, returnFullResponse = false) {

                var phpData = (function get_php_data() {
                    var php_data;

                    $.ajax({
                        type: "POST",
                        url: "<?php echo $submitUrl;?>/validatePhone.php",
                        data: {"phone":phone},
                        async: false,
                        dataType: 'json',
                        timeout: 3000,
                        success: function (json) {
                            php_data = json;
                        },
                        fail: function () {
                            php_data.valid = true;
                            console.log("Failed to get response to validate");
                        },
                    });
                    return php_data;
                })();

                if(returnFullResponse === true){
                    return phpData;
                } else {
                    if(phpData.valid===true){
                        return true;
                    } else {
                        return false;
                    }
                }
            }

            $.makeid = function makeid(length) {
                let result = '';
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                const charactersLength = characters.length;
                let counter = 0;
                while (counter < length) {
                    result += characters.charAt(Math.floor(Math.random() * charactersLength));
                    counter += 1;
                }
                return result;
            }


            var token = $.makeid(6);

            function getUrlVars()
            {
                var vars = [], hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for(var i = 0; i < hashes.length; i++)
                {
                    hash = hashes[i].split('=');
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars;
            }

            $('input[type=radio][name=project_reason_radio]').click(function(){
                $('#project_reason').val($(this).val());
            });

            $('input[type=radio][name=time_frame_radio]').click(function(){
                $('#time_frame').val($(this).val());
            });

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
            });

            function fillFormDataTubs() {
                var formData = {};

                // Get all input fields and iterate over them
                $(":input").each(function() {
                    var id = $(this).attr('id');
                    var value = $(this).val();

                    // If the input field has an id, add it to the formData object
                    if(id) {
                        formData[id] = value;
                    }
                });

                // Set static values
                formData['lp_campaign_id'] = "18372";
                formData['lp_supplier_id'] = "41113";
                formData['lp_key'] = "x2yzfldq0srz17";
                if($('#email').val() === 'test@test.com' ){
                    formData['lp_action'] = "test";
                }
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['landing_page_url'] = window.location.href;
                formData['time_frame'] = $('#time_frame').val();
                formData['project_reason'] = $('#project_reason').val();
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
                formData['healthchecks_slug'] = 'tubs-o7';
                formData['token'] = token;

                return formData;
            }

            $('form').submit(function (e) {
                var form = this;
                e.preventDefault();

                if (!$(form).validate().form())
                    return;
                // $('#form_submit').prop('disabled', true);

                if($("#email").val() === "pingdom@test.com"){
                    // prepare form for lead post
                    var formdata = $(form).serializeArray().reduce(function (m, o) {
                        m[o.name] = o.value;
                        return m;
                    }, {});

                    const searchParams = new URLSearchParams(window.location.search);
                    searchParams.forEach((value, key) => {
                        if (formdata[key] === undefined)
                            formdata[key] = value;
                    });

                    formdata = Object.keys(formdata).reduce((acc, k) => (!formdata[k] && k != 'test' && delete acc[k], acc), formdata);

                    // prepare form for lead post

                    formdata['email_address'] = $('#email').val();
                    formdata['lead'] = "true";
                    formdata['vertical'] = "tubs";
                    formdata['token'] = token;
                    formdata['currentStep'] = current_step;
                    formdata['totalSteps'] = totalStep;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'tubs-o7';

                    window.formdata = formdata;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $submitUrl?>',
                        data: formdata,
                        //async: false,
                        dataType: "text",
                        success: function (data) {
                            var result = JSON.parse(data);
                            if(result.complete){
                                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=tubs");
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                            }
                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formdata);
                }else{

                    var formData = fillFormDataTubs();
                    window.formdata = formData;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $leadProsperUrl?>',
                        data: formData,
                        // async: false,
                        dataType: "text",
                        success: function (data) {
                            var result = JSON.parse(data);
                            if(result.status !== 'ACCEPTED') {
                                Rollbar.error('LeadProsper - Lead submission FAILED for' + ' email : [ ' + $('#email').val() +' ]' + ' REASON: ' + result.message);
                            }
                            setTimeout(function() {
                                window.location.replace("/thank-you?ef_aff_id="+getUrlParameter('ef_aff_id')+"&ef_tx_id="+getUrlParameter('ef_tx_id')+"&s1="+getUrlParameter('s1')+"&s2="+getUrlParameter('s2')+"&s3="+getUrlParameter('s3')+"&s4="+getUrlParameter('s4')+"&s5="+getUrlParameter('s5')+"&v=tubs"+"&ef_offer_id="+getUrlParameter('ef_offer_id'));
                            }, 500);
                            // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                            $('#form_submit').removeAttr('disabled');
                        }
                    });
                    stl(formData);

                }

            });
            function stl(formdata){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo $leadBackupUrl."/stl.php"?>',
                    data: formdata,
                    async: true,
                    dataType: "text",
                    success: function (data) {
                        // var result = JSON.parse(data);
                    }, error: function(data) {
                        // console.log(data);
                    }
                });
            }

            $('#email').on('input', function() {
                if ($("#email-custom-error").is(":visible"))
                {
                    $("#email-custom-error").hide();
                }
            });

            $('#phone').on('input', function() {
                if ($("#phone-custom-error").is(":visible"))
                {
                    $("#phone-custom-error").hide();
                }
            });



            $('input[type=range]').change(function () {
                var rangeval = $(this).val();
                if (rangeval == 800) {
                    $("#billOutputName").addClass('intmax');
                } else {
                    $("#billOutputName").removeClass('intmax');
                }
            });


            $(".btn-back").click(function () {
                var parent_fieldset_prv = $(this).parents('fieldset');
                var prev_fs = $(this).parent().prev();
                parent_fieldset_prv.fadeOut(300, function () {
                    $(this).prev().fadeIn(300, function () {
                        $(this).find('input,select').first().focus();
                        stepanimate();
                    });

                });
            });

            function stepanimate() {
                const scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    window.scrollTo(0,0)
                }else{
                    $('html,body').animate({scrollTop: 0}, 500, function(){
                        $('html,body').clearQueue();
                    });
                }

                currentStep 		= $('fieldset:visible').data('step');
                var step = $('form fieldset:visible').data('step');
                var percent = parseInt((currentStep / totalStep) * 98);


                $('form fieldset:visible').find('input:not([name=address]),select').first().focus();

                $('.progress-bar').css({width: percent + '%'});

                if (currentStep > 1){
                    $('#slidenum').html(''+currentStep+' of '+totalStep+'');
                }

                if (currentStep == totalStep){
                    $('#tcpa_cont').show();
                }

            }


            $('form input, form select').on('keypress', function (e) {
                var keyCode = e.keyCode || e.which;
                var x = $(this).closest("fieldset").find("button");

                if (keyCode === 13) {

                    if (x.prop('disabled') === false) {
                        x.trigger("click");
                    }
                    e.preventDefault();
                    return false;
                }
            });

        });
    })();

</script>

<script>

    var email_validation_status = 'not-validated';

    //add support for foreach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                if(sParameterName[1] === true){
                    return true;
                }else{
                    if(sParameterName[1] === false){
                        return false;
                    }
                }
                return decodeURIComponent(sParameterName[1]);
            }
        }
        return "";
    }


    function is_int(value) {
        if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
            return true;
        } else {
            return false;
        }
    }


    //set the original url field
    function setOriginalUrlField() {
        $("#msform").append('<input type="hidden" id="original_url" name="original_url" value="' + window.location.href +'">');
    }


    jQuery.validator.addMethod("emailfull", function (value, element) {
        return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
    }, "Please enter valid email address!");

    jQuery.validator.addMethod("boolean", function (value, element) {
        if(value == 1 || value == 0) return true;
        else return false;
    }, "Please enter valid value!");

    jQuery.validator.addMethod("minLengthNoSpaces", function (value, element, len) {
        if((typeof value !== 'undefined') && (typeof value === 'string' || value instanceof String)) {
            if(value.includes("@")) {
                return false;
            }
            var noSpacesValue = value.split(' ').join('');
            if((typeof noSpacesValue !== 'undefined') && (typeof noSpacesValue === 'string' || noSpacesValue instanceof String)) {
                return noSpacesValue.length >= len;
            }
        }
        return true
    });

    jQuery.validator.addMethod("hasNumber", function (value, element) {
        return value.match(".*\\d.*");
    }, "Your address must include the house/unit number.");

    jQuery.validator.addMethod("hasLettersAndSpaces", function (value, element) {
        return value.match(/[a-zA-Z]/) && value.trim().match(/\s/);
    }, "Your address must include letters and spaces.");

    jQuery.validator.addMethod("notNumber", function (value, element) {
        return !value.match(".*\\d.*");
    }, "Number not permitted.");

    jQuery.validator.addMethod("state", function (value, element) {
        var states = "|AL|AK|AS|AZ|AR|CA|CO|CT|DE|DC|FM|FL|GA|GU|HI|ID|IL|IN|IA|KS|KY|LA|ME|MH|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|MP|OH|OK|OR|PW|PA|PR|RI|SC|SD|TN|TX|UT|VT|VI|VA|WA|WV|WI|WY|";
        return (value.length == 2 && states.indexOf(value) !== -1)
    }, "Please enter two letter state name.");

    jQuery.validator.addMethod("phone_number", function (value, element) {
        var phone_selector = $('input[name="phone"]');
        if (phone_selector.mask !== undefined) {
            var phone_value_clean = phone_selector.cleanVal();
        }
        else {
            var phone_value_clean = phone_selector.val();
        }
        if(phone_value_clean.length < 10) {
            return false
        }
        if(phone_value_clean.length == 11 && phone_value_clean.charAt(0) != '1') {
            return false;
        }
        return true;

    }, "Please enter a valid phone!");

    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    //process url parameters
    function processUrlParameters() {
        $("#ef_aff_id").val(getUrlParameter('ef_aff_id'));
        $("#transaction_id").val(getUrlParameter('transaction_id'));
        //$("#source").val(getUrlParameter('source'));
        var s_params = ["s2", "s3", "s4", "s5"];

        //check for both S2 and s2, S3 and s3 etc
        s_params.forEach(function (item, index) {
            var param_val = getUrlParameter(item);
            if (param_val) $("#" + item).val(param_val);
            else {
                param_val = getUrlParameter(item.toUpperCase());
                if (param_val) {
                    $("#" + item).val(param_val);
                }
            }
        });

        if (!$("#ef_aff_id").val()) {
            $("#ef_aff_id").val(getUrlParameter('AFFID'));
        }
        if (!$("#transaction_id").val()) {
            $("#transaction_id").val(getUrlParameter('TRANSACTIONID'));
        }

        var gclid = getUrlParameter('gclid');
        if(gclid) {
            $("#msform").append('<input type="hidden" name="gclid" id="gclid" value="' + gclid + '">');
        }

        var type = getUrlParameter('type');
        if(type) {
            $("#msform").append('<input type="hidden" name="type" id="type" value="' + type + '">');
        }
    }

    var in_click = false;
    var phoneValid = false;

    $(document).ready(function() {

        $.ajaxSetup({
            //timeout: 20000, //Time in milliseconds
            cache: false
        });

        $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());


        //mask phone (000)-000-000000
        var phoneSelector = $('input[name="phone"]');



        var maskOptions = {
            onKeyPress: function (cep, e, field, options) {
                var masks = ['(000) 000-0000'];
                var mask =  masks[0];
                $('input[name="phone"]').mask(mask, options);
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

        //disable copy/paste
        $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
            e.preventDefault();
        });



    });



</script>
<script>
    $(document).ready(function(){
        $("#msform").validate({
            rules: {
                zip_code: {
                    required: true,
                    digits: true,
                    minlength: 5,
                    maxlength: 5
                },
                email_address: {
                    required: true,
                    emailfull: true,
                },
                first_name: {
                    required: true,
                    minLengthNoSpaces: 3,
                    notNumber: true,
                },
                last_name: {
                    required: true,
                    minLengthNoSpaces: 3,
                    notNumber: true,

                },
                state: {
                    required: true,
                    state: true
                },
                city: {
                    required: true
                },
                phone: {
                    required: true,
                    phone_number: true
                },
                address: {
                    hasLettersAndSpaces:true,
                    required: true,
                    hasNumber: true,
                    minLengthNoSpaces: 5
                },
            },

            messages: {
                zip_code: 'Please enter valid US zip code.',
                email_address: {
                    required: 'Please enter your email address!',
                    emailfull: 'Invalid email - please check spelling or use another!',
                    remote: 'Invalid email - please check spelling or use another!'
                },
                first_name: "Don't forget to tell us your name.",
                last_name: "Don't forget to tell us your last name.",
                address: {
                    required: 'Please enter your address.',
                    hasNumber:  'Your address must include the house/unit number. ',
                    minLengthNoSpaces: 'Your address is too short'
                },
                phone: 'Please enter a valid phone number'
            },

            errorElement : 'div',
            errorPlacement: function(error, element) {
                if(element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
                    $('input[name="' + element.attr('name') + '"]').last().next().after(error);
                } else {
                    $(element).next().after(error);
                }
            },
            onkeyup :false,
        });
    });

</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWGUjDoetHonsX_8REioiFxYojrnomGIs&libraries=places"></script>
<script src="{{ asset('js/jquery.geocomplete.min.js') }}"></script>
<script>
    var invalid_city_state = false;
    if(typeof window.google !== 'undefined' && typeof window.google.maps !== 'undefined') {
        $("#address").geocomplete({
            formId: "#msform",
            componentRestrictions: {
                country: ['us']
            },
            types: ['address'],
            fields: ['address_components'],
            onChange: function (name, result) {
                var searchAddressComponents = result.address_components;
                $.each(searchAddressComponents, function () {
                    if (this.types[0] === "locality") {
                        $(".city_span, #fcity").text(this.short_name);
                        if(!$("#city").val()) {
                            invalid_city_state = true;
                            $("#city").val(this.short_name);
                        }
                    }
                    if (this.types[0] === "administrative_area_level_1") {
                        $(".state_span, #fstate").text(this.short_name);
                        if(!$("#state").val()) {
                            invalid_city_state = true;
                            $("#state").val(this.short_name);
                        }
                    }
                    if (this.types[0] === "postal_code") {
                        $(".zip_span").text(this.short_name);
                        if(invalid_city_state) {
                            $("input[name='zip_code']").val(this.short_name);
                        }
                    }
                });
                $('#add-change').show();
                $('.address_loc').slideDown();
                $('#adddetails-change').hide();
                $("input[name='address']").valid();

                //Autocomplete if house number is invalid
                var originalAddress = $("input[name='address']").val();
                var matches = originalAddress.match(/(\d+)/);
                setTimeout(function () {
                    function hasNumbers(t)
                    {
                        var regex = /\d/g;
                        return regex.test(t);
                    }
                    var updatedAddress = $("input[name='address']").val();
                    if(!hasNumbers(updatedAddress) && hasNumbers(originalAddress) && matches) {
                        $("input[name='address']").val(matches[0] + " " + updatedAddress);
                    }
                    $("input[name='address']").valid();
                }, 100);
            }
        });
    }

    $(".change-address").bind("click", function () {
        $(this).parents('.address_change').fadeOut(function () {
            $(this).next().fadeIn(
                function () {
                    $(this).find('input,select').first().focus();
                });
        });
        return false;
    });
</script>
</body></html>
