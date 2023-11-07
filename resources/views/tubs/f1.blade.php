<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'tubs';
$page = 'f1';
?>

@include('partials.redirect_if_missing_vars')
    <!DOCTYPE html><html lang="en" data-useragent="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36">
<head>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tubs-f1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar text-center">
            <h1 class="navbar-brand mx-auto"><img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="180" height="47" alt="Forever Home Hub" class="img-fluid"></h1>
        </nav>
    </div>
</header>
<main style="min-height:680px;">
    <section class="main tubs text-center text-white">
        <h1 class="main_heading ">Save BIG On Walk-In Bathtubs</h1>
        <h2 class="main_subheading">
            Calculate savings and compare free quotes
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
            <circle cx="16" cy="16" r="15.9155" class="progress-bar_background"></circle>
            <circle cx="16" cy="16" r="15.9155" class="progress-bar_progress js-progress-bar" style="stroke-dashoffset: 100px;"></circle>
        </svg>
    </section>
    <form id="msform" class="form container-fluid">

        @include('partials.hidden-inputs')

        <input type="hidden" id="city" name="city" value>
        <input type="hidden" id="state" name="state" value>
        <input type="hidden" id="address_short" value>
        <input type="hidden" id="time_frame" name="time_frame" value>
        <input type="hidden" id="project_reason" name="project_reason" value>
        <input type="hidden" name="own_rented" id="own_rented" value="Own">
        <fieldset id="zip-container" class="field_zip" data-step="1"><legend hidden="true" style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="form_box-question mb-2"><b>Where</b> would this project take place?</h3>
            <p class="form_box-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="zip_box">
                <div class="form-cont mxwdth">
                    <div class="form-group">
                        <label for="zip_code" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">Zip Code</label>
                        <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required="">
                        <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                        <span class="form-error-message">Enter Valid US Zip</span>
                    </div>
                    <div class="form-btns">
                        <button class="btn form-btn btn-next" id="btn-zip" type="button" disabled=""><span class="btn-text">Get Started</span></button>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="2" id="emailContainer"><legend hidden="true" style="visibility: hidden; position: absolute;">email</legend>
            <h3 class="form_box-question"><b>Where</b> should your free quotes be sent?</h3>
            <div class="form-cont">
                <div class="form-group">
                    <label for="email" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">Email</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email" placeholder="Email Address" required="">
                    <div class="form-error-message">Please enter your email address.</div>
                    <label id="email-custom-error" class="mt-2" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
            </div>
            <div class="form-btns text-center">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                <div class="secure-text">Your information is secure.</div>
            </div>
        </fieldset>
        <fieldset data-step="3">
            <legend style="visibility: hidden; position: absolute;">Name</legend>
            <h3 class="form_box-question "><b>Who</b> are these free quotes for?</h3>
            <div class="form-cont">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="first_name">first_name</label>
                    <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required="">
                    <div class="form-error-message">Don't forget to tell us your name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="last_name">Last Name</label>
                    <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required="">
                    <div class="form-error-message">Don't forget to tell us your last name.</div>
                </div>
            </div>
            <div class="form-btns text-center">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                <div class="secure-text">Your information is secure.</div>
            </div>
        </fieldset>
        <fieldset data-step="4">
            <legend hidden="true">Credit</legend>
            <h3 class="form_box-question"><b>Why</b> are you considering a walk-in-tub?</h3>
            <div class="form-cont lg">
                <div class="form-group row radio-next justify-content-center ">
                    <div class="radio-btn col-md-6 col-12">
                        <input id="rfi-01" type="radio" name="project_reason_radio" value="Maintaining independence" required="">
                        <label for="rfi-01"><span>Maintaining independence</span></label>
                    </div>
                    <div class="radio-btn col-md-6 col-12">
                        <input id="rfi-02" type="radio" name="project_reason_radio" value="Pain relief" required="">
                        <label for="rfi-02"><span>Pain relief</span></label>
                    </div>
                    <div class="radio-btn col-md-6 col-12">
                        <input id="rfi-03" type="radio" name="project_reason_radio" value="Safety" required="">
                        <label for="rfi-03"><span>Safety</span></label>
                    </div>
                    <div class="radio-btn col-md-6 col-12 mx-auto">
                        <input id="rfi-04" type="radio" name="project_reason_radio" value="Other" required="">
                        <label for="rfi-04"><span>Other</span></label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="5"><legend hidden="true">timeline</legend>
            <h3 class="form_box-question"><b>When</b> do you want to begin this project?</h3>
            <div class="form-cont">
                <div class="form-group row radio-next no-gutter justify-content-center">
                    <div class="radio-btn col-12">
                        <input id="t01" type="radio" name="time_frame_radio" value="Immediately" required="">
                        <label for="t01"><span>Immediately</span></label>
                    </div>
                    <div class="radio-btn col-12">
                        <input id="t02" type="radio" name="time_frame_radio" value="Within 6 months" required="">
                        <label for="t02"><span>Within 6 months</span></label>
                    </div>
                    <div class="radio-btn col-12">
                        <input id="t03" type="radio" name="time_frame_radio" value="Not Sure" required="">
                        <label for="t03"><span>Not sure</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
            </div>
            <div class="form-btns">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button>
            </div>
        </fieldset>
        <fieldset data-step="6"><legend hidden="true">own_rented</legend>
            <h3 class="form_box-question">Do you <b>own</b> the home?</h3>
            <div class="form-cont">
                <div class="form-group radio-next ">
                    <div class="radio-btn">
                        <input id="or01" type="radio" name="own_rented" value="Yes" required="">
                        <label for="or01"><span>Yes</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="or02" type="radio" name="own_rented" value="No" required="">
                        <label for="or02"><span>No</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
            </div>
            <div class="form-btns">
                <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button>
            </div>
        </fieldset>
        <fieldset data-step="7"><legend hidden="true">Address</legend>
            <h3 class="form_box-question mb-2"><b>Where</b> do you live?</h3>
            <p class="form_box-desc">Enter your address to find the best results for your area.</p>
            <div class="form-cont">
                <div class="form-group" id="form_street_address">
                    <label for="address" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">street address</label>
                    <input id="address" class="form-control pac-target-input" name="address" type="text" placeholder="Start typing a street address" data-geocomplete="street address" required="" autocomplete="off">
                </div>
                <input type="hidden" id="address_short" value="">
                <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                </p>
                <div class="form-error-message">Please enter your street address.</div>
                <div class="form-btns text-center mx-auto">
                    <button class="btn form-btn btn-next" type="button"><span class="btn-text">Continue</span></button><br>
                </div>
            </div>
        </fieldset>
        <fieldset id="phoneContainer" data-step="8"><legend hidden="true">Phone</legend>
            <center>
                <h3 class="form_box-question mb-2 last"><b>Last step!</b> Your quote is ready.</h3>
            </center>
            <p class="form_box-desc">Enter your information so our professionals can get in touch!</p>
            <div class="form-cont">
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="phone">Phone Number</label>
                    <input id="phone" class="form-control" type="tel" name="phone" placeholder="Phone Number" required="" maxlength="14">
                    <div class="form-error-message phone-valid-error">Please enter a valid phone number.</div>
                    <label id="phone-custom-error" class="mt-2" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns text-center">
                    <button class="btn form-btn btn-next text-uppercase" type="button"><span class="btn-text">Continue</span></button>
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
<script src="{{ asset('js/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.validate.min.js') }}"></script>
@include('partials.funnel_scripts', ['vertical' => $vertical, 'page' => $page])

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
    });

    $(document).ready(function() {

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


        var f = 1;
        $('form fieldset').each(function(){
            $(this).attr('data-step',f++);
        });

        mincont();
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
            validateZip();
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
                                parent_fieldset.hide("slide", {direction: "left"}, 300, function() {
                                    $(this).next().show("slide", { direction: "right" }, 300, function() {
                                        $(this).find('input:not([name=address]),select').first().focus();
                                    });
                                    stepanimate();
                                });
                            }
                        })()
                    }else{
                        var ls = $('#phoneContainer').data('step');

                        if( parent_fieldset.data('step') < ls ) {
                            parent_fieldset.hide("slide", {direction: "left"}, 300, function() {
                                $(this).next().show("slide", { direction: "right" }, 300, function() {
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

        $('input[type=radio][name=project_reason_radio]').click(function(){
            $('#project_reason').val($(this).val());
        });

        $('input[type=radio][name=time_frame_radio]').click(function(){
            $('#time_frame').val($(this).val());
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
    //add support for foreach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }

    var nua = navigator.userAgent
    var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
    if (isAndroid) {
        $('select.form-control').removeClass('form-control').css({'width': '100%', 'height': '50px'})
    }

    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);

</script>
</body>
</html>
