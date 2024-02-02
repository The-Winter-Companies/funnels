<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'solar';
$page = 'f1';
?>

    <!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    @include('partials.domain-particularities', ['mainDomain' => $mainDomain])
    <meta name="description" content="Lower your electric bill up to 80%">
    <meta name="author" content>
    <meta name="keywords" content>
    <meta itemprop="description" content="Lower your electric bill up to 80%">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Lower your electric bill up to 80%">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Lower your electric bill up to 80%">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/solar-f1.css') }}" rel="stylesheet">
    <style>
        button[disabled] {
            opacity:0.7;
        }
        input.error, select.error {
            border: 1px solid red;
        }
    </style>
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

</head>
<body>
<form id="msform" class="form">

    @include('partials.hidden-inputs')

    <input type="hidden" id="city" name="city" value>
    <input type="hidden" id="state" name="state" value>
    <input type="hidden" id="address_short" value>
    <input type="hidden" id="monthly_electric_bill" name="monthly_electric_bill" value="$201-$300">
    <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
    <input type="hidden" id="property_type" name="property_type" value="Single Family">
    <input type="hidden" id="credit_rating" name="credit_rating" value="Good">
    <input type="hidden" id="roof_type" name="roof_type" value="Tile">
    <input type="hidden" id="home_owner" name="home_owner" value="Yes">
    <section class="main solar text-center text-white">
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
    <div class="container-fluid">
        <fieldset data-bar="0" id="zip-container"><legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> would this project take place?</h3>
            <p class="step-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="container" style="max-width:500px;">
                <div class="zip_box">
                    <div class="form-group"><label style="visibility: hidden; position: absolute;" for="zip">Zip Code</label>
                        <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                        <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                    </div>
                    <div class="form-btns">
                        <button class="btn btn-primary btn-next" type="button" id="btn-zip" disabled><span class="btn-text">Get Started</span></button>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="1" data-bar="14" id="emailContainer" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> should we send your free quotes?</h3>
            <p class="step-desc">We want to make sure you have a record of your free quotes and get them as fast as possible.</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="email">Email Address</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email_address" placeholder="Email Address" required>
                    <div class="form-error-message">Please enter your email address.</div>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-email"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="2" data-bar="28" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">full name</legend>
            <h3 class="step-title">Enter your <b>name</b>.</h3>
            <p class="step-desc">Who should we create these free quotes for?</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="first_name">first_name</label>
                    <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required autofocus tabindex="1">
                    <div class="form-error-message">Don't forget to tell us your name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="last_name">Last Name</label>
                    <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required tabindex="2">
                    <div class="form-error-message">Don't forget to tell us your last name.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-name"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="3" data-bar="42" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">electric bill</legend>
            <h3 class="step-title">What is your <b>estimated monthly electric bill?</b></h3>
            <p class="step-desc">This helps us determine how much solar power may save you.</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group ">
                    <div class="radio-btn-group">
                        <div class="row no-gutters">
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-1" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$0-$50">
                                <label class="radio-btn-group__label" for="electricBill-1" id="bill1-label">$0-
                                    <br class="mob-only">$50</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-2" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$51-$100">
                                <label class="radio-btn-group_label" for="electricBill-2" id="bill2-label">$51-
                                    <br class="mob-only">$100</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-3" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$101-$150">
                                <label class="radio-btn-group_label" for="electricBill-3" id="bill3-label">$101-
                                    <br class="mob-only">$150</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-4" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$151-$200">
                                <label class="radio-btn-group_label" for="electricBill-4" id="bill4-label">$151-
                                    <br class="mob-only">$200</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-5" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$201-$300" checked>
                                <label class="radio-btn-group__label" for="electricBill-5" id="bill5-label">$201-
                                    <br class="mob-only">$300</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-6" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$300-$400">
                                <label class="radio-btn-group__label" for="electricBill-6"  id="bill6-label">$300-
                                    <br class="mob-only">$400</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-7" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$400+">
                                <label class="radio-btn-group_label" for="electricBill-7" id="bill7-label">$400+</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-bill"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="4" data-bar="56" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">roof shade</legend>
            <h3 class="step-title"><b>How much shade</b> does your roof get?</h3>
            <p class="step-desc">Shade helps us determines what type of solar panels to use</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="No Shade" required>
                        <label for="roof_shade" id="no-shade-label">No Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Partial Shade" required>
                        <label for="roof_shade" id="partial-shade-label">Partial Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Full Shade">
                        <label for="roof_shade" id="full-shade-label">Full Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Not sure">
                        <label for="roof_shade" id="not-sure-label">Not sure</label> <span></span></div>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-shade"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="5" data-bar="70" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">utility provider</legend>
            <h3 class="step-title">Who is your <b>utility provider?</b></h3>
            <p class="step-desc">This helps us compare your current bill with how much solar can save you</p>
            <div class="container" style="max-width:600px;">
                <div class="form-group ">
                    <label for="provider-select" class="label"  style="visibility: hidden; position: absolute;">Electric Utility</label>
                    <select id="utility_provider" name="utility_provider" class="form-control custom-select" required>
                        <option value="Other" hidden>Other</option>
                    </select>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-utility"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="6" data-bar="84" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">address</legend>
            <h3 class="step-title">What <b>address</b> would this project be located at?</h3>
            <p class="step-desc">This helps us find and compare contractors in your area.</p>
            <div class="container" style="max-width:640px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="address">Street Address</label>
                    <input id="address" class="form-control" type="text" name="address" placeholder="Street Address" data-geocomplete="street address" required>
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                    <div class="form-error-message">Please enter your address.</div>
                </div>
                <div class="form-group parent-error">
                    <div class="checkbox checkbox--no-border">
                        <label>
                            <input name="homeowner" type="checkbox" checked="checked"> I am the homeowner</label>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-address"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="7" id="phoneContainer" data-bar="95" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">full name</legend>
            <center><h3 class="step-title stlast">Your Results Are Ready</h3></center>
            <p class="step-desc">Enter your information and get your results - fast!</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="homePhone">Phone Number</label>
                    <input id="phone" class="form-control" type="tel" pattern="\d?[\(]\d{3}[\)][\-]\d{3}[\-]\d{4}" name="phone" placeholder="Phone Number" required>
                    <div class="form-error-message">Please enter your phone number.</div> <div class="phone-valid-error form-error-message">Please enter a valid phone number.</div>
                    <label id="phone-custom-error" class="mt-3" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="form_submit"><span class="btn-text">Get My Quotes</span></button>
                </div>
                <div class="secure-text text-center mt-2">Your information is secure.<br><br></div>
            </div>
            <p class="tcpa form-tcpa text-center mt-3">
                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                    <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
                    to contact me about home improvement offers by phone calls and SMS messages to the number I provided. I understand that these
                    marketing communications may be delivered to me using an automatic telephone dialing system or by prerecorded message, even if my
                    telephone number is currently listed on any state, federal, local or corporate Do Not Call list. I understand that my consent is not
                    a condition of purchase. I also have read and agree to the <a href="https://foreverhomehub.com/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://foreverhomehub.com/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                </label>
            </p>
        </fieldset>
        <div class="container">
            <center>
                <img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="mt-2">
            </center>
        </div>
    </div>
