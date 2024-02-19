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
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thank-you.css') }}" rel="stylesheet">
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

    @include('pixels.all-pages-head')
</head>
<body>

@include('pixels.all-pages-body')
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

                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/roofing/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=3&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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

                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/tubs/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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

                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/solar/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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


                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/tubs/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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

                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/roofing/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=3&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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

                    <a class="partner featured" href="https://{{$domainFullDomain == "foreverhomehub.com" ? "quotes.foreverhomehub.com" : $domainFullDomain}}/solar/o7?ef_tx_id={{\Illuminate\Support\Facades\Request::get('ef_tx_id')}}&ef_aid=1&ef_adv_event_id=2&ef_offer_id={{\Illuminate\Support\Facades\Request::get('ef_offer_id')}}&ef_aff_id={{\Illuminate\Support\Facades\Request::get('ef_aff_id')}}&s1={{\Illuminate\Support\Facades\Request::get('s1')}}">
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


@include('partials/footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--[if lte IE 8]>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<![endif]-->
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



</body>
</html>
