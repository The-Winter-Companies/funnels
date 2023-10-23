<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
?>
@include('partials.redirect_if_missing_vars')

    <!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head>
    @include('partials.head', ['vertical' => 'roofing', 'includePushnami' => false])

    <link href="{{ asset('css/lp3-U4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-U4.css') }}" rel="stylesheet">
</head>

<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS7PJDW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header>
    <div class="container">
        <nav class="navbar text-center">
            <h1 class="navbar-brand mx-auto"><img src="{{ asset('img/logo.png') }}" onerror="this.src='../assets/img/logo.png'" width="180" height="47" alt="ForeverHomeHub" class="img-fluid"></h1>
        </nav>
    </div>
</header>
<main>
    <section class="main roofing text-center text-white">
        <h1 class="main_heading ">
            Save BIG On a New Roof!
        </h1>
        <h2 class="main_subheading">
            Compare free quotes and calculate savings !
        </h2>
    </section>
    <section id="progress">
        <div class="progress-value">
            <div class="progress-content">
                <div class="percent"><span>Start</span><i style="display: none;">%</i></div>
                <div class="complete"><i class="progress-arow"></i></div>
            </div>
        </div>
        <svg class="circ" xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
            <circle cx="16" cy="16" r="15.9155" class="progress-bar_background"/>
            <circle cx="16" cy="16" r="15.9155" class="progress-bar_progress js-progress-bar" style="stroke-dashoffset: 100px;"/>
        </svg>
    </section>
    <form class="form container-fluid" id="msform">
        <fieldset class="field_zip" data-step="1"><legend hidden="true" style="visibility: hidden; position: absolute;">Zip Code</legend>
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
            <input type="hidden" id="roofing_type" name="roofing_type" value>
            <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
            <input type="hidden" id="project_type" name="project_type" value="New roof for new home">
            <h3 class="form_box-question mb-2"><b>Where</b> would this project take place?</h3>
            <p class="form_box-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="form-cont mxwdth">
                <div class="zip_box">
                    <div class="form-group">
                        <label for="zip_code" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">Zip Code</label>
                        <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter Your Zip Code Here" required>
                        <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                        <label for="city" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">city</label>
                        <input type="hidden" id="city" name="city" value>
                        <label for="state" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">state</label>
                        <input type="hidden" id="state" name="state" value>
                    </div>
                    <div class="form-btns">
                        <button class="btn form-btn btn-next" id="btn-zip" type="button" disabled><span class="btn-text">Get Started</span></button>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="2"><legend hidden="true">material</legend>
            <h3 class="form_box-question">What type of roof or material do you need or want?</h3>
            <div class="form-cont">
                <div class="form-group radio-next row no-gutter">
                    <div class="material asphalt col-6">
                        <input id="mat-01" type="radio" name="roofing_type_radio" value="Asphalt shingle" required>
                        <label for="mat-01"><span>Asphalt</span></label>
                    </div>
                    <div class="col-6 material clay">
                        <input id="mat-02" type="radio" name="roofing_type_radio" value="Tile" required>
                        <label for="mat-02"><span>Tile</span></label>
                    </div>
                    <div class="col-6 material slate">
                        <input id="mat-03" type="radio" name="roofing_type_radio" value="Natural slate" required>
                        <label for="mat-03"><span>Slate</span></label>
                    </div>
                    <div class="col-6 material wood">
                        <input id="mat-04" type="radio" name="roofing_type_radio" value="Cedar shake" required>
                        <label for="mat-04"><span>Cedar</span></label>
                    </div>
                    <div class="col-6 material other">
                        <input id="mat-05" type="radio" name="roofing_type_radio" value="Tar" required>
                        <label for="mat-05"><span>Tar</span></label>
                    </div>
                    <div class="col-6 material metal">
                        <input id="mat-06" type="radio" name="roofing_type_radio" value="Metal" required>
                        <label for="mat-06"><span>Metal</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
            </div>
            <div class="form-btns">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
            </div>
        </fieldset>
        <fieldset data-step="3"><legend hidden="true">timeline</legend>
            <h3 class="form_box-question mb-2"><b>Where</b> do you live?</h3>
            <p class="form_box-desc">Enter your address to find the best results for your area.</p>
            <div class="form-cont">
                <div class="form-group" id="street_address">
                    <label for="address" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">street address</label>
                    <input id="address" class="form-control" name="address" type="text" placeholder="Start typing a street address" data-geocomplete="street address" required>
                    <input type="hidden" id="address_short" value="">
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                    <div class="form-error-message"> Please complete this field</div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="homeowner" type="checkbox" checked="checked">
                            <label for="homeowner">I am the homeowner</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-btns">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button>
            </div>
        </fieldset>
        <fieldset data-step="4" id="phoneContainer"><legend hidden="true">Phone</legend>
            <center><h3 class="form_box-question last mb-0"><b>
                        Your results are ready!
                    </b></h3></center>
            <p class="form_box-desc">Enter your information and get your results&nbsp;-&nbsp;fast!</p>
            <div class="form-cont">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="first_name">first_name</label>
                    <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required>
                    <div class="form-error-message">Don&#x27;t forget to tell us your name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="last_name">Last Name</label>
                    <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required>
                    <div class="form-error-message">Don&#x27;t forget to tell us your last name.</div>
                </div>
                <div class="form-group">
                    <label for="email" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;" hidden="true">Email</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email" placeholder="Email Address" required>
                    <div class="form-error-message">Please enter your email address.</div>
                    <label id="email-custom-error" class="mt-2" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-group ">
                    <label style="visibility: hidden; position: absolute;" for="phone">Phone Mobile Number</label>
                    <input id="phone" class="form-control" type="tel" name="phone" placeholder="Enter Mobile Phone Number" required>
                    <div class="form-error-message">Please enter a valid phone number.</div>
                    <label id="phone-custom-error" class="mt-2" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns text-center">
                    <button class="btn form-btn btn-next text-uppercase" type="button" id="form_submit"><span class="btn-text">Continue</span></button>
                    <div class="secure-text mb-15">Your information is secure.</div>
                </div>
            </div>
            <div class="form-cont form-cont mxwdth-8 mt-3 text-center">
                <p class="tcpa form-tcpa text-center mt-3">
                    <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                        <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                        to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                        marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                        telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                        a condition of purchase. I also have read and agree to the <a href="https://foreverhomehub.com/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://foreverhomehub.com/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                    </label>
                </p>
                <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                        var tcpa_text = $("button").last().text();
                        $("#tcpa_txt").text(tcpa_text);
                    });
                </script>
            </div>
        </fieldset>
        <center><img src="{{ asset('img/trusted.svg') }}" onerror="this.src='{{ asset('img/trusted.svg') }}'" width="110" height="45" alt="Trusted Site"  class="trusted"></center>
    </form>
