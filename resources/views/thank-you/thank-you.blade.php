<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Info Has Been Submitted!</title>
    <meta name="description" content="Your Info Has Been Submitted!"/>
    <meta name="author" content="">
    <meta name="keywords" content=""/>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="description" content="Your Info Has Been Submitted!">
    <meta itemprop="image" content="{{asset($domainLogoPath)}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Your Info Has Been Submitted!">
    <meta property="og:image" content="{{asset($domainLogoPath)}}">

    @include('partials.rollbar_script')

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap-v4.0.0.css')}}" rel="stylesheet">
    <link href="{{asset('css/ty-new.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="#">

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

    @include('partials.meta_script')
    <script>
        fbq('track', 'Lead');
    </script>
    <!--[if IE 9]>

    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->

</head>
<body>

@if($mainDomain == "foreverhomeplus")
    <header>
        <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/foreverhomeplus_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomeplus_logo.png') }}'" width="320"
                                                                                 alt="Forever Home Plus" class="img-fluid" draggable="false"></a>
				</span>
        </nav>
    </header>
@else
    @if($mainDomain == "foreverhomehub")
        <header>
            <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="320"
                                                                                 alt="Smart Consumer Insights" class="img-fluid" draggable="false"></a>
				</span>
            </nav>
        </header>
    @endif
@endif


