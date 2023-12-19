<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'solar';
$page = 'o7';
?>
@include('partials.redirect_if_missing_vars')
    <!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <title>Solar - ForeverHomeHub</title>
    <meta name="description" content="Lower your electric bill up to 80%">
    <meta name="author" content>
    <meta name="keywords" content>
    <meta itemprop="description" content="Lower your electric bill up to 80%">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Lower your electric bill up to 80%">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Lower your electric bill up to 80%">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/solar-o7.css') }}" rel="stylesheet">
    <style>
        button[disabled] {
            opacity:0.7;
        }
        input.error, select.error {
            border: 1px solid red;
        }
    </style>

    <link rel="manifest" href={{ asset('manifest.json') }}>

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

</head>
<body>
<main class="container">
    <header>
        <h1>Forever Home Hub</h1>
        <span id="subHead">
<h2>Get Your Free Solar Quotes</h2>
<p> Take this survey to find out if you qualify. Only takes 30 seconds!</p>
</span>
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
            <input type="hidden" name="monthly_electric_bill" id="monthly_electric_bill" value="$201-$300">
            <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
            <input type="hidden" id="property_type" name="property_type" value="Single Family">
            <input type="hidden" id="roof_type" name="roof_type" value="Tile">
            <input type="hidden" name="credit_rating" id="credit_rating" value="Good">
            <fieldset data-step="1">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">Are you a homeowner?</h3>
                <div class="form-group ">
                    <div class="radio-btn radio-next">
                        <input id="pc01" type="radio" name="own_rented" value="Own" required>
                        <label for="pc01"><span>Yes</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="pc02" type="radio" name="own_rented" value="Rented" required>
                        <label for="pc02"><span>No</span></label>
                    </div>
                </div>
                <div class="form-btns ml-auto">
                    <button class="btn form-btn btn-next" type="button" hidden>Next</button>
                </div>
            </fieldset>
            <fieldset data-step="2" id="zipContainer">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">What is your zip code?</h3>
                <div class="zip_box">
                    <div class="form-group">
                        <label style="visibility: hidden; position: absolute;" for="zip_code">Zip Code</label>
                        <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                        <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                    </div>
                    <label style="visibility: hidden; position: absolute;" for="city">city</label>
                    <label style="visibility: hidden; position: absolute;" for="state">state</label>
                    <div class="row">
                        <div class="col">
                            <div class="form-btns ml-auto text-center">
                                <button class="btn form-btn btn-next" id="btn-zip" type="button" disabled><span class="btn-text">Next</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="3">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">Who's your electric utility provider?</h3>
                <div class="form-group">
                    <label for="provider-select" class="label" style="visibility: hidden; position: absolute;">Electric
                        Utility</label>
                    <select name="utility_provider" type="text" id="utility_provider" class="form-control custom-select" required>
                        <option value="Other" hidden>Other</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button id="utility-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="4">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">How much is your average monthly electric bill?</h3>
                <div class="form-group">
                    <label for="provider-select" class="label" style="visibility: hidden; position: absolute;">Electric
                        Utility</label>
                    <div class="box_range">
                        <output name="billOutputName" id="billOutputName">710</output>
                        <span class="intcont"><input type="range" id="monthly_electric_bill_range" value="710" min="10" max="800"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button id="bill-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="5">
                <legend hidden="true">homeowner</legend>
                <h3 class="form_box-question">How shaded is your roof area?</h3>
                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input id="rf1" type="radio" name="roof_shade" value="No Shade" required checked>
                        <label for="rf1"><span>No Shade</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rf2" type="radio" name="roof_shade" value="Partial Shade" required>
                        <label for="rf2"><span>Partial Shade</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rf3" type="radio" name="roof_shade" value="Full Shade">
                        <label for="rf3"><span>Full Shade</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="rf4" type="radio" name="roof_shade" value="Not Sure">
                        <label for="rf4"><span>Not Sure</span></label>
                    </div>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
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
            <fieldset data-step="6">
                <legend hidden="true">credit_rating</legend>
                <h3 class="form_box-question mb-1">What is your credit score?</h3>
                <p class="form_box-desc">(Most people have "Good" credit)</p>
                <div class="form-group radio-next">
                    <div class="radio-btn radio-next">
                        <input id="ref-cr01" type="radio" name="credit_rating_radio" value="Excellent" required>
                        <label for="ref-cr01"><span><b>Excellent</b> (720 and above)</span></label>
                    </div>
                    <div class="radio-btn radio-next">
                        <input id="ref-cr02" type="radio" name="credit_rating_radio" value="Good" required checked>
                        <label for="ref-cr02"><span><b>Good</b> (660-719)</span></label>
                    </div>
                    <div class="radio-btn radio-next">
                        <input id="ref-cr03" type="radio" name="credit_rating_radio" value="Fair" required>
                        <label for="ref-cr03"><span><b>Average</b> (620-659)</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="ref-cr04" type="radio" name="credit_rating_radio" value="Fair" required>
                        <label for="ref-cr04"><span><b>Below Average</b> (580-619)</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="ref-cr05" type="radio" name="credit_rating_radio" value="Poor" required>
                        <label for="ref-cr05"><span><b>Poor</b> (579 and below)</span></label>
                    </div>
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
            <fieldset data-step="7">
                <legend hidden="true">Email</legend>
                <h3 class="form_box-question">Where do you live?</h3>
                <div class="form-group mb-3" id="street_address">
                    <label for="address" class="label" style="visibility: hidden; position: absolute;">Street Address*</label>
                    <input id="address" class="form-control" name="address" type="text" placeholder="Enter Street Address" data-geocomplete="street address" required>
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                    <div class="form-error-message"> Please complete this field</div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button id="address-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="8" id="phoneContainer">
                <legend hidden="true">Email</legend>
                <center>
                    <h3 class="form_box-question mb-1 v2">Your rates are ready to view!</h3>
                    <p class="form_box-desc">Enter your info so we can personalize your results.</p>
                </center>
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
                <div class="form-group">
                    <label for="email">Email Address*</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email_address" placeholder="Email Address" required>
                    <div class="form-error-message">Please enter a valid email address</div>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
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
                <div class="form-btns mx-auto sbmt">
                    <button class="btn form-btn btn-next" type="button" id="form_submit"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <div id="tcpa_cont" style="display: none;">
        <label id="tcpa_label"><input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
            to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
            marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
            telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
            a condition of purchase. I also have read and agree to the <a href="https://foreverhomehub.com/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://foreverhomehub.com/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.</label>
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                var tcpa_text = jQuery("#phoneContainer button").text();
                jQuery("#phoneContainer #tcpa_text").html(tcpa_text);
            });
        </script>
    </div>
    <center><img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="trusted mt-3"></center>
