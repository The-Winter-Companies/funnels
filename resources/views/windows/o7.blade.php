<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'windows';
$page = 'o7';
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
    <meta http-equiv="X-UA-
    Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources."/>
    <meta name="author" content="">
    <meta name="keywords" content=""/>
    @include('partials.domain-particularities', ['mainDomain' => $mainDomain])

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta itemprop="image" content="../../img/favicon.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:image" content="../../img/favicon.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="twitter:image" content="../../img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roofing-o7.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
    <script type="text/javascript">if(typeof window.jQuery === 'undefined') {document.write('<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"><\/script>');}</script>
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

<main class="container">
    <header>
        <h1>Simple Windows Survey </h1>
        <h2>
            Find Top-Rated Roofing Pros And Save!
        </h2>
        <p>
            Takes less than 30 seconds!
        </p>
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
            <input type="hidden" id="project_type" name="project_type" value="Replace">
            <input type="hidden" id="number_of_windows" name="number_of_windows" value="3-5">
            <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
            <input type="hidden" name="home_owner" id="home_owner" value="Yes">

            <fieldset>
                <legend hidden="true">zip_code</legend>
                <h3 class="form_box-question">What is your zip code?</h3>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="zip_code">Zip Code</label>
                    <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                    <div class="zip-error form-error-message">Please enter valid US zip code.</div>
                </div>
                <div class="zip_error mb-2" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                <div class="form-btns ml-auto">
                    <button class="btn btn-next form-btn" id="btn-zip" type="button"><span class="btn-text">Get Started</span>
                    </button>
                </div>
            </fieldset>
            <fieldset data-step="1">

                <legend hidden="true">project_type</legend>

                <h3 class="form_box-question">Do you need to replace or repair an existing windows??</h3>

                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input id="st1" class="img-radio" type="radio" name="project_type_radio" value="Install" required>
                        <label class="radio-label" for="st1"><span>Install </span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="st2" class="img-radio" type="radio" name="project_type_radio" value="Replace" required>
                        <label class="radio-label" for="st2"><span>Replace</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="st3" class="img-radio" type="radio" name="project_type_radio" value="Repair" required>
                        <label class="radio-label" for="st3"><span>Repair</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="2">

                <legend hidden="true">number_of_windows</legend>

                <h3 class="form_box-question">How many windows are involved in the project?</h3>

                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input data-nav="num_windows" id="now01" type="radio" name="number_of_windows_radio" value="10+" required>
                        <label for="now01"><span>10+</span></label>
                    </div>
                    <div class="radio-btn">
                        <input data-nav="num_windows" id="now02" type="radio" name="number_of_windows_radio" value="6-9" required>
                        <label for="now02"><span>6-9</span></label>
                    </div>
                    <div class="radio-btn">
                        <input data-nav="num_windows" id="now03" type="radio" name="number_of_windows_radio" value="3-5" required>
                        <label for="now03"><span>3-5</span></label>
                    </div>
                    <div class="radio-btn">
                        <input data-nav="num_windows" id="now05" type="radio" name="number_of_windows_radio" value="2" required>
                        <label for="now05"><span>2</span></label>
                    </div>
                    <div class="radio-btn">
                        <input data-nav="num_windows" id="now06" type="radio" name="number_of_windows_radio" value="1" required>
                        <label for="now06"><span>1</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="3">

                <legend hidden="true">time_frame</legend>

                <h3 class="form_box-question">Time to start project?</h3>

                <div class="form-group radio-next">
                    <div class="radio-btn ">
                        <input id="tf1" class="img-radio" type="radio" name="time_frame_radio" value="Immediately" required>
                        <label class="radio-label" for="tf1"><span>Immediately</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="tf2" class="img-radio" type="radio" name="time_frame_radio" value="1-6 months" required>
                        <label class="radio-label" for="tf2"><span>1-6 months</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="tf3" class="img-radio" type="radio" name="time_frame_radio" value="Not sure" required>
                        <label class="radio-label" for="tf3"><span>Not sure</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button id="address-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="4">

                <legend hidden="true">own_rented</legend>

                <h3 class="form_box-question">Do you own your home?</h3>

                <div class="form-group radio-next">
                    <div class="radio-btn">
                        <input id="oh1" class="img-radio" type="radio" name="home_owner_radio" value="Yes" required>
                        <label class="radio-label" for="oh1"><span>Yes</span></label>
                    </div>
                    <div class="radio-btn">
                        <input id="oh2" class="img-radio" type="radio" name="home_owner_radio" value="No" required>
                        <label class="radio-label" for="oh2"><span>No</span></label>
                    </div>
                    <div class="form-error-message">Please select an option.</div>
                </div>
                <div class="row">
                    <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                    <div class="col">
                        <div class="form-btns ml-auto text-center">
                            <button id="address-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset data-step="5" id="phoneContainer">

                <legend hidden="true">Email</legend>

                <h3 class="form_box-question mb-1 last">
                    <b> Final Step! </b>
                </h3>
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
                <div class="form-group">
                    <label class="label" for="email">Email*</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email" placeholder="Email Address" required>
                    <p class="form-error-message">Please enter your email address.</p>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-group ">
                    <label class="label" for="homePhone">Mobile Phone*</label>
                    <input id="phone" class="form-control" type="tel" name="phone" pattern="\d?[\(]\d{3}[\)][\-]\d{3}[\-]\d{4}" placeholder="Enter Mobile Phone Number" required>
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
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                </div>
                <div class="form-btns mx-auto sbmt">
                    <button class="btn form-btn btn-next" type="button" id="form_submit"><span class="btn-text">Continue</span>
                    </button>
                </div>
                <center><img src="../../img/trusted.svg" alt="trusted site" class="trusted mt-3"></center>
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
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                var tcpa_text = $("button").last().text();
                $("#tcpa_txt").text(tcpa_text);
            });
        </script>
    </div>
</main>
@include('partials/footer', ['mainDomain' => $mainDomain])
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
<script src="{{ asset('js/jquery/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.mask.js') }}"></script>
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
                        parent_fieldset.fadeOut(function() {
                            $(this).next().fadeIn(function() {
                                $(this).find('input:not([name=address]),select').first().focus();
                            });
                            stepanimateO7Funnels();
                        });

                    }
                }
            }
        });

        $('input[type=radio][name=project_type_radio]').click(function(){
            $('#project_type').val($(this).val());
        });

        $('input[type=radio][name=number_of_windows_radio]').click(function(){
            $('#number_of_windows').val($(this).val());
        });

        $('input[type=radio][name=home_owner_radio]').click(function(){
            $('#home_owner').val($(this).val());
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
                    stepanimateO7Funnels();
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

    //add support for foreach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
    }
</script>
</body>
</html>

