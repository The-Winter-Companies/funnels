<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'roofing';
$page = 'f1';
$sessionStartTime = \Illuminate\Support\Carbon::now();
?>
@include('partials.redirect_if_missing_vars')

    <!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources."/>
    <meta name="author" content="">
    <meta name="keywords" content=""/>
    <title>Roofing - ForeverHomeHub</title>

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta itemprop="image" content="../assets/img/favicon.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:image" content="../assets/img/favicon.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Description">
    <meta name="twitter:image" content="">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roofing-f1.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <script type="text/javascript">
        document.createElement('header');
        document.createElement('nav');
        document.createElement('menu');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
    </script>
    <![endif]-->
    <!--[if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

</head>

<body>
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
        <fieldset class="field_zip" data-step="0"><legend hidden="true" style="visibility: hidden; position: absolute;">Zip Code</legend>

            @include('partials.hidden-inputs')

            <input type="hidden" id="city" name="city" value>
            <input type="hidden" id="state" name="state" value>
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
                        <label for="state" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">state</label>
                    </div>
                    <div class="form-btns">
                        <button class="btn form-btn btn-next" id="btn-zip" type="button" disabled><span class="btn-text">Get Started</span></button>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="1"><legend hidden="true">material</legend>
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
        <fieldset data-step="2"><legend hidden="true">timeline</legend>
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
                <button id="address-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button>
            </div>
        </fieldset>
        <fieldset data-step="3" id="phoneContainer"><legend hidden="true">Phone</legend>
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
<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"></script>
<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<![endif]-->
<script src="{{ asset('js/jquery/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.validate.min.js') }}"></script>

@include('partials.funnel_scripts', ['vertical' => $vertical, 'page' => $page])

<script>
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
                phone_number: true
            },
            address: {
                hasLettersAndSpaces:true,
                required: true,
                hasNumber: true,
                minLengthNoSpaces: 5
            },
        },
        messages: validationMessages,
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


    $(document).ready(function() {

        document.getElementById('email').addEventListener('blur', function() {
            console.log('entered blur');
            const email = $('#email').val();
            const ipAddress = $('#ip_address').val();

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailPattern.test(email)) {
                console.log('email is ok');
                validateEmail(email, ipAddress)
                    .then((isValid) => {
                        if(isValid === true){
                            $.isEmailValid = true;
                        }
                        // Handle the result if needed
                        console.log('Email validation result:', isValid);
                    })
                    .catch((error) => {
                        $.isEmailValid = false;
                        // Handle errors if any
                        console.error('Validation error:', error);
                    });
            }

        });

        $.sessionStartTime = new Date();

        $('form').submit(function (e) {
            var form = this;
            e.preventDefault();

            if(!$.isEmailValid){
                (async function(){
                    var emailValid = await emailIsValid();
                    if(emailValid === false){
                        return;
                    }else{

                    }
                })()
            }
            if (!$(form).validate().form() || $("#email-custom-error").is(":visible") || !$.isPhoneValid || !$.isEmailValid){
                return;
            } else {
                let formData = prepFormDataForSubmit('{{$vertical}}', '{{$page}}');
                submitLead(formData);
            }
            $('#form_submit').removeAttr('disabled');
        });

        window.zip_container = true;
        var f = 1;
        $('form fieldset').each(function(){
            $(this).attr('data-step',f++);
        });

        mincont();
        var fieldset = $("form fieldset");
        var totalStep = fieldset.length;
        var current_step = 0;

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
            validateZip('f1');
        });

        /* next step*/
        $(".radio-next input[type=radio],.btn-next").bind("click",function () {
            if(!window.zip_container){
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
                            //var emailValid = await emailIsValid();
                            var phoneValid = await phoneIsValid();
                            if(phoneValid === false){
                                return;
                            }else{
                                $.isPhoneValid = true;
                                $('form').submit();
                                // $('#form_submit').attr('disabled', 'disabled');
                            }
                        })()
                    }

                    var ls = $('#phoneContainer').data('step');

                    if( parent_fieldset.data('step') < ls ) {
                        parent_fieldset.hide("slide", {direction: "left"}, 300, function() {
                            $(this).next().show("slide", { direction: "right" }, 300, function() {
                                $(this).find('input:not([name=address]),select').first().focus();
                            });
                            stepanimateFunnelsF1();
                        });

                    }
                }
            }
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

        $('input[type=radio][name=roofing_type_radio]').click(function(){
            $('#roofing_type').val($(this).val());
        });

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

        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
        if (isAndroid) {
            $('select.form-control').removeClass('form-control').css({'width': '100%', 'height': '50px'})
        }

        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);

    //add support for foreach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }

</script>
</body>
</html>