</main>
<footer>
    <div class="container text-center">
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

<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0.js') }}"></script>

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
            full_name: {
                required: true,
                fullName: true
            },
            monthly_electric_bill: {
                required: true
            },
            roof_shade: {
                required: true
            },
            utility_provider: {
                required: true
            },
            address: {
                hasLettersAndSpaces:true,
                required: true,
                hasNumber: true,
                minLengthNoSpaces: 5
            },
            phone: {
                required: true,
                phone_number: true
            },
            state: {
                required: true,
                state: true
            }
        },
        messages: validationMessages,
        errorElement: 'div',
        onkeyup :false,
    });


    $(document).ready(function() {

        document.getElementById('email').addEventListener('blur', function () {
            const email = $('#email').val();
            const ipAddress = $('#ip_address').val();

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailPattern.test(email)) {
                validateEmail(email, ipAddress)
                    .then((isValid) => {
                        if (isValid === true) {
                            $.isEmailValid = true;
                        } else {
                            $.isEmailValid = false;
                        }
                    })
                    .catch((error) => {
                        $.isEmailValid = false;
                    });
            }

        });

        document.getElementById('email').addEventListener('input', function(event) {
            $.isEmailValid = false;
        });

        $.sessionStartTime = new Date();

        //Custom submission for the pages with phone and email on the same fieldset
        $('form').submit(function (e) {
            var form = this;
            e.preventDefault();

            if(!$.isEmailValid){
                (async function(){
                    var emailValid = await emailIsValid();
                    if(emailValid === false){
                        return;
                    }
                })()
            }
            if (!$(form).validate().form() || $("#email-custom-error").is(":visible") || !$.isEmailValid){
                return;
            } else {
                let formData = prepFormDataForSubmit('{{$vertical}}', '{{$page}}');
                submitLead(formData, '{{$vertical}}');
            }
        });


        $('input[type=radio][name=credit_rating_radio]').click(function(){
            $('#credit_rating').val($(this).val());
        });

        $("#monthly_electric_bill_range").change(function(){
            $("#billOutputName").val($("#monthly_electric_bill_range").val());
            if($(this).val() <= 50) {
                $("#monthly_electric_bill").val("$0-$50");
            }

            if( ($(this).val() >= 51) && ($(this).val() <= 100) ) {
                $("#monthly_electric_bill").val("$51-$100");
            }

            if( ($(this).val() >= 101) && ($(this).val() <= 150) ) {
                $("#monthly_electric_bill").val("$101-$150");
            }

            if( ($(this).val() >= 151) && ($(this).val() <= 200) ) {
                $("#monthly_electric_bill").val("$151-$200");
            }

            if( ($(this).val() >= 201) && ($(this).val() <= 300) ) {
                $("#monthly_electric_bill").val("$201-$300");
            }

            if( ($(this).val() >= 301) && ($(this).val() <= 400) ) {
                $("#monthly_electric_bill").val("$300-$400");
            }

            if($(this).val() >= 401){
                $("#monthly_electric_bill").val("$400+");
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

        $("#zip").change(function () {
            $("#add-zip").val($("#zip").val());
            $(".zip_span").text($("#zip").val());
            setTimeout(function(){
                $("#add-city").val($("#city").val());
                $(".city_span").text($("#city").val());
                $("#add-state").val($("#state").val());
                $(".state_span").text($("#state").val());
            }, 3000);

        });

        var fieldset = $("form fieldset");

        window.zip_container = false;

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

        $("#provider-select").on('change',function(){
            $(this).closest("fieldset").find(".btn-next").trigger("click");
        });

        $("input:radio").click(function() {
            $(this).closest("fieldset").find(".btn-next").trigger("click");
        });

        $(".btn-next").click(function(){
            if(!window.zip_container){
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                var current_step = fieldset.index(parent_fieldset) + 1;
                var progwidth = $(this).parents('fieldset').next().attr('data-bar');

                if(current_step+1 === $('#zipContainer').data('step')){
                    window.zip_container = true;
                }

                parent_fieldset.find('[required]:visible').each(function() {
                    var result = $("#msform").valid();
                    if (!result) {
                        next_step = false;
                    }
                });

                if( next_step ) {
                    if(current_step === $('#phoneContainer').data('step')){
                        (async function(){
                            var phoneValid = await phoneIsValid();
                            if(phoneValid === false){
                                return;
                            }else{
                                $('form').submit();
                            }
                        })()
                    }
                    var ls = $('#phoneContainer').data('step');

                    if(current_step < ls) {
                        parent_fieldset.removeClass('fadeInRight');
                        parent_fieldset.toggleClass('fadeOutLeft');
                        parent_fieldset.fadeOut(function() {
                            $(this).find('.form-group').children('.form-error-message').hide();
                            $("body").animate({ scrollTop: 0 },'500');window.top.scrollTo(0,0)

                            $(this).next().fadeIn(
                                function() {
                                    $(this).find('input').first().focus();
                                    stepanimateO7Funnels();
                                });

                        })
                    }
                }
            }
        });
    });

</script>

</body>

</html>
