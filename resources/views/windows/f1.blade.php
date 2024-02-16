<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'windows';
$page = 'f1';
$sessionStartTime = \Illuminate\Support\Carbon::now();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="author" content>
    <meta name="keywords" content="windows companies,windows contractors,windows companies near me,windows supply, window fitter near me, glass technician">
    <meta http-equiv="cleartype" content="on">
    @include('partials.domain-particularities', ['mainDomain' => $mainDomain])
    <title>{{$domainTitle}}</title>
    <!-- Google / Search Engine Tags -->
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta itemprop="image" content="{{asset($domainLogoPath)}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:image" content="{{asset($domainLogoPath)}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Description">
    <meta name="twitter:image" content="{{asset($domainLogoPath)}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/windows-f1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
    <script type="text/javascript">if(typeof window.jQuery === 'undefined') {document.write('<script src=""{{ asset('s/jquery/jquery-3.4.1.min.js') }}"><\/script>');}</script>
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
    @include('pixels.all-pages-head')
    @include('partials.meta_script')
    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

</head>

<body>

@include('pixels.all-pages-body')
<div class="hero">
    <h2>
        Find Top-Rated Windows Pros And Save!
    </h2>
    <p>
        Compare free quotes & calculate savings!
    </p>
</div>
<form class="form container-fluid" id="msform">

    @include('partials.hidden-inputs')

    <input type="hidden" id="city" name="city" value>
    <input type="hidden" id="state" name="state" value>
    <input type="hidden" id="address_short" value>
    <input type="hidden" id="project_type" name="project_type" value="Replace">
    <input type="hidden" id="number_of_windows" name="number_of_windows" value="3-5">
    <input type="hidden" id="time_frame" name="time_frame" value="Immediately">
    <input type="hidden" name="home_owner" id="home_owner" value="Yes">
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
        <fieldset id="zip-container">
            <legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> would this project take place?</h3>
            <p class="step-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group"><label style="visibility: hidden; position: absolute;" for="zip">Zip
                        Code</label>
                    <input id="zip_code" class="form-control zipcode" type="text" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                    <input type="hidden" id="city" name="city" value>
                    <input type="hidden" id="state" name="state" value>
                    <div class="zip-error form-error-message">Please enter valid US zip code.</div>
                </div>
                <div class="zip_error mb-2" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="btn-zip" disabled><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="1">
            <legend style="visibility: hidden; position: absolute;">Full name</legend>
            <h3 class="step-title mb-4"><b>Who</b> is this project for?</h3>
            <div class="container" style="max-width:500px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="firstName">FirstName</label>
                    <input id="first_name" pattern="[a-zA-Z0-9]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required autofocus tabindex="1">
                    <div class="form-error-message">Don't forget to tell us your first name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="lastName">Last Name</label>
                    <input id="last_name" pattern="[a-zA-Z0-9]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required tabindex="2">
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
        <fieldset data-step="2" style="min-height: 238px;">
            <legend style="visibility: hidden; position: absolute;">Project Type</legend>
            <h3 class="step-title">Do you need to <b>replace</b> or <b>repair</b> an existing windows?</h3>
            <div class="container">
                <div class="form-group parent-error radio-next">
                    <div class="form-group parent-error">
                        <div class="radio-colored">
                            <input id="install" type="radio" name="project_type_radio" value="Install" checked="checked" data-required="nonempty">
                            <label for="install">Install</label> <span></span></div>
                        <div class="radio-colored">
                            <input id="repair-repairno" type="radio" name="project_type_radio" value="Replace" data-required="nonempty">
                            <label for="repair-repairno">Replace</label> <span></span></div>
                        <div class="radio-colored">
                            <input id="repair-repairyes" type="radio" name="project_type_radio" value="Repair" data-required="nonempty">
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
        <fieldset data-step="3" style="min-height: 238px;">
            <legend style="visibility: hidden; position: absolute;">Number of Windows</legend>
            <h3 class="step-title">How many <b>windows</b> are involved in the project? </h3>
            <div class="container">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col">
                            <input id="10windows" class="img-radio" type="radio" name="number_of_windows_radio" value="10+" required>
                            <label class="radio-label" for="10windows"><span>10+</span></label>
                        </li>
                        <li class="col">
                            <input id="69windows" class="img-radio" type="radio" name="number_of_windows_radio" value="6-9" required>
                            <label class="radio-label" for="69windows"><span>6-9</span></label>
                        </li>
                        <li class="col">
                            <input id="35windows" class="img-radio" type="radio" name="number_of_windows_radio" value="3-5" checked="checked" required>
                            <label class="radio-label" for="35windows"><span>3-5</span></label>
                        </li>
                        <li class="col">
                            <input id="2windows" class="img-radio" type="radio" name="number_of_windows_radio" value="2" required>
                            <label class="radio-label" for="2windows"><span>2</span></label>
                        </li>
                        <li class="col">
                            <input id="1window" class="img-radio" type="radio" name="number_of_windows_radio" value="1" required>
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
        <fieldset data-step="4">
            <legend style="visibility: hidden; position: absolute;">Timeline</legend>
            <h3 class="step-title"><b>How soon</b> do you want to begin this project?</h3>
            <div class="container" style="max-width:640px;">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col-md-4 col-12">
                            <input id="t1" class="img-radio" type="radio" name="time_frame_radio" value="Immediately" checked="checked" required>
                            <label class="radio-label" for="t1"><span>Immediately</span></label>
                        </li>
                        <li class="col-md-4 col-12">
                            <input id="t2" class="img-radio" type="radio" name="time_frame_radio" value="1-6 months" required>
                            <label class="radio-label" for="t2"><span>Within 6 months</span></label>
                        </li>
                        <li class="col-md-4 col-12">
                            <input id="t3" class="img-radio" type="radio" name="time_frame_radio" value="Not sure" required>
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
        <fieldset data-step="5">
            <legend style="visibility: hidden; position: absolute;">Home</legend>
            <h3 class="step-title">Do you own your <b>home</b>?</h3>
            <div class="container" style="max-width:640px;">
                <div class="form-group radio-next">
                    <ul class="step__options step__options-vertical step__options-vertical--amount row no-gutters" style="list-style: none;">
                        <li class="col-12 mb-0">
                            <input id="h1" class="img-radio" type="radio" name="home_owner_radio" value="Yes" checked="checked" required>
                            <label class="radio-label" for="h1"><span>Yes</span></label>
                        </li>
                        <li class="col-12 mb-0">
                            <input id="h2" class="img-radio" type="radio" name="home_owner_radio" value="No" required>
                            <label class="radio-label" for="h2"><span>No</span></label>
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
        <fieldset data-step="6" >
            <legend style="visibility: hidden; position: absolute;">Address</legend>
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
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span>
                    </button>
                </div>
            </div>
        </fieldset>
        <fieldset id="phoneContainer" data-step="7">
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
                    a condition of purchase. I also have read and agree to the <a href="https://{{$domainFullDomain}}/terms-and-conditions" target="_blank">Terms and Conditions</a> and <a href="https://{{$domainFullDomain}}/privacy-policy/" target="_blank">Privacy Policy</a> of this website. Message and Data rates may apply.
                </label>
            </p>
        </fieldset>
        <center><img src="{{ asset('img/trusted.svg') }}" alt="trusted site" class="trusted mt-3"></center>
    </div>
</form>
@include('partials/footer', ['domainTitle' => $domainTitle, 'domainFullDomain' => $domainFullDomain, 'domainInfoEmail' => $domainInfoEmail])
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
                $("#home_owner").val('Yes');
            }
            else {
                $("#home_owner").val('No');
            }
        });

        $('input[type=radio][name=project_type_radio]').click(function(){
            $('#project_type').val($(this).val());
        });

        $('input[type=radio][name=number_of_windows_radio]').click(function(){
            $('#number_of_windows').val($(this).val());
        });

        $('input[type=radio][name=time_frame_radio]').click(function(){
            $('#time_frame').val($(this).val());
        });

        $('input[type=radio][name=home_owner_radio]').click(function(){
            $('#home_owner').val($(this).val());
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
