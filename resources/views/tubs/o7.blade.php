<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'tubs';
$page = 'o7';
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
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tubs-o7.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
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

            @include('partials.hidden-inputs')

            <input type="hidden" id="city" name="city" value>
            <input type="hidden" id="state" name="state" value>
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
                    <div class="zip-error form-error-message">Please enter valid US zip code.</div>
                </div>
                <div class="zip_error mb-2" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                <label style="visibility: hidden; position: absolute;" for="city">city</label>
                <label style="visibility: hidden; position: absolute;" for="state">state</label>
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
<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.mask.js') }}"></script>
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

    $(document).ready(function () {

        $.sessionStartTime = new Date();

        $('form').submit(function (e) {
            var form = this;
            e.preventDefault();

            if (!$(form).validate().form()){
                return;
            } else {
                let formData = prepFormDataForSubmit('{{$vertical}}', '{{$page}}');
                submitLead(formData);
            }
            $('#form_submit').removeAttr('disabled');
        });


        var totalStep = $("fieldset").length
        var currentStep = $('fieldset:visible').data('step');
        var s = 1;
        $('form fieldset').each(function () {
            $(this).attr('data-step', s++);
        });

        var fieldset = $("form fieldset");
        var totalStep = fieldset.length;
        var current_step = 0;

        window.zip_container = true;

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
            validateZip('o7');
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
                                        stepanimateO7Funnels();
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
                                stepanimateO7Funnels();
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

        $('input[type=radio][name=project_reason_radio]').click(function(){
            $('#project_reason').val($(this).val());
        });

        $('input[type=radio][name=time_frame_radio]').click(function(){
            $('#time_frame').val($(this).val());
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
                $("#phone-custom-error").hide();api.ipify.org
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
                    $.stepanimateO7Funnels();
                });

            });
        });

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

    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }

</script>
</body>
</html>