<main>
    <section class="container">


        <div class="nextsteps container text-center" style="display: none;">
            <h2 class="nextstepHead">Your Info Has Been Received! </h2>
            <p style="color: #545253;font-size: 20px ;font-weight: 700">You will receive a call shortly.</p><br>
        </div>

        <article class="results">


            <div class="loadingMessage text-center" >
                <div class="loading-text">
                    <p class="step1">Reviewing your project details..</p>
                    <p style="display:none;" class="step2">Searching contractors in your area...</p>
                    <p style="display:none;" class="step3">Sorting contractors with best pricing and finance options...</p>
                    <p style="display:none;" class="step4">Checking contractor availability...</p>
                    <p style="display:none;" class="step5"><span>Congratulations!</span><br>We've found matches in your area</p>
                </div>
                <div class="loading-icons row no-gutter justify-content-center">
                    <div class="loading-icon licon1 col">
                        <img src="{{ asset('img/loading-icon1.svg') }}" onerror="this.src='../img/loading-icon1.png'" width="145" height="145" alt="#" class="img-fluid">
                    </div>
                    <div class="loading-icon licon2 col">
                        <img src="{{ asset('img/loading-icon2.svg') }}" onerror="this.src='../img/loading-icon2.png'" width="145" height="145" alt="#" class="img-fluid">
                    </div>
                    <div class="loading-icon licon3 col">
                        <img src="{{ asset('img/loading-icon3.svg') }}" onerror="this.src='../img/loading-icon3.png'" width="145" height="145" alt="#" class="img-fluid">
                    </div>
                    <div class="loading-icon licon4 col">
                        <img src="{{ asset('img/loading-icon4.svg') }}" onerror="this.src='../img/loading-icon4.png'" width="145" height="145" alt="#" class="img-fluid">
                    </div>
                    <div class="loading-icon licon5 col">
                        <img src="{{ asset('img/loading-icon5.svg') }}" onerror="this.src='../img/loading-icon5.png'" width="145" height="145" alt="#" class="img-fluid">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div  id="offers" style="display: none;">
                <div class="offer-head text-center">
                    <i class="offer-icon"></i>
                    <h2>LIMITED TIME OFFERS</h2>
                    <p>You also qualify for free quotes on these additional services below!</p>
                </div>

                @if(\Illuminate\Support\Facades\Request::get('v') == 'solar')

                    <a class="partner featured" href="https://{{$domainFullDomain}}/roofing/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=3&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">Rise Above with Our Roofing Excellence: Elevate Your Home Today!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-roof.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Rise Above with Our Roofing Excellence: Elevate Your Home Today!</h4>
                                <ul>
                                    <li>Save on your heating and cooling bills each month</li>
                                    <li>Upgrade value, redefine with roofing</li>
                                    <li>Elevate home protection</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

                    <a class="partner featured" href="https://{{$domainFullDomain}}/tubs/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">Immerse in Luxury: The Ultimate Tubs Transformation!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-tubs.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Immerse in Luxury: The Ultimate Tubs Transformation!</h4>
                                <ul>
                                    <li>Transform Your Bath Time</li>
                                    <li>Every bath becomes a comfortable escape</li>
                                    <li>Relaxation, style, and value</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

                @endif

                @if(\Illuminate\Support\Facades\Request::get('v') == 'roofing')

                    <div class="partners">

                    <a class="partner featured" data-backdrop="static" data-toggle="modal" data-keyboard="false" data-target="#solar_form">
                        <h4 class="d-block d-md-none  partner_title">Slash Your Electric Bill Each Month By Going Solar</h4>
                        <div class="row align-items-center">
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-solar.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Slash Your Electric Bill Each Month By Going Solar</h4>
                                <ul>
                                    <li>Affordable, clean energy at your fingertips</li>
                                    <li>Join the solar campaign for lower bills and eco-friendly living</li>
                                    <li>Be energy independent</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>
                    </div>

                    <a class="partner featured" href="https://{{$domainFullDomain}}/tubs/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">Immerse in Luxury: The Ultimate Tubs Transformation!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-tubs.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Immerse in Luxury: The Ultimate Tubs Transformation!</h4>
                                <ul>
                                    <li>Transform Your Bath Time</li>
                                    <li>Every bath becomes a comfortable escape</li>
                                    <li>Relaxation, style, and value</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

                @endif

                @if(\Illuminate\Support\Facades\Request::get('v') == 'tubs')

                    <a class="partner featured" href="https://{{$domainFullDomain}}/roofing/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=3&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">Rise Above with Our Roofing Excellence: Elevate Your Home Today!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-roof.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Rise Above with Our Roofing Excellence: Elevate Your Home Today!</h4>
                                <ul>
                                    <li>Save on your heating and cooling bills each month</li>
                                    <li>Upgrade value, redefine with roofing</li>
                                    <li>Elevate home protection</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

                    <a class="partner featured" href="https://{{$domainFullDomain}}/solar/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">Embrace the power of the sun. Switch to solar and avoid blackouts. Get your free quote today!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/bg-solar.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Embrace the power of the sun. Switch to solar and avoid blackouts. Get your free quote today!</h4>
                                <ul>
                                    <li>Affordable, clean energy at your fingertips</li>
                                    <li>Join the solar campaign for lower bills and eco-friendly living</li>
                                    <li>Be energy independent</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

                @endif


                <a class="partner" href="https://thetamkt.com/?a=13418&c=148803&s1={{\Illuminate\Support\Facades\Request::get('s1')}}&s2={{\Illuminate\Support\Facades\Request::get('s2')}}&s3={{\Illuminate\Support\Facades\Request::get('s3')}}">
                        <h4 class="d-block d-md-none  partner_title">Reduce Your Mortgage</h4>
                        <div class="row align-items-center">
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/fedwatch168x81.jpg') }}" class="img-fluid" alt="erelief">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">Reduce Your Mortgage</h4>
                                <p>Pay off your mortgage with a rate that works for YOU</p>
                                <ul>
                                    <li>We have helped thousands of Americans</li>
                                    <li>Qualify for free in less than 60 seconds - no login required</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>



                <a class="partner" href="https://mumkt.com/?a=13418&c=151271&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
                        <h4 class="d-block d-md-none  partner_title">The Secret to Saving $1,080 when switching to DISH!!</h4>
                        <div class="row align-items-center">
                            <div class="col col-partner_img">
                                <img src="{{ asset('img/dish168x81.jpg') }}" class="img-fluid" alt="erelief">
                            </div>
                            <div class="col col-partner_cont">
                                <h4 class="d-none d-md-block partner_title">The Secret to Saving $1,080 when switching to DISH!</h4>
                                <ul>
                                    <li>Save $1,080 on TV + smart HD DVR included!</li>
                                    <li>Receive a free $50 VISA prepaid card</li>
                                    <li>60k FREE Movies On Demand!</li>
                                </ul>
                            </div>
                            <div class="col col-partner_btn">
                                <span>View My Quote</span>
                            </div>
                        </div>
                    </a>

            </div>




            <hr class="breaker">
            <div class="align-items-center promise" >
                <div class="row">
                    <div class="col col-seal text-center"><img class="img-fluid" src="{{ asset('img/seal.png') }}" alt="seal"></div>
                    <div class="col">
                        <h4>The {{$domainTitle}} Promise</h4>
                        <p>At {{$domainFullDomain}}, our mission is to ensure your home improvement projects are completed to perfection. We connect you with top-rated, licensed, and pre-screened contractors in your area, absolutely FREE of charge. Our cutting-edge technology, combined with a thorough screening process, guarantees that we recommend only the finest installers at the most competitive prices.</p>
                    </div>
                </div>
            </div>
        </article>

    </section>
