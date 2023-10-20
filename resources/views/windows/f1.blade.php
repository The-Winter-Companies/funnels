<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
?>
@include('partials.redirect_if_missing_vars')

    <!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head profile="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="author" content>
    <meta name="keywords" content="windows companies,windows contractors,windows companies near me,windows supply, window fitter near me, glass technician">
    <meta http-equiv="cleartype" content="on">
    <title>Windows - ForeverHomeHub</title>
    <meta name="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="author" content>
    <meta name="keywords" content="window companies,window contractors,window companies near me,window supply, window near me">
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en-IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-4.0.0-windows-K2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-windows-K2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-windows-K2.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/trusted.svg') }}">
    <script type="text/javascript">if(typeof window.jQuery === 'undefined') {document.write('<script src=""{{ asset('s/jquery-3.4.1.min.js') }}"><\/script>');}</script>
    <!--[if (gte IE 6)&(lte IE 8)]>
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS7PJDW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header>
    <div class="container">
        <nav class="navbar text-center">
            <h1 class="navbar-brand mx-auto"><img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="180" height="47" alt="ForeverHomeHub" class="img-fluid"></h1>
        </nav>
    </div>
</header>
<div class="hero">
    <h2>
        Find Top-Rated Window Pros And Save!
    </h2>
    <p>
        Compare free quotes & calculate savings!
    </p>
