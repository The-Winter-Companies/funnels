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
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">

	<!-- Google / Search Engine Tags -->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="Your Info Has Been Submitted!">
	<meta itemprop="image" content="">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="#">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:description" content="Your Info Has Been Submitted!">
	<meta property="og:image" content="">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="Your Info Has Been Submitted!">
	<meta name="twitter:image" content="">

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap-v4.0.0.css" rel="stylesheet">
    <link href="../assets/css/ty.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="#">

    <link rel="manifest" href="/manifest.json">
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
		<div class="container">
		  <nav class="navbar text-center">
			  <h1 class="navbar-brand mx-auto"><img src="../assets/img/logo.png" onerror="this.src='../img/logo.png'" width="180" height="47" alt="Logo" class="img-fluid"></h1>
		  </nav>
		</div>
	</header>


	<main>
		<section class="container">


			<div class="nextsteps container text-center" style="display: none;">
				<h2 class="nextstepHead">Your Info Has Been Received! </h2>
<!--				<h2 class="nextstepHead"></h2>-->
				<p style="color: #545253;font-size: 20px ;font-weight: 700" ">You will receive a call shortly.</p><br>
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
							<img src="{!! asset('js/jquery.geocomplete.min.js') !!}" onerror="this.src='../img/loading-icon1.png'" width="145" height="145" alt="#" class="img-fluid">
						</div>
						<div class="loading-icon licon2 col">
							<img src="../assets/img/loading-icon2.svg" onerror="this.src='../img/loading-icon2.png'" width="145" height="145" alt="#" class="img-fluid">
						</div>
						<div class="loading-icon licon3 col">
							<img src="../assets/img/loading-icon3.svg" onerror="this.src='../img/loading-icon3.png'" width="145" height="145" alt="#" class="img-fluid">
						</div>
						<div class="loading-icon licon4 col">
							<img src="../assets/img/loading-icon4.svg" onerror="this.src='../img/loading-icon4.png'" width="145" height="145" alt="#" class="img-fluid">
						</div>
						<div class="loading-icon licon5 col">
							<img src="../assets/img/loading-icon5.svg" onerror="this.src='../img/loading-icon5.png'" width="145" height="145" alt="#" class="img-fluid">
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

					{!!

                    $offersArray = [
                            ['vertical' => 'roofing', 'offer' => '<!-- roofing redirect -->
                    <a class="partner featured" href="https://quotes.foreverhomehub.com/roofing/o7?ef_tx_id='. $_GET['ef_tx_id'] .'&ef_aid=1&ef_adv_event_id=3&ef_offer_id=' . $_GET['ef_offer_id'] . '&ef_aff_id=' . $_GET['ef_aff_id'] . '&s1=' . $_GET['s1'] . '">
                        <h4 class="d-block d-md-none  partner_title">Rise Above with Our Roofing Excellence: Elevate Your Home Today!</h4>
                        <div class="row align-items-center" >
                            <div class="col col-partner_img">
                                <img src="../assets/img/bg-roof.jpg" class="img-fluid">
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
                    <!-- roofing redirect end-->'],
                        ['vertical' => 'solar', 'offer' => '<!-- solar redirect -->
    <a class="partner featured" href="https://quotes.foreverhomehub.com/solar/o7?ef_tx_id='. $_GET['ef_tx_id'] .'&ef_aid=1&ef_adv_event_id=2&ef_offer_id=' . $_GET['ef_offer_id'] . '&ef_aff_id=' . $_GET['ef_aff_id'] . '&s1=' . $_GET['s1'] . '">
        <h4 class="d-block d-md-none  partner_title">Embrace the power of the sun. Switch to solar and avoid blackouts. Get your free quote today!</h4>
        <div class="row align-items-center" >
            <div class="col col-partner_img">
                <img src="../assets/img/bg-solar.jpg" class="img-fluid">
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
    <!-- solar redirect end-->'],

                        ['vertical' => 'tubs', 'offer' => '<!-- tubs redirect -->
    <a class="partner featured" href="https://quotes.foreverhomehub.com/tubs/o7?ef_tx_id='. $_GET['ef_tx_id'] .'&ef_aid=1&ef_adv_event_id=2&ef_offer_id=' . $_GET['ef_offer_id'] . '&ef_aff_id=' . $_GET['ef_aff_id'] . '&s1=' . $_GET['s1'] . '">
        <h4 class="d-block d-md-none  partner_title">Immerse in Luxury: The Ultimate Tubs Transformation!</h4>
        <div class="row align-items-center" >
            <div class="col col-partner_img">
                <img src="../assets/img/bg-tubs.jpg" class="img-fluid">
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
    <!-- tubs redirect end-->']

                    ];

                    $activeVerticals = ['roofing', 'solar', 'tubs'];

                    foreach($offersArray as $key=>$value){
                        if($_GET['v'] !== $value['vertical']){
                            echo $value['offer'];
                        }
                    }

                    if(!isset($_GET['v']) || !in_array($_GET['v'], $activeVerticals)){
                        echo "<script> window.location.replace('https://foreverhomehub.com'); </script>";
                    }

                    /*Refi Offer*/

                    echo '<a class="partner" href="https://thetamkt.com/?a=13418&c=148803&s1=' . $_GET['s1'] . '&s2=' . $_GET['ef_aff_id'] . '&s3=' . $_GET['ef_tx_id'] . '">
                        <h4 class="d-block d-md-none  partner_title">Reduce Your Mortgage</h4>
                        <div class="row align-items-center">
                            <div class="col col-partner_img">
                                <img src="../assets/img/fedwatch168x81.jpg" class="img-fluid" alt="erelief">
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
                    </a>';

                    /* Dish Offer */

                    echo '<a class="partner" href="https://mumkt.com/?a=13418&c=151271&s1=' . $_GET['ef_tx_id'] . '">
                        <h4 class="d-block d-md-none  partner_title">The Secret to Saving $1,080 when switching to DISH!!</h4>
                        <div class="row align-items-center">
                            <div class="col col-partner_img">
                                <img src="../assets/img/dish168x81.jpg" class="img-fluid" alt="erelief">
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
                    </a>';

                    !!}

				</div>




				<hr class="breaker">
				<div class="align-items-center promise" >
					<div class="row">
						<div class="col col-seal text-center"><img class="img-fluid" src="../assets/img/seal.png" alt="seal"></div>
						<div class="col">
							<h4>The Forever Home Hub Promise</h4>
							<p>At ForeverHomeHub.com, our mission is to ensure your home improvement projects are completed to perfection. We connect you with top-rated, licensed, and pre-screened contractors in your area, absolutely FREE of charge. Our cutting-edge technology, combined with a thorough screening process, guarantees that we recommend only the finest installers at the most competitive prices.</p>
						</div>
					</div>
				</div>
			</article>

		</section>
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
                <a href="https://foreverhomehub.com/privacy-policy/#ccpa" target="_blank">CCPA&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</a>
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!--[if lte IE 8]>
	  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<![endif]-->
<script>
	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
		return false;
	};

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
