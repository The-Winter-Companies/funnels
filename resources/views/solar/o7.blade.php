<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
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
    <link href="{{ asset('css/bootstrap-4.0.0-solar-S10.css') }}" rel="stylesheet">
    <link href="{{ asset('css/v1-solar-S10.css') }}" rel="stylesheet">
    <style>
        button[disabled] {
            opacity:0.7;
        }
        input.error, select.error {
            border: 1px solid red;
        }
    </style>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <link rel="manifest" href={{ asset('manifest.json') }}>

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6WH8QB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<main class="container">
    <header>
        <h1>ForeverHomeHub</h1>
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
            <input type="hidden" name="monthly_electric_bill" id="monthly_electric_bill" value="$201-$300">
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
                    <input type="hidden" id="city" name="city" value>
                    <label style="visibility: hidden; position: absolute;" for="state">state</label>
                    <input type="hidden" id="state" name="state" value>
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
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
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
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
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
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
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
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script>

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

    jQuery.validator.addMethod("emailfull", function (value, element) {
        return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
    }, "Please enter valid email address!");

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

    jQuery.validator.addMethod("phone_number", function (value, element) {
        var phone_selector = $('input[name="phone"]');
        if (phone_selector.mask !== undefined) {
            var phone_value_clean = phone_selector.cleanVal();
        }
        else {
            var phone_value_clean = phone_selector.val();
        }
        if(phone_value_clean.length < 10) {
            return false;
        }
        if(phone_value_clean.length == 11 && phone_value_clean.charAt(0) != '1') {
            return false;
        }
        return true;

    }, "Please enter a valid phone!");


    jQuery.validator.addMethod("fullName", function (value, element, len) {
        if((typeof value !== 'undefined') && (typeof value === 'string' || value instanceof String)) {
            if(value.includes("@")) {
                return false;
            }
            var index = value.indexOf(" ");  // Gets the first index where a space occours
            if(!index) {
                return false;
            }
            var firstName = value.substr(0, index); // Gets the first part
            var lastName = value.substr(index + 1);  // Gets the text part
            if(typeof firstName !== 'string' || typeof lastName !== 'string' || firstName.length < 4 || lastName.length < 4) {
                return false;
            } else {
                $("#first_name").val(firstName);
                $("#last_name").val(lastName);
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

        messages: {
            zip_code: 'Please enter valid US zip code.',
            email_address: {
                required: 'Please enter your email address!',
                emailfull: 'Invalid email - please check spelling or use another!',
                remote: 'Invalid email - please check spelling or use another!'
            },
            first_name: "Don't forget to tell us your name.",
            last_name: "Don't forget to tell us your last name.",
            full_name: {
                required: "Don't forget to tell us your name.",
                fullName:  "Please enter your full name",
            },
            address: {
                required: 'Please enter your address.',
                hasNumber:  'Your address must include the house/unit number. ',
                minLengthNoSpaces: 'Your address is too short'
            },
            phone: 'Please enter your phone number.'
        },

        errorElement: 'div',


        onkeyup :false,
    });

    $(document).ready(function () {

        $.ajaxSetup({
            //timeout: 20000, //Time in milliseconds
            cache: false
        });


        $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());


        var phoneSelector = $('input[name="phone"]');


        var maskOptions = {
            onKeyPress: function (cep, e, field, options) {
                var masks = ['(000) 000-0000'];
                var mask = masks[0];
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

    (function () {
        "use strict";
        $(document).ready(function () {

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

        });
    })();

</script>

<script>

    (function(){

        function is_int(value) {
            if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
                return true;
            } else {
                return false;
            }
        }

        $(document).ready(function() {
            var zip_inclick = false;
            var fieldset = $("form fieldset");
            var resultEmail = false;
            var resultPhone = false;
            var zip_container = false;

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
                                            zip_container = false;
                                            setUtilityProvidersOptions($('#state').val());
                                            stepanimate();
                                        });
                                });

                            })
                            .fail(function () {
                                zipValidationError()
                            })
                            .always(function () {
                                $('#btn-zip .btn-text').text('Next');
                                zip_inclick = false;
                            });

                    } else if (el.val().length < 5) {
                        zipValidationError()
                    }

                    function zipValidationError() {
                        $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block").css("color", "red");
                        $(".zip_box").addClass('fail')
                    }

                });
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

            function setUtilityProvidersOptions(state){
                var company = JSON.parse(power_company);
                var result = company[state];
                for (var i = 0; i < result.length; i++) {
                    var $o = $('<option>');
                    $o.val(result[i].name);
                    $o.html(result[i].name);
                    $('#utility_provider').append($o);
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

            var token = $.makeid(6);


            $("#provider-select").on('change',function(){
                $(this).closest("fieldset").find(".btn-next").trigger("click");
            });

            $("input:radio").click(function() {
                $(this).closest("fieldset").find(".btn-next").trigger("click");
            });

            $(".btn-next").click(function(){
                if(!zip_container){
                    var parent_fieldset = $(this).parents('fieldset');
                    var next_step = true;
                    var current_step = fieldset.index(parent_fieldset) + 1;
                    var progwidth = $(this).parents('fieldset').next().attr('data-bar');


                    if(current_step+1 === $('#zipContainer').data('step')){
                        zip_container = true;
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

                        if(current_step < ls) {
                            parent_fieldset.removeClass('fadeInRight');
                            parent_fieldset.toggleClass('fadeOutLeft');
                            parent_fieldset.fadeOut(function() {
                                $(this).find('.form-group').children('.form-error-message').hide();
                                $("body").animate({ scrollTop: 0 },'500');window.top.scrollTo(0,0)

                                $(this).next().fadeIn(
                                    function() {
                                        $(this).find('input').first().focus();
                                        stepanimate();
                                    });

                            })
                        }
                    }
                }
            });

            /*
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

             */


            function stepanimate() {
                var scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    window.scrollTo(0, 0)
                } else {
                    $('html,body').animate({scrollTop: 0}, 500, function () {
                        $('html,body').clearQueue();
                    });
                }

                var totalStep = $('fieldset').length;

                var step = $('form fieldset:visible').data('step'),
                    percent = parseInt((step / totalStep) * 98);


                var currentIndex = $('form fieldset:visible').index();

                $('form fieldset:visible').find('input:not([name=address]),select').first().focus();

                $('.progress-bar').css({width: percent + '%'});
                $('#slidenum').html('' + step + ' of ' + totalStep + '');

                if ($('#phoneContainer').is(':visible')) {
                    $('#tcpa_cont').show();
                }

                if (step > 1){
                    $('#subHead').hide();
                }

            }

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

            function fillFormData() {
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
                formData['lp_campaign_id'] = "17604";
                formData['lp_supplier_id'] = "38531";
                formData['lp_key'] = "qqz1h52vku0dpy";
                if($('#email').val() === 'test@test.com' ){
                    formData['lp_action'] = "test";
                }
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['roof_shade'] = "No Shade";
                formData['landing_page_url'] = window.location.href;
                formData['monthly_electric_bill'] = $('#monthly_electric_bill').val();
                formData['utility_provider'] = $('#utility_provider').val();
                formData['credit_rating'] = $('#credit_rating').val();
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
                formData['healthchecks_slug'] = 'solar-o7';
                formData['token'] = token;

                return formData;
            }

            // Form submit

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
                    formdata['vertical'] = "solar";
                    formdata['token'] = token;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'solar-f1';

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
                                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=solar");
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                            }
                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formdata);
                }else{

                    var formData = fillFormData();
                    window.formdata = formData;
                    if(window.submittingToLeadProsper === false) {
                        window.submittingToLeadProsper = true;
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $leadProsperUrl?>',
                            data: formData,
                            // async: false,
                            dataType: "text",
                            success: function (data) {
                                var result = JSON.parse(data);
                                if (result.status !== 'ACCEPTED') {
                                    Rollbar.error('LeadProsper - Lead submission FAILED for' + ' email : [ ' + $('#email').val() + ' ]' + ' REASON: ' + result.message);
                                }
                                setTimeout(function () {
                                    window.location.replace("/thank-you?ef_aff_id=" + getUrlParameter('ef_aff_id') + "&ef_tx_id=" + getUrlParameter('ef_tx_id') + "&s1=" + getUrlParameter('s1') + "&s2=" + getUrlParameter('s2') + "&s3=" + getUrlParameter('s3') + "&s4=" + getUrlParameter('s4') + "&s5=" + getUrlParameter('s5') + "&v=solar" + "&ef_offer_id=" + getUrlParameter('ef_offer_id'));
                                }, 500);
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

                            }, error: function (data) {
                                // console.log(data);
                                alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                                $('#form_submit').removeAttr('disabled');
                            }, complete: function() {
                                window.submittingToLeadProsper = false; // Unlock the submit when finished
                            }
                        });
                    } else {
                        console.log('Already submitting to LeadProsper, please wait...');
                    }

                }

            });

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
            });

        });


    })();

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

</script>
<script type="text/javascript" src="{{ asset('js/power_company-roofing-main.js') }}"></script>

</body></html>

<?php

if(isset($_GET['ef_tx_id'])){
    if(!isset($_GET['ef_aff_id']) && !isset($_GET['ef_offer_id'])){
        echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/o7.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ]! MISSING [ef_offer_id] AND [ef_aff_id]');</script>";
    }else{
        if(!isset($_GET['ef_aff_id']) && isset($_GET['ef_offer_id'])){
            echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/o7.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and offer ID [ '+ getUrlParameter('ef_offer_id') +' ]! MISSING [ef_aff_id]');</script>";
        }else{
            if(!isset($_GET['ef_offer_id']) && isset($_GET['ef_aff_id'])){
                echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/o7.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and affiliate ID [ '+ getUrlParameter('ef_aff_id') +' ]! MISSING [ef_offer_id]');</script>";
            }
        }
    }
}
?>