</main>
<footer>
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
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<![endif]-->
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>

    (function(){

        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
        if (isAndroid) {
            $('select.form-control').removeClass('form-control').css({'width': '100%', 'height': '50px'})
        }


        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);


        function isStrictMode(){
            return !this;
        }
        /*
           returns false, since 'this' refers to global object and
           '!this' becomes false
        */
        function isStrictMode(){
            "use strict";
            return !this;
        }

        /* min height zip*/
        function mincont() {
            var hd = $('header').outerHeight(),
                fd = $('footer').outerHeight(),
                xd = parseInt(window.innerHeight - (hd + fd));

            $('main').attr('style','min-height:'+xd+'px;');
        }



        $(document).ready(function() {

            var f = 1;
            $('form fieldset').each(function(){
                $(this).attr('data-step',f++);
            });


            mincont();
            var fieldset = $("form fieldset");
            var totalStep = fieldset.length;
            var current_step = 0;

            var resultPhone = false;
            var resultEmail = false;
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

                        if(current_step+1 === $('#phoneContainer').data('step')){
                            (async function(){
                                var emailValid = await emailIsValid();
                                var phoneValid = await phoneIsValid();
                                if(phoneValid === false || emailValid === false){
                                    return;
                                }else{
                                    $('form').submit();
                                    $('#form_submit').attr('disabled', 'disabled');
                                }
                            })()
                        }

                        var ls = $('#phoneContainer').data('step');

                        if( parent_fieldset.data('step') < ls ) {
                            parent_fieldset.hide("slide", {direction: "left"}, 300, function() {
                                $(this).next().show("slide", { direction: "right" }, 300, function() {
                                    $(this).find('input:not([name=address]),select').first().focus();
                                });
                                stepanimate();
                            });

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

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
            });

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

            $('#homeowner').change(function() {
                if(this.checked) {
                    $("#own_rented").val('Own');
                }
                else {
                    $("#own_rented").val('Rented');
                }
            });

            /* progress */
            function stepanimate(){
                var scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

                current_step = $("form fieldset:visible").index()

                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    window.scrollTo(0,0)
                }else{
                    $('html,body').animate({scrollTop: 0}, 500, function(){
                        $('html,body').clearQueue();
                    });
                }

                var totalStep = $('#phoneContainer').data('step'),
                    currentStep = $('form fieldset:visible').data('step'),
                    currentPercent = parseInt((currentStep / totalStep) * 98),
                    percent = 100 - currentPercent,
                    prevStep = $('form fieldset:visible').data('step')-1,
                    prevPercent = parseInt((prevStep / totalStep) * 98);

                if (currentStep > 1){
                    if (currentPercent > 98){
                        $(".percent span").html('100');
                        $('.progress-bar_progress').css({ strokeDashoffset: 0});
                    }else{
                        $('.progress-bar_progress').css({ strokeDashoffset: percent});
                        $('.percent span').html(currentPercent);
                    }


                    $({ Counter: prevPercent }).animate({ Counter: $('.percent span').text()},
                        {
                            duration: 1500,
                            step: function() {$('.percent span').text(Math.ceil(this.Counter)); }
                        });

                    $(".complete").html('completed');
                    $(".percent i").show();
                }

                if($('#phoneContainer').is(':visible')){ $('.trusted').hide(); }
            }

            stepanimate();

            $.height = function () {
                var hd = $('header').outerHeight();
                var xd = parseInt(window.innerHeight - hd);

                $('main').animate({
                    'min-height': xd + 'px'
                }, 500);
            }


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

            $('input[type=radio][name=roofing_type_radio]').click(function(){
                $('#roofing_type').val($(this).val());
            });

            if (phoneSelector.mask !== undefined) {
                phoneSelector.mask('(000) 000-0000', maskOptions);
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


            window.submittingToLeadProsper = false;
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
                    formdata['vertical'] = "roofing";
                    formdata['token'] = token;
                    formdata['currentStep'] = current_step;
                    formdata['totalSteps'] = totalStep;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['roof_type'] = $('#roofing_type').val();
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'roofing-f1';

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
                                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=roofing");
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                            }
                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formdata);
                }else{
                    var formData = fillFormDataRoofing();
                    window.formdata = formData;

                    if(window.submittingToLeadProsper === false){
                        window.submittingToLeadProsper = true;
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
                                    window.location.replace("/thank-you?ef_aff_id="+getUrlParameter('ef_aff_id')+"&ef_tx_id="+getUrlParameter('ef_tx_id')+"&s1="+getUrlParameter('s1')+"&s2="+getUrlParameter('s2')+"&s3="+getUrlParameter('s3')+"&s4="+getUrlParameter('s4')+"&s5="+getUrlParameter('s5')+"&v=roofing"+"&ef_offer_id="+getUrlParameter('ef_offer_id'));
                                }, 500);
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

                            }, error: function(data) {
                                // console.log(data);
                                alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                                $('#form_submit').removeAttr('disabled');
                            }, complete: function() {
                                window.submittingToLeadProsper = false; // Unlock the submit when finished
                            }
                        });
                        stl(formData);
                    } else {
                        console.log('Already submitting to LeadProsper, please wait...');
                    }
                }
            });


// Form submit

            function fillFormDataRoofing() {
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
                formData['lp_campaign_id'] = "17608";
                formData['lp_supplier_id'] = "38543";
                formData['lp_key'] = "2e3nsxqveudg5l";
                if($('#email').val() === 'test@test.com' ){
                    formData['lp_action'] = "test";
                }
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['landing_page_url'] = window.location.href;
                formData['roofing_type'] = $('#roofing_type').val();
                formData['time_frame'] = $('#time_frame').val();
                formData['project_type'] = $('#project_type').val();
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
                formData['healthchecks_slug'] = 'roofing-f1';
                formData['token'] = token;

                return formData;
            }

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



            $('form input, form select').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                var x = $(this).closest("fieldset").find("button");

                if (keyCode === 13) {

                    if(x.prop('disabled') === false){ x.trigger("click");}
                    e.preventDefault();
                    return false;
                }
            });



        });

    })();


</script>
@include('partials.submit')
<script>

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

    jQuery.validator.addMethod("phone", function (value, element) {
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


    $(document).ready(function(){
        $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());


        //disable copy/paste
        $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
            e.preventDefault();
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
                email: {
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
                    phone: true
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
</body>
</html>