</form>
@include('partials/footer', ['domainTitle' => $domainTitle, 'domainFullDomain' => $domainFullDomain, 'domainInfoEmail' => $domainInfoEmail])
<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
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


        $('input[type=radio][name=monthly_electric_bill_radio]').click(function(){
            $('#monthly_electric_bill').val($(this).val());
        });

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
            validateZip('f1');
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

        $('#homeowner').change(function() {
            if(this.checked) {
                $("#home_owner").val('Yes');
            }
            else {
                $("#home_owner").val('No');
            }
        });

        let fieldset = $("form fieldset");

        $(".btn-next").click(function(){
            if(!window.zip_container){
                var parent_fieldset = $(this).parents('fieldset');
                var next_step = true;
                var current_step = fieldset.index(parent_fieldset);
                var progwidth = $(this).parents('fieldset').next().attr('data-bar');

                parent_fieldset.find('[required]:visible').each(function() {
                    var result = $("#msform").valid();
                    if (!result) {
                        next_step = false;
                    }
                });

                if( next_step ) {

                    var ls = $('#phoneContainer').data('step');

                    if (current_step === $('#emailContainer').data('step')) {
                        (async function () {
                            var emailValid = await emailIsValid();
                            if (emailValid === false) {
                                return;
                            } else {
                                parent_fieldset.removeClass('fadeInRight');
                                parent_fieldset.toggleClass('fadeOutLeft');
                                parent_fieldset.fadeOut(function () {
                                    $(this).find('.form-group').children('.form-error-message').hide();
                                    $("body").animate({scrollTop: 0}, '500');
                                    window.top.scrollTo(0, 0)

                                    $(this).next().fadeIn(
                                        function () {
                                            $(this).find('input').first().focus();
                                            stepanimateFunnelsF1();

                                        });

                                })
                            }
                        })()
                    } else if (current_step < ls) {
                        parent_fieldset.removeClass('fadeInRight');
                        parent_fieldset.toggleClass('fadeOutLeft');
                        parent_fieldset.fadeOut(function () {
                            $(this).find('.form-group').children('.form-error-message').hide();
                            $("body").animate({scrollTop: 0}, '500');
                            window.top.scrollTo(0, 0)

                            $(this).next().fadeIn(
                                function () {
                                    $(this).find('input').first().focus();
                                    stepanimateFunnelsF1();

                                });

                        })
                    } else {
                        if(current_step === $('#phoneContainer').data('step')){
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

    });

</script>

</body>

</html>