</div>
<form id="msform" class="form">
    <input id="leadid_token" name="universal_leadid" type="hidden" value>
    <input type="hidden" id="session_id" name="session_id" value>
    <input type="hidden" id="complete" name="complete" value="0">
    <input type="hidden" id="token" name="token" value>
    <input type="hidden" id="ef_aff_id" name="ef_aff_id" value>
    <input type="hidden" id="tx_id" name="tx_id" value>
    <input type="hidden" id="sub_id" name="sub_id" value>
    <input type="hidden" id="s1" name="s1" value>
    <input type="hidden" id="s2" name="s2" value>
    <input type="hidden" id="s3" name="s3" value>
    <input type="hidden" id="s4" name="s4" value>
    <input type="hidden" id="s5" name="s5" value>
    <input type="hidden" id="tcpa_text" name="tcpa_text" value>
    <input type="hidden" id="lotame_profile_data" name="lotame_profile_data" value>
    <input type="hidden" id="time_spent_on_page" name="time_spent_on_page" value="0">
    <input type="hidden" name="best_time_to_call" value="Any time">
    <input type="hidden" name="gender" value="Unspecified">
    <input type="hidden" name="authorized_to_make_changes" value="Yes">
    <input type="hidden" name="own_rented" id="own_rented" value="Own">
    <input type="hidden" name="purchase_timeframe" value="Not Sure">
    <div id="hero-header-progress-wrapper">
        <div id="hero-header-progress">
            <div class="circle-progress" data-progress="0"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span>
                <div class="progress-value">
                    <div class="progress-content"><span class="percent">Start</span>
                        <br><span class="complete"><i class="arrowdown"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <fieldset id="zip-container" data-step="1" class="fadeIn">
            <legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> would this project take place?</h3>
            <p class="step-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group"><label style="visibility: hidden; position: absolute;" for="zip">Zip
                        Code</label>
                    <input id="zip" class="form-control zipcode" type="text" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                    <input type="hidden" id="city" name="city" value>
                    <input type="hidden" id="state" name="state" value>
                    <div class="zip-error form-error-message">Please enter valid US zip code.</div>
                </div>
                <div class="zip_error mb-2" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-zip"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="3" class="fadeInRight">
            <legend style="visibility: hidden; position: absolute;">full name</legend>
            <h3 class="step-title mb-4"><b>Who</b> is this project for?</h3>
            <div class="container" style="max-width:500px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="firstName">FirstName</label>
                    <input id="firstName" pattern="[a-zA-Z0-9]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required autofocus tabindex="1">
                    <div class="form-error-message">Don't forget to tell us your name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="lastName">Last Name</label>
                    <input id="lastName" pattern="[a-zA-Z0-9]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required tabindex="2">
                    <div class="form-error-message">Don't forget to tell us your last name.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                    <center>
                        <div class="secure-text">
                            Your information is secure.
                        </div>
                    </center>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="4" class="fadeInRight" style="min-height: 238px;">
            <legend style="visibility: hidden; position: absolute;">Email</legend>
            <h3 class="step-title">Do you need to <b>replace</b> or <b>repair</b> an existing windows?</h3>
            <div class="container">
                <div class="form-group parent-error radio-next">
                    <div class="form-group parent-error">
                        <div class="radio-colored">
                            <input id="repair-repairno" type="radio" name="project_type" value="Replace Unit" checked="checked" data-required="nonempty">
                            <label for="repair-repairno">Replace</label> <span></span></div>
                        <div class="radio-colored">
                            <input id="repair-repairyes" type="radio" name="project_type" value="Repair" data-required="nonempty">
                            <label for="repair-repairyes">Repair</label> <span></span></div>
                        <div class="form-error-message">Pros need this information to generate a quote.</div>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="5" class="fadeInRight" style="min-height: 238px;">
            <legend style="visibility: hidden; position: absolute;">windows</legend>
            <h3 class="step-title">How many <b>windows</b> are involved in the project? </h3>
            <div class="container">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col">
                            <input id="10windows" class="img-radio" type="radio" name="number_of_windows" value="10+ windows" required>
                            <label class="radio-label" for="10windows"><span>10+</span></label>
                        </li>
                        <li class="col">
                            <input id="69windows" class="img-radio" type="radio" name="number_of_windows" value="6 to 9 windows" required>
                            <label class="radio-label" for="69windows"><span>6-9</span></label>
                        </li>
                        <li class="col">
                            <input id="35windows" class="img-radio" type="radio" name="number_of_windows" value="3 to 5 windows" checked required>
                            <label class="radio-label" for="35windows"><span>3-5</span></label>
                        </li>
                        <li class="col">
                            <input id="2windows" class="img-radio" type="radio" name="number_of_windows" value="2 windows" required>
                            <label class="radio-label" for="2windows"><span>2</span></label>
                        </li>
                        <li class="col">
                            <input id="1window" class="img-radio" type="radio" name="number_of_windows" value="1 window" required>
                            <label class="radio-label" for="1window"><span>1</span></label>
                        </li>
                    </ul>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset class="fadeInRight" data-step="6">
            <legend style="visibility: hidden; position: absolute;">Timeline</legend>
            <h3 class="step-title"><b>How soon</b> do you want to begin this project?</h3>
            <div class="container" style="max-width:640px;">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col-md-4 col-12">
                            <input id="t1" class="img-radio" type="radio" name="timeline" value="Immediately" required>
                            <label class="radio-label" for="t1"><span>Immediately</span></label>
                        </li>
                        <li class="col-md-4 col-12">
                            <input id="t2" class="img-radio" type="radio" name="timeline" value="Within 6 months" required>
                            <label class="radio-label" for="t2"><span>Within 6 months</span></label>
                        </li>
                        <li class="col-md-4 col-12">
                            <input id="t3" class="img-radio" type="radio" name="timeline" value="Not sure" required>
                            <label class="radio-label" for="t3"><span>Not sure</span></label>
                        </li>
                    </ul>
                    <div class="form-error-message col-12">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset class="fadeInRight" data-step="7">
            <legend style="visibility: hidden; position: absolute;">Home</legend>
            <h3 class="step-title">Do you own your <b>home</b>?</h3>
            <div class="container" style="max-width:640px;">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col-12 mb-0">
                            <input id="h1" class="img-radio" type="radio" name="ownhome" value="Yes" required>
                            <label class="radio-label" for="h1"><span>Yes I do</span></label>
                        </li>
                        <li class="col-12 mb-0">
                            <input id="h2" class="img-radio" type="radio" name="ownhome" value="No, but im allowed to make changes" required>
                            <label class="radio-label" for="h2"><span>No, but im allowed to make changes</span></label>
                        </li>
                        <li class="col-12 mb-0">
                            <input id="h3" class="img-radio" type="radio" name="ownhome" value="No" required>
                            <label class="radio-label" for="h3"><span>No I don't</span></label>
                        </li>
                    </ul>
                    <div class="form-error-message col-12">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="8" class="fadeInRight">
            <legend style="visibility: hidden; position: absolute;">address</legend>
            <h3 class="step-title"><b>Where</b> will this project take place?</h3>
            <p class="step-desc">This helps us find and compare contractors in your area.</p>
            <div class="container" style="max-width:640px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="address">Street Address</label>
                    <input id="address" class="form-control" type="text" name="address" placeholder="Street Address" data-geocomplete="street address" required>
                    <div class="form-error-message">Please enter your address.</div>
                    <input type="hidden" id="address_short" value="">
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                </div>
                <div class="form-group parent-error" id="div-homeowner">
                    <div class="checkbox checkbox--no-border">
                        <label>
                            <input id="homeowner" type="checkbox" checked="checked"> I am the homeowner</label>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset id="phoneContainer" data-step="9" class="fadeInRight">
            <legend style="visibility: hidden; position: absolute;">Phone</legend>
            <center>
                <h3 class="step-title step-ready"><b>Congratulations!</b><br>We found matching pros in your area!</h3>
                <p class="step-desc">Get quotes from up to 3 top-rated providers. - fast!</p>
            </center>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <label for="email" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;" hidden="true">Email</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email" placeholder="Email Address" required>
                    <div class="form-error-message">Please enter your email address.</div>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="phone">Phone Mobile Number</label>
                    <input id="phone" class="form-control" type="tel" name="phone" placeholder="Enter Mobile Phone Number" required>
                    <div class="form-error-message">Please enter a valid phone number.</div>
                    <label id="phone-custom-error" class="mt-3" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="form_submit"><span class="btn-text">CONTINUE</span>
                    </button>
                    <center>
                        <div class="secure-text">
                            Your information is secure.
                        </div>
                    </center>
                </div>
            </div>
            <center><img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="mt-3"></center>
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
        </fieldset>
        <center><img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="trusted mt-3"></center>
    </div>
