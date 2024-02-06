<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
if(isset($_GET['ebook']) && $_GET['ebook'] == true){
    $ebookMessage = "<br><br>After signing up, you will be able to download your free ebook!";
}
$vertical = 'astrology';
$page = 'main';
session_start();
?>
    <!doctype html>
<html>
<head>
    <script src="{{ asset('js/jquery/jquery-3.6.0.min-astrology.js') }}"></script>
    <!--    LeadPost-->
    <meta name='referrer' content='no-referrer-when-downgrade'>
    <img src='https://rdcdn.com/rt?aid=21578&e=1&img=1' height='1' width='1' />
    <!-- validation block start !-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    @include('partials.meta_script')
    @include('partials.astrology_head_scripts')
    @include('partials.rollbar_script')
    @include('partials.trusted_form')
    @include('partials.lead_id')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>Astrology Spark</title>
    <meta name="description" content="Discover the power of astrology with AstrologySpark. Get free, personalized, and accurate predictions to transform your life. Sign up now for horoscopes that go beyond generic readings and start your journey today!"/>
    <meta name="author" content="AstrologySpark">
    <meta name="keywords" content="astrology, predictions, personalized, accurate, horoscopes, free, journey, transform, life, beyond generic readings "/>

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="AstrologySpark">
    <meta itemprop="description" content="Discover the power of astrology with AstrologySpark. Get free, personalized, and accurate predictions to transform your life. Sign up now for horoscopes that go beyond generic readings and start your journey today!">
    <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AstrologySpark">
    <meta property="og:description" content="Discover the power of astrology with AstrologySpark. Get free, personalized, and accurate predictions to transform your life. Sign up now for horoscopes that go beyond generic readings and start your journey today!">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AstrologySpark">
    <meta name="twitter:description" content="Discover the power of astrology with AstrologySpark. Get free, personalized, and accurate predictions to transform your life. Sign up now for horoscopes that go beyond generic readings and start your journey today!">
    <meta name="twitter:image" content="">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">
    <link href="{{ asset('css/astrology.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon-astrology.png')}}">

</head>

<body>

<div class="stars"></div>

<div class="planet">

    <picture>
        <source srcset="{{ asset('img/planet.webp') }}" type="image/webp">
        <source srcset="{{ asset('img/planet.png') }}" type="image/png">
        <img style="display:none;" src="{{ asset('img/planet.png') }}">
    </picture>

</div>

<div class="bg-obj" >
    <object type="image/svg+xml" data="{{ asset('img/s-leo.svg') }}" style="display: none;">
        <img  id="obj-img" src="{{ asset('img/s-leo.svg') }}" onerror="this.src='{{ asset('img/s-leo.svg') }}'" />
    </object>
</div>

<header>
    <nav class="navbar justify-content-between mx-auto">
				<span class="navbar-brand mx-auto">
                    <a href="https://astrologyspark.com" target="_blank">
                        <picture>
                            <source srcset="{{ asset('img/logo-2.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/logo-2.png') }}" type="image/png">
                            <img src="{{ asset('img/logo-2.png') }}" width="390" alt="Astrology Spark" class="img-fluid" draggable="false">
                        </picture>
                    </a>
				</span>
    </nav>
