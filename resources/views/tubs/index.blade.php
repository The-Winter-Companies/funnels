<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
$vertical = 'tubs';
$page = 'main';
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Walk-In Bathtub - ForeverHomeHub</title>
    <meta name="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources."/>
    <meta name="author" content="">
    <meta name="keywords" content=""/>

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta itemprop="image" content="{{ asset('img/logo.png') }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
    <meta name="twitter:image" content="{{ asset('img/logo.png') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')
    @include('partials.pushnami_script')

    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funnels-main.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="#">

</head>
<body>

<header>
    <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="240" alt="Forever Home Hub" class="img-fluid" draggable="false">
				</span>
    </nav>
</header>

<main class="tubs">
    <section id="formSec" class="formSec">

        <div class="progress-box" style="display: none;">
            <div class="progress" >
                <div class="progress-bar " role="progressbar" aria-valuenow="10" style="width: 12%" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progress-val text-center"><strong> Your Savings Calculation is <b><span id="progress-value">0</span>%</b>  <font class="complete">Complete</font></strong></p>
        </div>

        <div class="headline container">
            <h2>Find the <span class="hl-bl">Best Deal</span> for <br class="d-none d-md-block">a Walk-In Bathtub!</h2>
            <h3>Check How Much You Can Save</h3>
        </div>

        <form class="form container-fluid" >
            @include('partials.hidden-inputs')
            <input type="hidden" id="ip_address" name="ip_address" value>
            <input type="hidden" id="project_reason" name="project_reason" value>
            <input type="hidden" id="time_frame" name="time_frame" value>

            <input type="hidden" id="state" name="state" value>
            <fieldset id="zip-container"><legend hidden="true">zip</legend>

                <h4 class="form-question">Enter your zip code<br class="d-none d-md-block">to get started:</h4>
                <div class="form-cont">
                    <div class="zip_box">
                        <div class="row no-gutters">
                            <div class="col form-group m-0">
                                <label style="visibility: hidden; position: absolute;" for="zip_code">Zip Code</label>
                                <input id="zip_code" class="form-control" type="tel"  name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" data-placeholder="Enter Your Zip Code Here" >

                            </div>
                            <div class="col-auto form-btns text-center mb-0">
                                <button class="btn form-btn mb-0" id="btn-zip"  type="button" ><span class="btn-text">Get Started</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                </div>

            </fieldset>

            <fieldset><legend hidden="true">project_type</legend>
                <h4 class="form-question">Why Do You Want A Walk-In Tub?</h4>

                <div class="form-cont">
                    <div class="form-group">
                        <div class="radio-next">
                            <div class="radio-btn ">
                                <input id="rfi-cr01" type="radio" name="project_reason_radio" value="Maintaining independence" required>
                                <label  for="rfi-cr01"><span>Maintaining independence</span></label>
                            </div>
                            <div class="radio-btn ">
                                <input id="rfi-cr02" type="radio" name="project_reason_radio" value="Pain relief" required>
                                <label  for="rfi-cr02"><span>Pain relief</span></label>
                            </div>
                            <div class="radio-btn ">
                                <input id="rfi-cr03" type="radio" name="project_reason_radio" value="Safety" required>
                                <label  for="rfi-cr03"><span>Safety</span></label>
                            </div>
                            <div class="radio-btn ">
                                <input id="rfi-cr04" type="radio" name="project_reason_radio" value="Other" required>
                                <label for="rfi-cr04"><span>Other</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset><legend hidden="true">project_timeframe</legend>

                <h4 class="form-question">When do you need a tub installed? </h4>

                <div class="form-cont ">
                    <div class="form-group radio-next">
                        <div class="radio-btn ">
                            <input id="tf1" class="img-radio" type="radio" name="time_frame_radio" value="Immediately" required>
                            <label class="radio-label" for="tf1"><span>Immediately</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="tf2" class="img-radio" type="radio" name="time_frame_radio" value="Within 6 months" required>
                            <label class="radio-label" for="tf2"><span>1-6 months</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="tf3" class="img-radio" type="radio" name="time_frame_radio" value="Not Sure" required>
                            <label class="radio-label" for="tf3"><span>Not sure</span></label>
                        </div>
                        <div class="form-error-message">Please select an option.</div>
                    </div>

                </div>

            </fieldset>


            <fieldset><legend hidden="true">homeowner</legend>

                <h4 class="form-question">Do You Own Your Home?</h4>

                <div class="form-cont">
                    <div class="form-group radio-next">
                        <div class="radio-btn">
                            <input id="oh1" class="img-radio" type="radio" name="homeowner" value="Yes" required>
                            <label class="radio-label" for="oh1"><span>Yes, I am the homeowner</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="oh2" class="img-radio" type="radio" name="homeowner" value="No" required>
                            <label class="radio-label" for="oh2"><span>No, I am not the homeowner</span></label>
                        </div>
                        <div class="form-error-message">Please select an option.</div>
                    </div>

                </div>

            </fieldset>

            <fieldset><legend hidden="true">address</legend>

                <h4 class="form-question">Where will this project <br class="d-none d-md-block">take place?</h4>

                <div class="form-cont">
                    <div class="form-group" id="street_address">
                        <label for="address" class="label">Street Address</label>
                        <input id="address" class="form-control" name="address" type="text" placeholder="Enter Street Address" required>
                        <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span> <span class="state_span"></span> </b>
                            <input type="hidden" id="address_short" value="">
                        <div class="form-error-message"> Please complete this field</div>
                    </div>
{{--                    <div class="form-group" >--}}
{{--                        <label for="city" class="label">City</label>--}}
{{--                        <input id="city" class="form-control" name="city" type="text"--}}
{{--                               placeholder="City" required>--}}
{{--                        <div class="form-error-message"> Please complete this field</div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="zip-code" class="label">ZIP code</label>--}}
{{--                        <input id="zip-code" class="form-control"  type="text"  placeholder="ZIP" >--}}
{{--                        <div class="form-error-message"> Please complete this field</div>--}}
{{--                    </div>--}}
{{--                    <div class="zip-details">--}}
{{--                        <span class="county">City</span>, <span class="state">State</span>--}}
{{--                    </div>--}}
                </div>


                <div class="form-action mx-auto text-center">
                    <button class="btn form-btn btn-next"  type="button" ><span class="btn-text">Next</span></button>
                </div>
            </fieldset>

            <fieldset><legend hidden="true">name</legend>
                <h3 class="form-question">Who are these free quotes for?</h3>

                <div class="form-cont">
                    <div class="form-group">
                        <label class="label" for="first_name">First Name</label>
                        <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="Enter First Name" >
                        <div class="form-error-message"> Please complete this field</div>
                    </div>

                    <div class="form-group ">
                        <label class="label"  for="last_name">Last Name</label>
                        <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text"   name="last_name" placeholder="Enter Last Name" >
                        <div class="form-error-message"> Please complete this field</div>
                    </div>
                </div>

                <div class="form-action mx-auto text-center">
                    <button class="btn form-btn btn-next"  type="button" ><span class="btn-text">Next</span></button>
                </div>
            </fieldset>

            <fieldset><legend hidden="true">email</legend>
                <h3 class="form-question">Where should your free quotes<br class="d-none d-md-block"> be sent?</h3>
                <div class="form-cont">
                    <div class="form-group">
                        <label for="emailadd">Email</label>
                        <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control"
                               type="email" name="email" placeholder="Email Address"  >
                        <div class="form-error-message">Please enter a valid email address</div>
                        <label id="email-custom-error" class="" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-15px);
    background: #fff;
    padding: 5px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>

                    </div>
                </div>
                <div class="form-action mx-auto text-center">
                    <button class="btn form-btn btn-next"  type="button" ><span class="btn-text">Next</span></button>
                </div>
            </fieldset>


            <fieldset><legend hidden="true">Phone</legend>
                <center>
                    <h3 class="form-question mb-2">You're almost finished!</h3>
                    <p class="form-desc">What's the best number to reach you at if you qualify?</p>
                </center>

                <div class="form-cont">
                    <div class="form-group ">
                        <label class="label"  for="phone">Phone</label>
                        <input id="phone" class="form-control" type="tel"  name="phone"
                               pattern="\d?[\(]\d{3}[\)][\-]\d{3}[\-]\d{4}"  placeholder="Enter Phone Number">
                        <div class="form-error-message phone-valid-error">Please enter a valid phone.</div>
                        <label id="phone-custom-error" class="" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-15px);
    background: #fff;
    padding: 5px;text-align: center;
    font-weight: 600;">Please enter a valid phone number.</label>
                    </div>

                </div>

                <div class="form-action mx-auto text-center">
                    <button class="btn form-btn btn-next pulse"  type="button" id="form_submit" ><span class="btn-text">Continue</span></button>
                </div>



                <p class="tcpa text-centerex">
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

        </form>
    </section>


