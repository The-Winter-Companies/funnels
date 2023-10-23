<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
session_start();
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roofing - ForeverHomeHub</title>
    <meta name="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources."/>
    <meta name="author" content="">
    <meta name="keywords" content=""/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

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
    <meta name="twitter:image" content="">

    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')


    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-roofing-main.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="#">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWGUjDoetHonsX_8REioiFxYojrnomGIs&libraries=places"></script>

    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <script type="text/javascript">
        (function(document, window){
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/649341c06d1a52001362ee20";
            script.onload = function() {
                Pushnami
                    .update()
                    .prompt();
            };
            document.getElementsByTagName("head")[0].appendChild(script);
        })(document, window);
    </script>

</head>
<body>




<header>
    <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="240" alt="Forever Home Hub" class="img-fluid" draggable="false">
				</span>
    </nav>
</header>


<main class="roof">
    <section id="formSec" class="formSec">
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
        <input type="hidden" id="time_frame" name="time_frame" value>
        <input type="hidden" id="project_type" name="project_type" value>
        <input type="hidden" id="roofing_type" name="roofing_type" value>
        <div class="progress-box" style="display: none;">
            <div class="progress" >
                <div class="progress-bar " role="progressbar" aria-valuenow="10" style="width: 12%" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="progress-val text-center"><strong> Your Savings Calculation is <b><span id="progress-value">0</span>%</b>  <font class="complete">Complete</font></strong></p>
        </div>

        <div class="headline container">
            <h2>Compare <span class="hl-bl">Free Quotes</span> from <br class="d-none d-md-block">Top-Rated Roofing Professionals</h2>
            <h3>Check How Much You Can Save</h3>
        </div>

        <form class="form container-fluid" >
            <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>

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
                                <button class="btn form-btn mb-0" id="btnzip"  type="button" ><span class="btn-text">Get Started</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                </div>

            </fieldset>




            <fieldset><legend hidden="true">project_type</legend>

                <h4 class="form-question">What is the nature of this project?</h4>


                <div class="form-cont">
                    <div class="form-group radio-next">
                        <div class="radio-btn">
                            <input id="st1" class="img-radio" type="radio" name="project_type_radio" value="New roof for new home" required>
                            <label class="radio-label" for="st1"><span>New roof for new home</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="st2" class="img-radio" type="radio" name="project_type_radio" value="New roof for an existing home" required>
                            <label class="radio-label" for="st2"><span>New roof for an existing home</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="st3" class="img-radio" type="radio" name="project_type_radio" value="Repair" required>
                            <label class="radio-label" for="st3"><span>Repair existing roof</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="st4" class="img-radio" type="radio" name="project_type_radio" value="Shingle over existing roof" required>
                            <label class="radio-label" for="st4"><span>Shingle over existing roof</span></label>
                        </div>
                        <div class="form-error-message">Please select an option.</div>
                    </div>

                </div>

            </fieldset>


            <fieldset><legend hidden="true">project_type</legend>

                <h4 class="form-question">What type of roofing <br class="d-none d-md-block">are you interested in?</h4>


                <div class="form-cont lg">
                    <div class="form-group radio-next row no-gutter">
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt1" class="img-radio" type="radio" name="roofing_type_radio" value="Asphalt shingle" required>
                            <label class="radio-label" for="rt1"><span>Asphalt Shingle</span></label>
                        </div>
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt2" class="img-radio" type="radio" name="roofing_type_radio" value="Cedar shake" required>
                            <label class="radio-label" for="rt2"><span>Cedar Shake</span></label>
                        </div>
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt3" class="img-radio" type="radio" name="roofing_type_radio" value="Natural slate" required>
                            <label class="radio-label" for="rt3"><span>Natural Slate</span></label>
                        </div>
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt4" class="img-radio" type="radio" name="roofing_type_radio" value="Tile" required>
                            <label class="radio-label" for="rt4"><span>Tile</span></label>
                        </div>
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt6" class="img-radio" type="radio" name="roofing_type_radio" value="Metal" required>
                            <label class="radio-label" for="rt6"><span>Metal</span></label>
                        </div>
                        <div class="radio-btn col-md-6 col-12">
                            <input id="rt7" class="img-radio" type="radio" name="roofing_type_radio" value="Tar" required>
                            <label class="radio-label" for="rt7"><span>Tar</span></label>
                        </div>
                        <div class="form-error-message">Please select an option.</div>
                    </div>

                </div>

            </fieldset>



            <fieldset><legend hidden="true">property_type</legend>

                <h4 class="form-question">What is the property type?</h4>


                <div class="form-cont">
                    <div class="form-group radio-next">
                        <div class="radio-btn">
                            <input id="pt1" class="img-radio" type="radio" name="property_type" value="residential" required>
                            <label class="radio-label" for="pt1"><span>Residential</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="pt2" class="img-radio" type="radio" name="property_type" value="commercial" required>
                            <label class="radio-label" for="pt2"><span>Commercial</span></label>
                        </div>
                        <div class="form-error-message">Please select an option.</div>
                    </div>

                </div>

            </fieldset>


            <fieldset><legend hidden="true">homeowner</legend>

                <h4 class="form-question">Are you the homeowner?</h4>

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


            <fieldset><legend hidden="true">project_timeframe</legend>

                <h4 class="form-question">How soon are you looking to start?</h4>


                <div class="form-cont">
                    <div class="form-group radio-next">
                        <div class="radio-btn">
                            <input id="t1" class="img-radio" type="radio" name="time_frame_radio" value="Immediately" required>
                            <label class="radio-label" for="t1"><span>Immediately</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="t2" class="img-radio" type="radio" name="time_frame_radio" value="Within 1 month" required>
                            <label class="radio-label" for="t2"><span>Within 1 month</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="t3" class="img-radio" type="radio" name="time_frame_radio" value="1-3 months" required>
                            <label class="radio-label" for="t3"><span>Between 1 and 3 months</span></label>
                        </div>
                        <div class="radio-btn">
                            <input id="t4" class="img-radio" type="radio" name="time_frame_radio" value="3+ months" required>
                            <label class="radio-label" for="t4"><span>Over 3 months</span></label>
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
                    <div class="form-group" >
                        <label for="city" class="label">City</label>
                        <input id="city" class="form-control" name="city" type="text"
                               placeholder="City" required>
                        <input type="hidden" id="state" name="state"/>
                        <div class="form-error-message"> Please complete this field</div>
                    </div>
                    <div class="form-group">
                        <label for="zip-code" class="label">ZIP code</label>
                        <input id="zip-code" class="form-control"  type="text"  placeholder="ZIP" >
                        <div class="form-error-message"> Please complete this field</div>
                    </div>
                    <div class="zip-details">
                        <span class="county">City</span>, <span class="state">State</span>
                    </div>
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
                    <label style="font-weight: normal;  font-size: 12px;"><input type="hidden" id="leadid_tcpa_disclosure"/>By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
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
        <p class="page-title text-center">3 Easy Steps To Saving Big on New Roofing:</p>

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
                    <p data-step="1">Answer a few simple questions regarding your new roofing requirements</p>
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
                    <p data-step="2">Instantly receive up to 4 free,no obligation quotes from local roofing experts</p>
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