</form>
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
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<![endif]-->
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>

    (function(){

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

            processUrlParameters();

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

            $("#zip").on('keyup change', function (e) {
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


            //mask phone (000)-000-000000
            var phoneSelector = $('input[name="phone"]');



            var maskOptions = {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['(000)-000-0000', '0(000)-000-0000'];
                    var mask = (cep.length > 14) ? masks[1] : masks[0];
                    $('input[name="phone"]').mask(mask, options);
                },
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optional: true
                    }
                }
            };

            if (phoneSelector.mask !== undefined) {
                phoneSelector.mask('(000)-000-0000', maskOptions);
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

            /* progress */
            function stepanimate(){
                var scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)


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
                        $(".percent").html(98 + '%');
                    }else{
                        $(".percent").html(currentPercent+ '%');
                    }


                    $({ Counter: prevPercent }).animate({ Counter: $('.percent').text()},
                        {
                            duration: 1500,
                            step: function() {
                                $('.percent').text(Math.ceil(this.Counter) + '%');
                                $(".circle-progress").attr('data-progress',Math.ceil(this.Counter));
                            }
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


            // Form submit

            $('form').submit(function (e) {
                var form = this;
                e.preventDefault();

                if (!$(form).validate().form())
                    return;
                // $('#form_submit').prop('disabled', true);

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


                // var ajaxdata = JSON.stringify(formdata);
                // console.log(ajaxdata);

                // prepare form for lead post



                formdata['email_address'] = $('#email').val();
                formdata['lead'] = "true";
                formdata['vertical'] = "windows";
                formdata['token'] = token;
                formdata['currentStep'] = current_step;
                formdata['totalSteps'] = totalStep;
                formdata['getParams'] = getUrlVars();
                formdata['url'] = window.location.href;

                window.formdata = formdata;

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $submitUrl?>',
                    data: formdata,
                    // async: false,
                    dataType: "text",
                    success: function (data) {
                        var result = JSON.parse(data);
                        if(result.complete){
                            window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val());
                            // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                        }
                    }, error: function(data) {
                        // console.log(data);
                        alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                    }
                });
                stl(formdata);
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

    $(document).ready(function () {
        $('#homeowner').click(function () {
            if($(this).is(":checked")) {
                $('#own_rented').val('Own');
            }else {
                $('#own_rented').val('Rented');
            }
        });

    });
</script>
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
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };

    //process url parameters
    function processUrlParameters() {
        $("#ef_aff_id").val(getUrlParameter('ef_aff_id'));
        $("#sub_id").val(getUrlParameter('sub_id'));
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
        if (!$("#sub_id").val()) {
            $("#sub_id").val(getUrlParameter('SUBID'));
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

                address: {
                    hasLettersAndSpaces:true,
                    required: true,
                    hasNumber: true,
                    minLengthNoSpaces: 5
                },
                phone: {
                    required: true,
                    phone: true
                },
                state: {
                    required: true,
                    state: true
                },
                project_type: {
                    required: true,
                },
                city: {
                    required: true,
                }

                /*state: {
                required: true
                },
                city: {
                required: true
                }*/
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
                $(element).next().after(error);
            },
            onkeyup :false,
        });
    });

</script>

</body></html>