</main>

<section class="page-content">
    <div class="container">

        <h2 class="page-desc text-center">Why Use Forever Home Hub </h2>
        <p class="page-title text-center">Get multiple quotes quickly and without any pressure</p>


        <div class="row">
            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path class="st0" d="M27.8,10.8H4.9c-1.8,0-3.3-1.5-3.3-3.3V7.3C1.6,5.5,3.1,4,4.9,4h25.7"/>
                        <path class="st0" d="M10,52.5H7.4c-3.2,0-5.8-2.6-5.8-5.8V7.3"/>
                        <line class="st1" x1="14.7" y1="54.9" x2="37.2" y2="1.4"/>
                        <path class="st0" d="M39.2,10.8h13c0.6,0,1,0.5,1,1v12.6h1.6c0.6,0,1,0.5,1,1v12.4c0,0.6-0.5,1-1,1h-1.6v12.6c0,0.6-0.5,1-1,1H21.5"
                        />
                        <path class="st0" d="M53.2,24.4H39.3c-0.3,0-0.6,0.1-0.8,0.4l-4.9,6.3c-0.3,0.4-0.3,0.9,0,1.3l4.9,6.2c0.2,0.2,0.5,0.4,0.8,0.4h13.9
								"/>
                        <path class="st0" d="M41.6,4h6c0.6,0,1,0.5,1,1v5.8"/>
                        <circle class="st0" cx="40.5" cy="31.7" r="1"/>
                    </svg>

                    <h3>No Obligation <br class="d-none d-md-block">To Purchase</h3>
                    <p>We match you with the best local contractors for the job. no payment information, no high-pressure sales calls or spam.</p>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">


                        <path class="st0" d="M25.4,47.5v6.6h-3c-1.4,0-2.6-1.2-2.6-2.6v-3.6c0-0.2-0.1-0.4-0.3-0.4c-2.6-0.8-7.7-7.1-7.7-14.7
		c0-5.9,4-13.8,13.7-16.2"/>
                        <path class="st0" d="M38.5,12c2.1-1.2,4.5-1.6,7.1-1.3c0.2,0,0.3,0.1,0.4,0.3s0,0.4-0.2,0.5c-2.4,1.9-3.4,4.3-3.2,6.9
		c0,0.2,0.2,0.5,0.4,0.6c2.9,1.7,5.3,4.3,7,8.5c0.1,0.3,0.4,0.5,0.7,0.5h1.2c1.4,0,2.6,1.2,2.6,2.6v3.6c0,1.4-1.2,2.6-2.6,2.6h-0.7
		c-0.3,0-0.6,0.2-0.7,0.5c-1.4,4.8-4.4,8.2-8.6,10.4v6.3h-2.9c-1.4,0-2.6-1.2-2.6-2.6v-4.6"/>
                        <line class="st0" x1="25.4" y1="50.2" x2="36.3" y2="50.2"/>
                        <path class="st0" d="M12.4,28.1H8.6c-2.1,0-3.6-2.6-3.6-4.1c0-1.4,1.1-2.6,2.6-2.6s2.6,1.1,2.6,2.6S9,26.5,7.6,26.5h-5"/>
                        <circle class="st0" cx="41.8" cy="25.2" r="1.1"/>
                        <circle class="st1" cx="30.9" cy="11.3" r="7.6"/>
                        <path class="st0" d="M25,20.7c4-0.8,7.9-0.9,11.8,0"/>

                    </svg>
                    <h3>Save By Comparing <br class="d-none d-md-block">100% Free Quotes</h3>
                    <p>Save time and money by receiving free quotes from  trusted pre-screened contractors</p>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path class="st1" d="M36.4,22.8l-6.5,6.5c-0.5-0.5-1.2-0.8-1.9-0.8c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7
								c1.5,0,2.7-1.2,2.7-2.7c0-0.7-0.3-1.4-0.7-1.9"/>
                        <circle class="st0" cx="27.9" cy="31.2" r="22.7"/>
                        <line class="st0" x1="9.9" y1="31.2" x2="11.9" y2="31.2"/>
                        <line class="st0" x1="43.9" y1="31.2" x2="45.9" y2="31.2"/>
                        <line class="st0" x1="27.9" y1="47.2" x2="27.9" y2="49.2"/>
                        <line class="st0" x1="16.6" y1="42.5" x2="15.2" y2="43.9"/>
                        <line class="st0" x1="40.7" y1="43.9" x2="39.3" y2="42.5"/>
                        <line class="st0" x1="16.6" y1="19.9" x2="15.2" y2="18.5"/>
                        <path class="st1" d="M40,19.2c-3.1-3.1-7.3-5-12-5"/>
                        <line class="st0" x1="11.9" y1="15.1" x2="9.4" y2="12.7"/>
                        <line class="st0" x1="46.5" y1="12.7" x2="44" y2="15.1"/>
                        <line class="st0" x1="27.9" y1="8.5" x2="27.9" y2="3.9"/>
                        <line class="st0" x1="23.8" y1="3.9" x2="32.1" y2="3.9"/>
                        <line class="st0" x1="7.7" y1="14.6" x2="11.4" y2="10.9"/>
                        <line class="st0" x1="48.2" y1="14.6" x2="44.5" y2="10.9"/>
                    </svg>


                    <h3>Qualify in less <br class="d-none d-md-block">than a minute!</h3>
                    <p>It takes less than a minute and you can get up to 4 custom quotes from top contractors who specialize in your project .</p>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="page-content bl">
    <div class="container">

        <h2 class="page-desc text-center">How Forever Home Hub Works</h2>
        <p class="page-title text-center">3 Easy Steps To Saving Big on New Windows:</p>

        <div class="row">
            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">


                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">

                        <path class="st0" d="M122.7,22.8l-6.5,6.5c-0.5-0.5-1.2-0.8-1.9-0.8c-1.5,0-2.7,1.2-2.7,2.7c0,1.5,1.2,2.7,2.7,2.7
							c1.5,0,2.7-1.2,2.7-2.7c0-0.7-0.3-1.4-0.7-1.9"/>
                        <circle class="st0" cx="114.2" cy="31.2" r="22.7"/>
                        <line class="st0" x1="96.2" y1="31.2" x2="98.2" y2="31.2"/>
                        <line class="st0" x1="130.2" y1="31.2" x2="132.2" y2="31.2"/>
                        <line class="st0" x1="114.2" y1="47.2" x2="114.2" y2="49.2"/>
                        <line class="st0" x1="102.9" y1="42.5" x2="101.5" y2="43.9"/>
                        <line class="st0" x1="127" y1="43.9" x2="125.5" y2="42.5"/>
                        <line class="st0" x1="102.9" y1="19.9" x2="101.5" y2="18.5"/>
                        <path class="st0" d="M126.2,19.2c-3.1-3.1-7.3-5-12-5"/>
                        <line class="st0" x1="98.2" y1="15.1" x2="95.7" y2="12.7"/>
                        <line class="st0" x1="132.7" y1="12.7" x2="130.3" y2="15.1"/>
                        <line class="st0" x1="114.2" y1="8.5" x2="114.2" y2="3.9"/>
                        <line class="st0" x1="110.1" y1="3.9" x2="118.3" y2="3.9"/>
                        <line class="st0" x1="94" y1="14.6" x2="97.6" y2="10.9"/>
                        <line class="st0" x1="134.5" y1="14.6" x2="130.8" y2="10.9"/>

                        <path class="st1" d="M11.8,44.6l0-1.9c0-3.5,4.1-4.4,9.2-4.4c5.1,0,9.2,0.9,9.2,4.4l0,1.9"/>
                        <ellipse class="st1" cx="21" cy="29.6" rx="4.8" ry="5.7"/>
                        <path class="st0" d="M28.8,30.2h2.7c0.3,0,0.5,0.2,0.5,0.5v7c0,0.2,0.1,0.3,0.3,0.4c0.2,0.1,0.4,0,0.5-0.1l8-7.7
							c0.1-0.1,0.2-0.1,0.3-0.1h11c2.1,0,3.8-1.7,3.8-3.8V5.4c0-2.1-1.7-3.8-3.8-3.8H24.8c-2.1,0-3.8,1.7-3.8,3.8v15.5"/>
                        <line class="st0" x1="53.4" y1="47.6" x2="53.4" y2="33"/>
                        <path class="st0" d="M4.6,47.6h19.1v1.6c0,1,0.8,1.7,1.7,1.7h7.2c0.9,0,1.7-0.8,1.7-1.7v-1.6h22v2.3c0,2.2-1.8,4-4,4H5.7
							c-2.2,0-4-1.8-4-4v-2.3H4.6V19.1c0-1.3,1.1-2.4,2.4-2.4H18"/>
                        <path class="st1" d="M35,20.6c-0.1-0.4-0.1-0.8-0.1-1.3c0-1.4,0.6-2.9,2.2-4.1l1.5-1.1c0.8-0.6,1.1-1.3,1.1-2
							c0-1.1-0.8-2.2-2.6-2.2c-1.7,0-2.7,1.4-2.7,2.7c0,0.7,0.1,1,0.1,1.1l-4.1-0.1c-0.1-0.4-0.1-0.8-0.1-1.2c0-3.4,2.5-6.3,6.8-6.3
							c4.7,0,7.1,2.8,7.1,5.8c0,2.3-1.1,3.9-2.8,5.3l-1.1,0.8c-1,0.8-1.7,1.5-1.7,2.8H35z M36.8,22.3c1.4,0,2.5,1.1,2.5,2.5
							c0,1.4-1.1,2.5-2.5,2.5s-2.5-1.1-2.5-2.5C34.3,23.5,35.4,22.3,36.8,22.3z"/>

                    </svg>



                    <h3>Answer some questions</h3>
                    <p data-step="1">Answer our short questionnaire to give us more details about your needs</p>
                </div>
            </div>

            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path class="st1" d="M1.4,35.8h4.1c2.4,1.7,5.4,2.8,8.7,3.4h3.5"/>
                        <path class="st0" d="M17.7,16v-5.5l8.9-8.9h26.3c1.4,0,2.5,1.1,2.5,2.5v18.9"/>
                        <path class="st0" d="M55.4,33.9v16.4c0,2.8-2.3,5.1-5.1,5.1H22.8c-2.8,0-5.1-2.3-5.1-5.1V39.2V22.9"/>
                        <path class="st0" d="M26.5,1.7v6.3c0,1.4-1.1,2.5-2.5,2.5h-6.3"/>
                        <circle class="st1" cx="42.1" cy="15.5" r="8.1"/>
                        <polyline class="st1" points="45.4,14.3 41.5,18.2 39.3,16 "/>
                        <path class="st0" d="M39,45.9l-6.6,3.4c-0.1,0.1-0.2,0-0.3-0.1S32,49,32,48.9l3.5-6.5l16.1-15.9c0.9-0.9,2.5-0.9,3.4,0l0.1,0.1
								c0.9,0.9,0.9,2.5,0,3.4L39,45.9z"/>
                        <line class="st0" x1="51.2" y1="33.8" x2="47.7" y2="30.3"/>
                        <line class="st0" x1="39" y1="45.9" x2="35.5" y2="42.3"/>
                        <line class="st0" x1="48.8" y1="49.3" x2="38.9" y2="49.3"/>
                        <polyline class="st0" points="32.3,49.3 29,49.3 24.5,49.3 "/>
                        <line class="st0" x1="48.8" y1="43.4" x2="45.7" y2="43.4"/>
                        <line class="st0" x1="31.5" y1="43.4" x2="24.5" y2="43.4"/>
                        <line class="st0" x1="36" y1="37.6" x2="24.5" y2="37.6"/>
                        <line class="st0" x1="42" y1="31.7" x2="24.5" y2="31.7"/>
                        <path class="st1" d="M13.7,22.9h12c1.7,0,3.2-1.4,3.2-3.2V19c0-1.7-1.4-3-3-3H13.7h-0.6c-3.8,0-6.8,2.7-7.7,6.6l-3.7,0"/>

                    </svg>



                    <h3>Recieve <br class="d-none d-md-block">free quotes</h3>
                    <p data-step="2">Instantly receive up to 4 free, no obligation quotes from walk-in tubs specialists.</p>
                </div>
            </div>

            <div class="col-sm-4 col-12 p-box">
                <div class="page-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="124" height="124" viewBox="0 0 57 57" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path class="st1" d="M20.4,21.8l0-1.5c0-2.8,3.3-3.5,7.4-3.5s7.4,0.8,7.4,3.5l0,1.5"/>
                        <ellipse class="st1" cx="27.7" cy="9.8" rx="3.9" ry="4.5"/>
                        <path class="st0" d="M42,22.4c1.4-0.3,3-0.4,4.8-0.4c5.1,0,9.2,0.9,9.2,4.4v5.4"/>
                        <path class="st0" d="M43.8,17.8c0.8,0.8,1.9,1.2,3,1.2c2.7,0,4.8-2.5,4.8-5.7c0-3.1-2.2-5.7-4.8-5.7c-1.3,0-2.6,0.6-3.4,1.7"/>
                        <path class="st0" d="M1.1,31.8v-5.4c0-3.5,4.1-4.4,9.2-4.4c1,0,2,0,3,0.1"/>
                        <path class="st0" d="M12.5,8.3c-0.6-0.4-1.4-0.6-2.2-0.6c-2.7,0-4.8,2.5-4.8,5.7c0,3.1,2.2,5.7,4.8,5.7c0.6,0,1.1-0.1,1.6-0.3"/>
                        <circle class="st1" cx="27.5" cy="14.4" r="13.4"/>
                        <line class="st1" x1="24.9" y1="32.5" x2="24.9" y2="27.5"/>
                        <line class="st1" x1="30" y1="32.5" x2="30" y2="27.5"/>
                        <path class="st1" d="M30,49.3v4.2c0,1.3-1,2.3-2.4,2.3h-0.3c-1.3,0-2.4-1-2.4-2.3v-4.2"/>
                        <path class="st0" d="M31.8,32.4H17.1c-1.5,0-2.6,1.2-2.6,2.6v0.3c0,0.4,0.3,0.7,0.7,0.7h7h-0.1h-6.6c-1.5,0-2.6,1.2-2.6,2.6
								c0,1.2,1,2.3,2.3,2.3H22h-7.5c-0.9,0-1.7,0.7-1.7,1.7c0,1.4,1.1,2.5,2.5,2.5h7.8h-4.3c-1,0-1.7,0.8-1.7,1.7c0,1.3,1.1,2.4,2.4,2.4
								h12.9c2.8-0.5,5.2-1.4,7.3-2.8H43"/>
                        <path class="st0" d="M42.7,35.4h-3.1c-0.7-3.2-3.2-5.5-6.4-5.5"/>
                    </svg>
                    <h3>Hire the <br class="d-none d-md-block">right pro</h3>
                    <p data-step="3">Compare quotes, message or call pros, and hire only when ready.</p>

                </div>
            </div>

        </div>


    </div>