</header>
<main>

    <form id="horoscopeform" class="container">
        <input id="xxTrustedFormCertUrl" style="display:none;" type="text"  name="xxTrustedFormCertUrl">
        <input id="ip_address" style="display:none;" type="text"  name="ip_address">
        <input id="ip_city" style="display:none;" type="text"  name="ip_city">
        <input id="ip_country" style="display:none;" type="text"  name="ip_country">
        <input id="ip_loc" style="display:none;" type="text"  name="ip_loc">
        <input id="ip_org" style="display:none;" type="text"  name="ip_org">
        <input id="ip_postal" style="display:none;" type="text"  name="ip_postal">
        <input id="ip_region" style="display:none;" type="text"  name="ip_region">
        <input id="ip_timezone" style="display:none;" type="text"  name="ip_timezone">
        <input id="ebook" style="display:none;" type="text"  name="ebook">
        <input id="ef_tx_id" style="display:none;" type="text"  name="ef_tx_id">

        <fieldset><legend style="visibility:hidden;" hidden="true">Zodiac Sign</legend>

            <center>
                <h2 class="step-title mb-1"><span>STEP 1 of 4 :</span> Select your sign</h2>
                <p class="step-desc">Transform your life with FREE astrology predictions. Sign up now for personalized and accurate horoscopes that go beyond generic readings. Start your journey today!<?php echo $ebookMessage ?? "";?></p>
            </center>

            <div class="row form-group no-gutters zodiac radio-next">
                <div class="col h-item ">
                    <input id="aries" type="radio" name="horoscope" value="aries" />
                    <label for="aries">
                        <picture>
                            <source srcset="{{ asset('img/hd-aries.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-aries.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-aries.png') }}" >
                        </picture>
                        <b>Aries</b> <span>Mar 21 - Apr 19</span></label>
                </div>
                <div class="col h-item">
                    <input id="taurus" type="radio" name="horoscope" value="taurus" />
                    <label for="taurus">
                        <picture>
                            <source srcset="{{ asset('img/hd-taurus.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-taurus.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-taurus.png') }}">
                        </picture>

                        <b>Taurus</b> <span>Apr 20 - May 20</span></label>
                </div>
                <div class="col h-item">
                    <input id="gemini" type="radio" name="horoscope" value="gemini" />
                    <label for="gemini">

                        <picture>
                            <source srcset="{{ asset('img/hd-gemini.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-gemini.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-gemini.png') }}">
                        </picture>

                        <b>Gemini</b> <span>May 21 - Jun 20</span></label>
                </div>
                <div class="col h-item">
                    <input id="cancer" type="radio" name="horoscope" value="cancer" />
                    <label for="cancer">

                        <picture>
                            <source srcset="{{ asset('img/hd-cancer.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-cancer.png') }}" type="image/png">
                            <img id="cancer-sign" src="{{ asset('img/hd-cancer.png') }}">
                        </picture>

                        <b>Cancer</b> <span>Jun 21 - Jul 22</span></label>
                </div>
                <div class="col h-item">
                    <input id="leo" type="radio" name="horoscope" value="leo" />
                    <label for="leo">
                        <picture>
                            <source srcset="{{ asset('img/hd-leo.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-leo.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-leo.png') }}">
                        </picture>

                        <b>Leo</b> <span>Jul 23 - Aug 22</span></label>
                </div>
                <div class="col h-item">
                    <input id="virgo" type="radio" name="horoscope" value="virgo" />
                    <label for="virgo">
                        <picture>
                            <source srcset="{{ asset('img/hd-virgo.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-virgo.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-virgo.png') }}">
                        </picture>

                        <b>Virgo</b> <span>Aug 23 - Sep 22</span></label>
                </div>
                <div class="col h-item">
                    <input id="libra" type="radio" name="horoscope" value="libra" />
                    <label for="libra">
                        <picture>
                            <source srcset="{{ asset('img/hd-libra.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-libra.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-libra.png') }}">
                        </picture>
                        <b>Libra</b> <span>Sep 23 - Oct 22</span></label>
                </div>
                <div class="col h-item">
                    <input id="scorpio" type="radio" name="horoscope" value="scorpio" />
                    <label for="scorpio">
                        <picture>
                            <source srcset="{{ asset('img/hd-scorpio.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-scorpio.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-scorpio.png') }}">
                        </picture>

                        <b>Scorpio</b> <span>Oct 23 - Nov 21</span></label>
                </div>
                <div class="col h-item">
                    <input id="sagittarius" type="radio" name="horoscope" value="sagittarius" />
                    <label for="sagittarius">
                        <picture>
                            <source srcset="{{ asset('img/hd-sagittarius.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-sagittarius.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-sagittarius.png') }}">
                        </picture>

                        <b>Sagittarius</b> <span>Nov 22 - Dec 21</span></label>

                </div>
                <div class="col h-item">
                    <input id="capricorn" type="radio" name="horoscope" value="capricorn" />
                    <label for="capricorn">
                        <picture>
                            <source srcset="{{ asset('img/hd-capricorn.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-capricorn.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-capricorn.png') }}">
                        </picture>

                        <b>Capricorn</b> <span>Dec 22 - Jan 19</span></label>

                </div>

                <div class="col h-item" >
                    <input id="aquarius" type="radio" name="horoscope" value="aquarius" />
                    <label for="aquarius">
                        <picture>
                            <source srcset="{{ asset('img/hd-aquarius.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-aquarius.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-aquarius.png') }}">
                        </picture>
                        <b>Aquarius</b> <span>Jan 20 - Feb 18</span></label>

                </div>
                <div class="col h-item">
                    <input id="pisces" type="radio" name="horoscope" value="pisces" />
                    <label for="pisces">
                        <picture>
                            <source srcset="{{ asset('img/hd-pisces.webp') }}" type="image/webp">
                            <source srcset="{{ asset('img/hd-pisces.png') }}" type="image/png">
                            <img src="{{ asset('img/hd-pisces.png') }}">
                        </picture><b>Pisces</b> <span>Feb 19 - Mar 20</span></label>
                </div>

            </div>
        </fieldset>


        <fieldset data-step="2" id="emailContainer">

            <center>
                <h2 class="step-title"><span>STEP 2 of 4 : </span>where should we send your free horoscope?</h2>
            </center>

            <div class="step-cont">
                <div class=" ">
                    <label for="email" style="visibility: hidden;">Please Enter Email Address:</label>
                    <input class="form-control" type="email" placeholder="Email Address" name="email" id="email" required>
                    <label id="email-custom-error" class="" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-15px);
    background: #fff;
    padding: 5px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>

                <button id="email-next" class="btn form-btn btn-next" type="button" ><span class="btn-text">Continue</span></button>
            </div>


        </fieldset>

        <fieldset>

            <center>
                <h2 class="step-title"><span>STEP 3 of 4 : </span>birth details</h2>
            </center>


            <div class="step-cont">
                <div class="form-group ">
                    <h4 class="label"> Your Gender:</h4>

                    <label for="gender" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;"> Gender:</label>

                    <select name="gender" class="form-control form-control"  id="gender" required>

                        <option value="">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="nonbinary">Nonbinary</option>

                    </select>

                </div>


                <h4 class="label">Full Name:</h4>
                <div class="row no-gutter">
                    <div class=" col-md-6 col-12">
                        <label class="label" for="first_name" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">First Name*</label>
                        <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text"  name="first_name" placeholder="Enter First Name" required>
                    </div>

                    <div class="col-md-6 col-12">
                        <label class="label" for="last_name" style="display: none; opacity: 0; font-size: 1px; position: absolute; color: transparent;">Last Name*</label>
                        <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text"  name="last_name" placeholder="Enter Last Name" required>
                    </div>
                </div>

                <h4 class="label">Date of Birth:</h4>

                <div class="row no-gutter form-group">
                    <div class="col-md-5 col-12">
                        <label for="birth_month"
                               style="visibility: hidden; position: absolute;">month</label>
                        <select name="birth_month" id="bday-month" type="text" class="form-control" >
                            <option value="" selected="">Month</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-12">
                        <label for="birth_day"
                               style="visibility: hidden; position: absolute;">Day</label>
                        <select name="birth_day" class="form-control" id="bday-day" >
                            <option value="" selected="">Day</option>
                        </select>
                    </div>
                    <div class="col-md-4  col-12">
                        <label for="birth_year"
                               style="visibility: hidden; position: absolute;">Year</label>
                        <select name="birth_year" id="bday-year" class="form-control" required >
                            <option value="" selected="">Year</option>
                            <script language="javascript">

                                var start = new Date().getFullYear() - 13;

                                for (var i = start; i >= 1921; i--) {
                                    document.write("<option value=\"" + i + "\">" + i + "</option>\n");
                                }
                            </script>
                        </select>
                    </div>
                    <div class="col-12 form-error-message "></div>
                </div>
                <button id="birth-next"  class="btn form-btn btn-next"  type="button" ><span class="btn-text">Continue</span></button>
            </div>

        </fieldset>


        <fieldset>

            <center>
                <h2 class="step-title"><span>STEP 4 of 4 : </span>life details</h2>
            </center>


            <div class="step-cont">

                <div class="form-group">

                    <label for="relationship_status" class="label"> Relationship Status:</label>

                    <select name="relationship_status" class="form-control " required id="relationship_status">

                        <option value="">Select Relationship Status</option>

                        <option value="Single">Single</option>

                        <option value="Relationship">In a Relationship</option>

                        <option value="Married">Happily Married</option>

                        <option value="Difficult">Difficult Marriage</option>

                        <option value="Divorced">Divorced</option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="employment_status" class="label"> Employment Status:</label>

                    <select name="employment_status" class="form-control " required id="employment_status">

                        <option value="">Select Employment Status</option>

                        <option value="HappilyEmployed">Happily Employed</option>

                        <option value="EmployedButNotHappy">Employed but Not Happy</option>

                        <option value="Unemployed">Unemployed</option>

                        <option value="BusinessOwner">Business Owner</option>

                        <option value="Retired">Retired</option>

                    </select>

                </div>

                <div class="form-group">

                    <label for="greatest_wish" class="label">Greatest Wish:</label>

                    <select name="greatest_wish" class="form-control " required id="greatest_wish">

                        <option value="">Select Your Wish</option>

                        <option value="Money">Money</option>

                        <option value="Love">Love</option>

                        <option value="Luck">Luck</option>

                        <option value="Work">Work </option>

                        <option value="Image">Image</option>

                    </select>

                </div>
                <button  class="btn form-btn btn-next" type="button" id="form_submit"><span class="btn-text">SEND MY HOROSCOPE</span></button>
            </div>
        </fieldset>

    </form>