<section class="page-content imgbg">
    <div class="container">

        <div class="col-md-7 col-12 ml-auto">
            <h2 class="page-desc ml-0">About Us</h2>
            <p class="page-title ml-0">Get matched to verified roofing contractors near you</p>

            <p>Forever Home Hub is a fast, free and easy way for homeowners like you to get estimates from roofing contractor pros in your area! </p>

            <p>We simplify the process by matching you with up to 4 qualified experts in your local area. Get the information you need to make the right roofing decision. It is recommended that you get at least four roofing estimates before making any hiring decisions. </p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    (function(){
        function isStrictMode(){
            return !this;
        }

        function isStrictMode(){
            "use strict";
            return !this;
        }


        $(document).ready(function() {

            window.submittingToLeadProsper = false;

            const z=$("#zip_code"),zipPlaceholder=z.attr("data-placeholder")||"",animatePlaceholder=()=>{let e=0;z.prop("placeholder",""),timer=setInterval(()=>{0==z.val().length?(z.prop("placeholder",z.prop("placeholder")+zipPlaceholder[e]),e++,e==zipPlaceholder.length&&(clearInterval(timer),setTimeout(animatePlaceholder,3e3))):(clearInterval(timer),z.prop("placeholder",""))},100)};animatePlaceholder(),z.on("focus",()=>{z.prop("placeholder",""),clearInterval(timer)}),z.on("input focusout",()=>{z.val().length>0?(z.prop("placeholder",""),clearInterval(timer)): (clearInterval(timer),animatePlaceholder())});

            function is_int(value) {
                return parseFloat(value) === parseInt(value) && !isNaN(value);
            }

            $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());

            var zip_inclick = false;

            var fieldset = $("form fieldset");
            var totalStep = fieldset.length; // Without 1 it was doing 10 instead of 9
            var current_step = 1;
            var s = 1;
            $('form fieldset').each(function () {
                $(this).attr('data-step', s++);
            });

            $("#btnzip").on("click", function () {
                var el = $("[name='zip_code']");

                $('#btnzip .btn-text').text('Please Wait');

                setTimeout(function() {
                    // check if zip is valid
                    if (el.val().length === 5 && is_int(el.val()) && !zip_inclick) {
                        zip_inclick = true;

                        $.getJSON("https://zip.getziptastic.com/v2/US/" + el.val())
                            .done(function (result) {
                                $("#zip-code").val(result.postal_code).addClass('valid');
                                $("[name='city']").val(result.city).addClass('valid');
                                $("[name='state']").val(result.state_short).addClass('valid');
                                $("span.state").text(result.state_short);
                                $("span.county").text(result.county);

                                zip_inclick = false;
                                $(".zip_error").hide();

                                el.parents("fieldset").fadeOut(function () {
                                    $(".headline").hide("blind");
                                    $(this)
                                        .next()
                                        .fadeIn(function () {
                                            $(this).find("input,select").first().focus();
                                            current_step = fieldset.index($(this));
                                            $.stepanimate();
                                        });
                                });
                            })
                            .fail(function () {
                                zipValidationError()
                            })
                            .always(function () {
                                $('#btnzip .btn-text').text('Get Started');
                                zip_inclick = false;
                            });

                    } else if (el.val().length < 5) {
                        zipValidationError()
                    }

                    function zipValidationError() {
                        $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block");
                        $('#btnzip .btn-text').text('Get Started');
                        $(".zip_box").addClass('fail')
                    }

                }, 500);
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

                    if(current_step === 8){
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
                    }else if(current_step !==9 ){
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

            $('#phone').on('input', function() {
                if ($("#phone-custom-error").is(":visible"))
                {
                    $("#phone-custom-error").hide();
                }
            });


            $.fn.enterKey = function (fnc) {
                return this.each(function () {
                    $(this).keypress(function (ev) {
                        var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                        if (keycode == '13') {
                            fnc.call(this, ev);
                        }
                    })
                })
            }

            $(document).on('click', ".radio-next input[type=radio],.btn-next", function () {
                goNext($(this));
            });

            $("#email").enterKey(function () {
                goNext($(this));
            })

            $("#zip_code").enterKey(function () {
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


                current_step = $("form fieldset:visible").index();

                if (current_step >= 2) {
                    $('.progress-box').slideDown();
                }


                var progressPercentage = (current_step / (totalStep)) * 98;
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
            }

            $.height = function () {
                var hd = $('header').outerHeight();
                var xd = parseInt(window.innerHeight - hd);

                $('main').animate({
                    'min-height': xd + 'px'
                }, 500);
            }



            jQuery.validator.addMethod("notNumber", function (value, element) {
                return !value.match(".*\\d.*");
            }, "Number not permitted.");


            jQuery.validator.addMethod("boolean", function (value, element) {
                if (value == 1 || value == 0) return true;
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


            jQuery.validator.addMethod("hasLettersAndSpaces", function (value, element) {
                return value.match(/[a-zA-Z]/) && value.trim().match(/\s/);
            }, "Your address must include letters and spaces.");

            jQuery.validator.addMethod("noSpace", function(value, element) {
                return value.indexOf(" ") < 0;
            }, "Spaces not allowed");


            jQuery.validator.addMethod("emailfull", function (value, element) {
                return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
            }, "Please enter valid email address!");

            jQuery.validator.addMethod("ContainsAtLeastOneDigit", function (value, element) {
                return /\d/.test(value);
            }, 'Address must contain at least one digit');

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
                    },
                    state: {
                        required: true,
                        state: true
                    },
                    city: {
                        required: true
                    }
                },

                messages: {
                    zip_code: 'Please enter a valid zip code. (i.e. 90210)',
                    email: 'Please enter your email address.',
                    first_name: "Don't forget to tell us your name.",
                    last_name: "Don't forget to tell us your last name.",
                    address: {
                        required: 'Please enter your address.',
                        minLengthNoSpaces: 'Your address is too short',
                    },
                    phone: 'Please enter a valid phone number',
                },
                errorElement : 'span',
                errorPlacement: function(error, element) {
                    $(element).closest('.form-group').children('.form-error-message').html(error).show();
                },
                showErrors: function(errorMap, errorList) {
                    this.defaultShowErrors();
                }
            });


            var phoneSelector = $('input[name="phone"]');

            var maskOptions = {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['(000) 000-0000'];
                    var mask = masks[0];
                    $('input[name="phone"]').mask(mask, options);
                },
            };

            if (phoneSelector.mask !== undefined) {
                phoneSelector.mask('(000) 000-0000', maskOptions);
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

            $('input[type=radio][name=project_type_radio]').click(function(){
                $('#project_type').val($(this).val());
            });

            $('input[type=radio][name=roofing_type_radio]').click(function(){
                $('#roofing_type').val($(this).val());
            });

            $('input[type=radio][name=time_frame_radio]').click(function(){
                $('#time_frame').val($(this).val());
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

            $(document).on("click", '#possible-email-correction', function() {
                $("#email").val($(this).text());
                $("#email").css('border-color','green');
                window.dontRemoteValidateEmail = true;
                goNext($(this));
                // return false;
            });

            $('#email').on('input', function() {
                if ($("#email-custom-error").is(":visible"))
                {
                    $("#email-custom-error").hide();
                }
            });

            window.dontRemoteValidateEmail = false;
            window.dontRemoveValidatePhone = false;

            function fillFormDataRoofing() {
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
                formData['lp_campaign_id'] = "17608";
                formData['lp_supplier_id'] = "38543";
                formData['lp_key'] = "2e3nsxqveudg5l";
                if($('#email').val() === 'test@test.com' || $('#email').val() === 'pingdom@test.com'){
                    formData['lp_action'] = "test";
                }
                formData['email_address'] = $('#email').val();
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['url'] = window.location.href;
                formData['roof_type'] = $('#roofing_type').val();
                formData['time_frame'] = $('#time_frame').val();
                formData['project_type'] = $('#project_type').val();
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
                formData['token'] = token;
                formData['complete'] = 1;
                formData['lead'] = 1;
                formData['vertical'] = 'roofing';

                return formData;
            }


            $('form').submit(function (e) {
                if(window.submittingToLeadProsper === false){
                    window.submittingToLeadProsper = true;
                    var form = this;
                    e.preventDefault();

                    if (!$(form).validate().form())
                        return;
                    // $('#form_submit').prop('disabled', true);

                    var formdata = fillFormDataRoofing();
                    window.formdata = formdata;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $submitUrl?>',
                        data: formdata,
                        //async: false,
                        dataType: "text",
                        success: function (data) {
                            window.location.replace("/thank-you?ef_aff_id=" + getUrlParameter('ef_aff_id') + "&ef_tx_id=" + getUrlParameter('ef_tx_id') + "&s1=" + getUrlParameter('s1') + "&s2=" + getUrlParameter('s2') + "&s3=" + getUrlParameter('s3') + "&s4=" + getUrlParameter('s4') + "&s5=" + getUrlParameter('s5') + "&v=roofing" + "&ef_offer_id=" + getUrlParameter('ef_offer_id'));
                        }, error: function (data) {
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                            $('#form_submit').removeAttr('disabled');
                        }, complete: function () {
                            window.submittingToLeadProsper = false; // Unlock the submit when finished
                        }
                    });
                    stl(formdata);
                }else {
                    console.log('Already submitting to LeadProsper, please wait...');
                }
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

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
            });

            var invalid_city_state = false;
            if(typeof window.google !== 'undefined' && typeof window.google.maps !== 'undefined') {
                var autocomplete = new google.maps.places.Autocomplete((document.getElementById('address')), {
                    componentRestrictions: {
                        country: ['us']
                    },
                    types: ['address'],
                    fields: ['address_components','adr_address'],
                })
            }

            google.maps.event.addListener(autocomplete,'place_changed', function (){
                var place = autocomplete.getPlace();
                var addressComponents = place.address_components;
                $.each(addressComponents, function(){
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
                })

                if (place.adr_address) {
                    var address = '';
                    $('<div>', {html: place.adr_address }).find('span.street-address').each(function(){
                        address += $(this).text();
                    });
                    $('<div>', {html: place.adr_address }).find('span.country-name').each(function(){
                        var address_value = $("#address").val();
                        $("#address").val(address_value.replace(", " + $(this).text(),''));
                    });
                    $('<div>', {html: place.adr_address }).find('span.locality').each(function(){
                        address = address.replace(", " + $(this).text(),'');
                    });

                    $('<div>', {html: place.adr_address }).find('span.region').each(function(){
                        address = address.replace(", " + $(this).text(),'');
                    });
                    if (address) {
                        document.getElementById("address_short").value = address;

                        var originalAddress = document.getElementById("address").value;
                        var addressField = $('#address');
                        addressField.val(document.getElementById("address_short").value);
                    }
                    //check is house number is invalid in the Google API and manually autocomplete
                    var matches = originalAddress.match(/(\d+)/);
                    setTimeout(function () {
                        function hasNumbers(t)
                        {
                            var regex = /\d/g;
                            return regex.test(t);
                        }
                        var updatedAddress = addressField.val();
                        if(!hasNumbers(updatedAddress) && hasNumbers(originalAddress) && matches) {
                            addressField.val(matches[0] + " " + updatedAddress);
                        }
                        $('#address').valid();
                    }, 100);
                }
                $('#address').valid();
            })


            $('#add-change').show();
            $('.address_loc').slideDown();
            $('#adddetails-change').hide();

            //Submit on page load
            // $('form').submit();

        });// Ready




    })();

</script>
</body>
</html>