</section>


<section class="page-content imgbg tubbg">
    <div class="container">

        <div class="col-md-7 col-12 ml-auto">
            <h2 class="page-desc ml-0">About Us</h2>
            <p class="page-title ml-0">Find the best walk-in tubs products & contractors in your area.</p>

            <p>Forever Home Hub is a fast, free and easy way for homeowners like you to get estimates from bathtub installers in your area!</p>

            <p>We simplify the process by matching you with up to 4 qualified experts in your local area. Get the information you need to make the right walk-in tubs decision. It is recommended that you get at least four walk-in tubs estimates before making any hiring decisions.</p>
        </div>

    </div>
</section>

@include('partials/footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<![endif]-->

@include('partials.funnel_scripts', ['includeAddressValidation' => false, 'vertical' => $vertical, 'page' => $page])

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    $("form").validate({
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
                minLengthNoSpaces: 2,
                notNumber: true,
                noSpace: true,
            },
            last_name: {
                required: true,
                minLengthNoSpaces: 2,
                notNumber: true,
                noSpace: true,
            },
            address: {
                required: true,
                minLengthNoSpaces: 5,
                ContainsAtLeastOneDigit: true,
                hasLettersAndSpaces: true,
            },
            phone: {
                required: true,
                phone_number: true
            },
            state: {
                required: true,
                state: true
            },
            city: {
                required: true
            }
        },

        messages: validationMessages,
        errorElement : 'span',
        errorPlacement: function(error, element) {
            $(element).closest('.form-group').children('.form-error-message').html(error).show();
        },
        showErrors: function(errorMap, errorList) {leadid_tcpa_disclosure
            this.defaultShowErrors();
        }
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

        const z=$("#zip_code"),zipPlaceholder=z.attr("data-placeholder")||"",animatePlaceholder=()=>{let e=0;z.prop("placeholder",""),timer=setInterval(()=>{0==z.val().length?(z.prop("placeholder",z.prop("placeholder")+zipPlaceholder[e]),e++,e==zipPlaceholder.length&&(clearInterval(timer),setTimeout(animatePlaceholder,3e3))):(clearInterval(timer),z.prop("placeholder",""))},100)};animatePlaceholder(),z.on("focus",()=>{z.prop("placeholder",""),clearInterval(timer)}),z.on("input focusout",()=>{z.val().length>0?(z.prop("placeholder",""),clearInterval(timer)): (clearInterval(timer),animatePlaceholder())});

        var fieldset = $("form fieldset");
        var totalStep = fieldset.length; // Without 1 it was doing 10 instead of 9
        var current_step = 1;
        var s = 1;
        $('form fieldset').each(function () {
            $(this).attr('data-step', s++);
        });

        $("#btn-zip").on("click", function () {
            validateZip("main");
        });

        function goNext(ele) {
            var next_step = true;
            var parent_fieldset = ele.closest('fieldset');
            current_step = fieldset.index(parent_fieldset);

            // var result = $("form").valid();
            var result = $("form").valid();

            if (!result) {
                next_step = false;
            }
            if (next_step) {

                if(current_step === 6){
                    (async function(){
                        var emailValid = await emailIsValid();
                        if(emailValid === false){
                            return;
                        }else{
                            parent_fieldset.hide("slide", {direction: "left"},300, function() {
                                $(fieldset[current_step + 1]).show("slide", { direction: "right" },300, function () {
                                    ele.find('input,select').first().focus();
                                    $.stepanimate();
                                });
                            })
                        }
                    })()
                }else if(current_step !==7 ){
                    parent_fieldset.hide("slide", {direction: "left"},300, function() {

                        $(fieldset[current_step + 1]).show("slide", { direction: "right" },300, function () {
                            ele.find('input,select').first().focus();
                            $.stepanimate();
                        });
                    })
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

        $(document).on('click', ".radio-next input[type=radio],.btn-next", function () {
            goNext($(this));
        });

        $("#email").enterKey(function () {
            goNext($(this));
        })

        $("#zip").enterKey(function () {
            goNext($(this));
        })

        $.stepanimate = function () {
            $.height();

            const scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

            if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                window.scrollTo(0, 0)
            } else {
                $('html,body').animate({scrollTop: 0}, 500, function () {
                    $('html,body').clearQueue();
                });
            }


            current_step = $("form fieldset:visible").index()+1;

            if (current_step >= 2) {
                $('.progress-box').slideDown();
            }

            var progressPercentage = ((current_step-13) / (totalStep)) * 98;
            var progressBar = $(".progress-bar");
            progressBar.css("width", progressPercentage + "%");


            var currentVal = parseInt($("#progress-value").text());
            var targetVal = Math.round(progressPercentage);

            $({ count: currentVal }).animate({ count: targetVal }, {
                duration: 1000,
                easing: 'linear',
                step: function() {
                    $("#progress-value").text(Math.round(this.count));
                },
                complete: function() {
                    $("#progress-value").text(Math.round(this.count));
                }
            });

            $.height();
            if ((current_step-13) == totalStep){
                $('#tcpa_cont').show();
            }
        }

        $('input[type=radio][name=time_frame_radio]').click(function(){
            $('#time_frame').val($(this).val());
        });

        $('input[type=radio][name=project_reason_radio]').click(function(){
            $('#project_reason').val($(this).val());
        });

        $('#email').on('input', function() {
            if ($("#email-custom-error").is(":visible"))
            {
                $("#email-custom-error").hide();
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

    });

</script>

<script type="text/javascript" src="{{ asset('js/address-validation-index.js') }}"></script>
</body>
</html>