</main>

<div class="modal fade" role="dialog" tabindex="-1" id="solar_form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4> Step <span class="slidenum">1 of 7</span></h4>
                <button type="button" class="btn modal-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form" action="" method="get">
                    <fieldset><legend hidden="true">Electric Bill</legend>
                        <h3 class="form_box-question mb-1">What is your estimated monthly electric&nbsp;bill?</h3>
                        <p class="form_box-desc">This helps us determine how much solar power may save you.</p>
                        <div class="form-cont">
                            <div class="form-group no-gutter row justify-content-center">
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill01" type="radio" name="electricity_bill" value="$0-100">
                                    <label for="bill01"><span>$0-100</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill02" type="radio" name="electricity_bill" value="$101-200">
                                    <label for="bill02"><span>$101-200</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill03" type="radio" name="electricity_bill" value="$201-300" checked="">
                                    <label for="bill03"><span>$201-300</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill04" type="radio" name="electricity_bill" value="$301-400">
                                    <label for="bill04"><span>$301-400</span></label>
                                </div>
                                <div class="radio-btn col-md-auto col-6 ">
                                    <input id="bill05" type="radio" name="electricity_bill" value="$401+">
                                    <label for="bill05"><span>$400+</span></label>
                                </div>
                            </div>
                            <div class="form-btns">
                                <button class="btn form-btn btn-next" type="submit"><span class="btn-text">Continue</span></button><br>
                            </div>
                            <p class="tcpa form-tcpa text-center mt-3">
                                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                                    <input type="hidden" id="leadid_tcpa_disclosure">
                                    By clicking "<span id="tcpa_txt">Continue</span>", I authorize up to 4 home improvement services companies, their
                                    contractors and <a href="https://thesimplehomequotes.com/partners" target="_blank">partner companies</a> to contact
                                    me about home improvement offers by phone calls and SMS messages to the number I provided. I authorize that
                                    these marketing communications may be delivered to me using an automatic telephone dialing system or by
                                    prerecorded message. I understand that my consent is not a condition of purchase. I also have read and agree to
                                    the <a href="https://thesimplehomequotes.com/terms" target="_blank">Terms and Conditions</a> and <a href="https://thesimplehomequotes.com/privacy" target="_blank">Privacy Policy</a> of this website. Message
                                    and Data rates may apply.
                                </label>
                            </p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


@include('partials/footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<![endif]-->

<script src="{{asset('js/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap-4.0.0.js')}}"></script>
<script>


    (function(){
        'use strict';

        function mincont() {
            var hd = $('header').outerHeight(),
                fd = $('footer').outerHeight(),
                xd = parseInt(window.innerHeight - (hd + fd));
            $('main').css('min-height', xd + 'px');
        }

        var timeVar = null,
            count = 1;

        $(function() {
            mincont();
            showProgress(count++);
            timeVar = setInterval(function() {
                showProgress(count++);
            }, 2000);

            function showProgress(count) {
                switch (count) {
                    case 1:
                        $('.step' + count).show();
                        $('.licon' + count).addClass('show').fadeTo(400, 1);
                        break;
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                        $('.step' + (count - 1)).hide();
                        $('.licon' + (count - 1)).removeClass('show');
                        $('.step' + count).show();
                        $('.licon' + count).addClass('show').fadeTo(400, 1);
                        break;
                    default:
                        if (timeVar) {
                            clearInterval(timeVar);
                            $('.loadingMessage').fadeOut(function(){
                                $('#offers,.nextsteps').fadeIn(function() {
                                    $('.results').animate({marginTop: '40px'});
                                });
                            });
                        }
                }
            }
        });

        $(window).resize(mincont);
    })();
</script>

<script>
    $('.modal').on('show.bs.modal', function () {
        totalStep = $(this).find("fieldset").length;
        currentStep = $(this).find("fieldset").data('step');
        $('.slidenum').html('' + currentStep + ' of ' + totalStep + '');

        if (totalStep == 1) {
            $('.modal-header h4').hide();
        }else{
            $('.modal-header h4').show();
        }
    });
</script>

</body>
</html>