</main>

@include('partials.astrology-footer')

<script type="text/javascript" src="{{ asset('js/formvalidate-astrology.js') }}"></script>

@include('partials.funnel_scripts', [$vertical => 'astrology', $page => 'main'])
<script>
    (function($){

        $(document).ready(function () {

            $('footer').fadeIn();
            $('form').validate(
                {
                    rules: {
                        name: "required",
                        email: {
                            required: true,
                            email: true,
                            emailfull: true,
                        },
                        first_name: {
                            required: true,
                            minLengthNoSpaces: 2,
                            notNumber: true,
                        },
                        last_name: {
                            required: true,
                            minLengthNoSpaces: 2,
                            notNumber: true,
                        },
                    },
                    messages: {
                        email: {
                            remote: "Please double check that you entered your email correctly."
                        }
                    }
                }

            );


            $.stepanimate = function(){
                currentStep = $('form fieldset:visible').data('step');
                const scrollTop = Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop)

                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    window.scrollTo(0, 0)
                } else {
                    $('html,body').animate({scrollTop: 0}, 500, function () {
                        $('html,body').clearQueue();
                    });
                }
                if (currentStep > 1){
                    $('.bg-obj object').fadeIn();

                }
            }

            $.createStars = function(){
                var starContainer = $(".planet");

                function createCircle() {
                    var r = Math.floor(6 * Math.random() + 1), o = Math.floor(1 * Math.random() + 1) + "px",
                        a = $("<i class='circle'></i>");
                    starContainer.append(a), a.css({
                        width: r,
                        height: r,
                        top: Math.floor(101 * Math.random() + 0) + "%",
                        left: Math.floor(101 * Math.random() + 0) + "%",
                        transform: "translateZ(0)",
                        filter: "blur(" + o + ")",
                        "-webkit-filter": "blur(" + o + ")",
                        "-moz-filter": "blur(" + o + ")",
                        "-o-filter": "blur(" + o + ")",
                        "-ms-filter": "blur(" + o + ")"
                    }), a.animate({opacity: 1}, 500, "linear");
                    var t = Math.floor(501 * Math.random() + 1e3);
                    setInterval(function () {
                        a.animate({opacity: 0}, t, "linear", function () {
                            $(this).animate({opacity: 1}, t, "linear")
                        })
                    }, Math.floor(501 * Math.random() + 500)), setInterval(function () {
                        var r, o, a = $(".circle").get().sort(function () {
                                return Math.round(Math.random()) - .5
                            }).slice(0, 1),
                            t = (r = $(window).height() - 50, [Math.floor(Math.random() * r), Math.floor(Math.random() * (o = $(window).width() - 50))]);
                        $(a).animate({top: t[0], left: t[1], opacity: 0}, 3e3)
                    }, 1e3)
                }

                for (var i = 0; i < 100; i++) createCircle();
            }

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

            $.handleHeight = function(){
                var hd = $('header').outerHeight(),
                    fd = $('footer').outerHeight(),
                    pl = $('.planet').outerHeight(),
                    xd = parseInt(window.innerHeight - hd),
                    plD =  parseInt(window.innerHeight - fd);

                $('main').attr('style','min-height:'+xd+'px;');
                $('.planet').css({"height":$('body').outerHeight(), "padding-top":xd});

            }
            $(window).on("resize", function(event){
                $.handleHeight();
            });


            var object = document.querySelector("object[type='image/svg+xml']"), objimg = document.querySelector("#obj-img"),
                radios = document.querySelectorAll("input[name='horoscope']");
            radios.forEach(function (t) {
                t.addEventListener("change", function () {
                    this.checked && (object.data = `img/s-${this.value}.svg`, objimg.src = `img/s-${this.value}.svg`, objimg.onerror = function () {
                        this.src = `img/s-${this.value}.png`
                    })
                })
            }), object.addEventListener("load", function () {
                var t = object.contentDocument.querySelectorAll(".st0");
                t.forEach(t => {
                    var e = t.getTotalLength();

                    function o(e, r) {
                        (r -= 5) < 0 && (r = 0), t.style.strokeDashoffset = r, r > 0 && setTimeout(function () {
                            o(e, r)
                        }, 100)
                    }

                    t.style.strokeDasharray = e, t.style.strokeDashoffset = e, o(t, e), window.setInterval(function () {
                        o(t, e)
                    }, 8e3)
                }), t.forEach(t => {
                    t.setAttribute("filter", "url(#blur2)")
                });
                var e = object.contentDocument.querySelectorAll(".st1"), o = 0;
                let r = .8, s = -.1;
                e.forEach(t => {
                    t.setAttribute("filter", "url(#blur)")
                }), !function t() {
                    r <= .4 ? s = .1 : r >= .8 && (s = -.1), r += s, setTimeout(t, 200)
                }(), !function t() {
                    o += 1, e.forEach(t => {
                        let e = t.getBBox(), s = e.x + e.width / 2, n = e.y + e.height / 2, {
                            left: c,
                            top: a,
                            x: i,
                            y: l,
                            width: u,
                            height: f
                        } = t.getBBox(), h = -(i + u / 2) * (r - 1), $ = -(l + f / 2) * (r - 1);
                        t.setAttribute("transform", `rotate(${o} ${s} ${n}) translate(${h} ${$}) scale(${r}) `)
                    }), setTimeout(() => {
                        requestAnimationFrame(t)
                    }, 20)
                }()
            });

            var token = $.makeid(6);
            var totalStep = $('form fieldset').length;
            var s = 1;
            $('form fieldset').each(function () {
                $(this).attr('data-step', s++);
            });
            var currentStep = $('fieldset:visible').attr('data-step');


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

            $('#email').on('input', function() {
                if ($("#email-custom-error").is(":visible"))
                {
                    $("#email-custom-error").hide();
                }
            });

            function goNext(el) {
                var next_step = true;
                var parent_fieldset = el.parents('fieldset').last();

                var result = $("form").valid();

                if (!result) {
                    next_step = false;
                }

                if (next_step) {
                    $('form').submit();

                    var currentStep = $('fieldset:visible').attr('data-step');

                    if(currentStep == $('#emailContainer').data('step')) {
                        (async function () {
                            var emailValid = await emailIsValid();
                            if (emailValid === false) {
                                return;
                            } else {
                                if (parent_fieldset.data('step') < totalStep) {
                                    parent_fieldset.fadeOut( function() {
                                        $(this).next().fadeIn(function() {
                                            $(this).find('input,select').first().focus();
                                        });
                                        $.stepanimate();
                                    });
                                }
                            }
                        })()
                    }else{
                        if (parent_fieldset.data('step') < totalStep) {
                            parent_fieldset.fadeOut( function() {
                                $(this).next().fadeIn(function() {
                                    $(this).find('input,select').first().focus();
                                });
                                $.stepanimate();
                            });
                        }
                    }
                }
            }

            $(document).on('click', ".radio-next input[type=radio], .btn-next", function () {
                goNext($(this));
            });

            $("input[name='horoscope']").click(function() {
                var selected_horoscope = $(this).val();
                var months = {
                    "aries": ["March", "April"],
                    "taurus": ["April", "May"],
                    "gemini": ["May", "June"],
                    "cancer": ["June", "July"],
                    "leo": ["July", "August"],
                    "virgo": ["August", "September"],
                    "libra": ["September", "October"],
                    "scorpio": ["October", "November"],
                    "sagittarius": ["November", "December"],
                    "capricorn": ["December", "January"],
                    "aquarius": ["January", "February"],
                    "pisces": ["February", "March"],
                };
                var days = {
                    "aries": [1,31],
                    "taurus": [1,31],
                    "gemini": [1,31],
                    "cancer": [1,31],
                    "leo": [1,31],
                    "virgo":  [1,31],
                    "libra":  [1,31],
                    "scorpio":  [1,31],
                    "sagittarius":  [1,31],
                    "capricorn":  [1,31],
                    "aquarius":  [1,31],
                    "pisces":  [1,31],
                };
                var month_options = "";
                var day_options = "";
                for (var i = 0; i < months[selected_horoscope].length; i++) {
                    month_options += "<option>" + months[selected_horoscope][i] + "</option>";
                }
                $("#bday-month").html(month_options);
                for (var i = days[selected_horoscope][0]; i <= days[selected_horoscope][1]; i++) {
                    day_options += "<option>" + i + "</option>";
                }
                $("#bday-day").html(day_options);
            });


            $('form').submit(function (e) {
                var form = this;
                e.preventDefault();

                var currentStep = $('fieldset:visible').attr('data-step');

                // prepare form for lead post

                var formdata = $(form).serializeArray().reduce(function (m, o) {
                    m[o.name] = o.value;
                    return m;
                }, {});

                formdata['email_address'] = $('#email').val();
                formdata['ef_tx_id'] = $('#ef_tx_id').val();
                formdata['lead'] = "true";
                formdata['vertical'] = "astrology";
                formdata['token'] = token;

                formdata['currentStep'] = currentStep;
                formdata['totalSteps'] = totalStep;
                formdata['getParams'] = getUrlVars();
                formdata['url'] = window.location.href;

                window.formdata = formdata;

                $.ajax({
                    type: 'POST',
                    url: '<?php echo (env("WINTERBOT_LEAD_SUBMIT_URL")); ?>/ingest.php',
                    data: formdata,
                    //async: false,
                    dataType: "text",
                    success: function (data) {
                        var result = JSON.parse(data);

                        if(result.result === true && (currentStep == totalStep)){

                            var ebook = window.formdata['ebook'];
                            if(ebook === true || ebook === 1  || ebook === "1" ) {
                                var append = "&ebook=1";
                            } else {
                                var append = "";
                            }

                            location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                        }
                    }, error: function(data) {
                        alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                    }
                });
            });

            $("#ebook").val(getUrlParameter('ebook'));

            //Submit on page load
            $('form').submit();

            $.handleHeight();
            $.createStars();
            // $.dotFollow();
        })
    })(jQuery);

</script>

</body>

</html>
