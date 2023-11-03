<?php
include(resource_path('views/partials/funnel_submission_params.blade.php'));
if(isset($_GET['ebook']) && $_GET['ebook'] == true){
    $ebookMessage = "<br><br>After signing up, you will be able to download your free ebook!";
}
session_start();
?>

    <!doctype html>
<html>
<head>
    <script>
        var _rollbarConfig = {
            accessToken: '77773f77ec2d4c4ea894d1a8e419dbeb',
            captureUncaught: true,
            captureUnhandledRejections: true,
            payload: {
                environment: 'prod',
                // context: 'rollbar/test'
                client: {
                    javascript: {
                        code_version: '1.0',
                        // source_map_enabled: true,
                        // guess_uncaught_frames: true
                    }
                }
            }
        };
        // Rollbar Snippet
        !function(r){var e={};function o(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return r[n].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=r,o.c=e,o.d=function(r,e,n){o.o(r,e)||Object.defineProperty(r,e,{enumerable:!0,get:n})},o.r=function(r){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(r,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(r,"__esModule",{value:!0})},o.t=function(r,e){if(1&e&&(r=o(r)),8&e)return r;if(4&e&&"object"==typeof r&&r&&r.__esModule)return r;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:r}),2&e&&"string"!=typeof r)for(var t in r)o.d(n,t,function(e){return r[e]}.bind(null,t));return n},o.n=function(r){var e=r&&r.__esModule?function(){return r.default}:function(){return r};return o.d(e,"a",e),e},o.o=function(r,e){return Object.prototype.hasOwnProperty.call(r,e)},o.p="",o(o.s=0)}([function(r,e,o){"use strict";var n=o(1),t=o(5);_rollbarConfig=_rollbarConfig||{},_rollbarConfig.rollbarJsUrl=_rollbarConfig.rollbarJsUrl||"https://cdn.rollbar.com/rollbarjs/refs/tags/v2.26.0/rollbar.min.js",_rollbarConfig.async=void 0===_rollbarConfig.async||_rollbarConfig.async;var a=n.setupShim(window,_rollbarConfig),l=t(_rollbarConfig);window.rollbar=n.Rollbar,a.loadFull(window,document,!_rollbarConfig.async,_rollbarConfig,l)},function(r,e,o){"use strict";var n=o(2),t=o(3);function a(r){return function(){try{return r.apply(this,arguments)}catch(r){try{console.error("[Rollbar]: Internal error",r)}catch(r){}}}}var l=0;function i(r,e){this.options=r,this._rollbarOldOnError=null;var o=l++;this.shimId=function(){return o},"undefined"!=typeof window&&window._rollbarShims&&(window._rollbarShims[o]={handler:e,messages:[]})}var s=o(4),d=function(r,e){return new i(r,e)},c=function(r){return new s(d,r)};function u(r){return a((function(){var e=this,o=Array.prototype.slice.call(arguments,0),n={shim:e,method:r,args:o,ts:new Date};window._rollbarShims[this.shimId()].messages.push(n)}))}i.prototype.loadFull=function(r,e,o,n,t){var l=!1,i=e.createElement("script"),s=e.getElementsByTagName("script")[0],d=s.parentNode;i.crossOrigin="",i.src=n.rollbarJsUrl,o||(i.async=!0),i.onload=i.onreadystatechange=a((function(){if(!(l||this.readyState&&"loaded"!==this.readyState&&"complete"!==this.readyState)){i.onload=i.onreadystatechange=null;try{d.removeChild(i)}catch(r){}l=!0,function(){var e;if(void 0===r._rollbarDidLoad){e=new Error("rollbar.js did not load");for(var o,n,a,l,i=0;o=r._rollbarShims[i++];)for(o=o.messages||[];n=o.shift();)for(a=n.args||[],i=0;i<a.length;++i)if("function"==typeof(l=a[i])){l(e);break}}"function"==typeof t&&t(e)}()}})),d.insertBefore(i,s)},i.prototype.wrap=function(r,e,o){try{var n;if(n="function"==typeof e?e:function(){return e||{}},"function"!=typeof r)return r;if(r._isWrap)return r;if(!r._rollbar_wrapped&&(r._rollbar_wrapped=function(){o&&"function"==typeof o&&o.apply(this,arguments);try{return r.apply(this,arguments)}catch(o){var e=o;throw e&&("string"==typeof e&&(e=new String(e)),e._rollbarContext=n()||{},e._rollbarContext._wrappedSource=r.toString(),window._rollbarWrappedError=e),e}},r._rollbar_wrapped._isWrap=!0,r.hasOwnProperty))for(var t in r)r.hasOwnProperty(t)&&(r._rollbar_wrapped[t]=r[t]);return r._rollbar_wrapped}catch(e){return r}};for(var p="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","),f=0;f<p.length;++f)i.prototype[p[f]]=u(p[f]);r.exports={setupShim:function(r,e){if(r){var o=e.globalAlias||"Rollbar";if("object"==typeof r[o])return r[o];r._rollbarShims={},r._rollbarWrappedError=null;var l=new c(e);return a((function(){e.captureUncaught&&(l._rollbarOldOnError=r.onerror,n.captureUncaughtExceptions(r,l,!0),e.wrapGlobalEventHandlers&&t(r,l,!0)),e.captureUnhandledRejections&&n.captureUnhandledRejections(r,l,!0);var a=e.autoInstrument;return!1!==e.enabled&&(void 0===a||!0===a||"object"==typeof a&&a.network)&&r.addEventListener&&(r.addEventListener("load",l.captureLoad.bind(l)),r.addEventListener("DOMContentLoaded",l.captureDomContentLoaded.bind(l))),r[o]=l,l}))()}},Rollbar:c}},function(r,e,o){"use strict";function n(r,e,o,n){r._rollbarWrappedError&&(n[4]||(n[4]=r._rollbarWrappedError),n[5]||(n[5]=r._rollbarWrappedError._rollbarContext),r._rollbarWrappedError=null);var t=e.handleUncaughtException.apply(e,n);o&&o.apply(r,n),"anonymous"===t&&(e.anonymousErrorsPending+=1)}r.exports={captureUncaughtExceptions:function(r,e,o){if(r){var t;if("function"==typeof e._rollbarOldOnError)t=e._rollbarOldOnError;else if(r.onerror){for(t=r.onerror;t._rollbarOldOnError;)t=t._rollbarOldOnError;e._rollbarOldOnError=t}e.handleAnonymousErrors();var a=function(){var o=Array.prototype.slice.call(arguments,0);n(r,e,t,o)};o&&(a._rollbarOldOnError=t),r.onerror=a}},captureUnhandledRejections:function(r,e,o){if(r){"function"==typeof r._rollbarURH&&r._rollbarURH.belongsToShim&&r.removeEventListener("unhandledrejection",r._rollbarURH);var n=function(r){var o,n,t;try{o=r.reason}catch(r){o=void 0}try{n=r.promise}catch(r){n="[unhandledrejection] error getting `promise` from event"}try{t=r.detail,!o&&t&&(o=t.reason,n=t.promise)}catch(r){}o||(o="[unhandledrejection] error getting `reason` from event"),e&&e.handleUnhandledRejection&&e.handleUnhandledRejection(o,n)};n.belongsToShim=o,r._rollbarURH=n,r.addEventListener("unhandledrejection",n)}}}},function(r,e,o){"use strict";function n(r,e,o){if(e.hasOwnProperty&&e.hasOwnProperty("addEventListener")){for(var n=e.addEventListener;n._rollbarOldAdd&&n.belongsToShim;)n=n._rollbarOldAdd;var t=function(e,o,t){n.call(this,e,r.wrap(o),t)};t._rollbarOldAdd=n,t.belongsToShim=o,e.addEventListener=t;for(var a=e.removeEventListener;a._rollbarOldRemove&&a.belongsToShim;)a=a._rollbarOldRemove;var l=function(r,e,o){a.call(this,r,e&&e._rollbar_wrapped||e,o)};l._rollbarOldRemove=a,l.belongsToShim=o,e.removeEventListener=l}}r.exports=function(r,e,o){if(r){var t,a,l="EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");for(t=0;t<l.length;++t)r[a=l[t]]&&r[a].prototype&&n(e,r[a].prototype,o)}}},function(r,e,o){"use strict";function n(r,e){this.impl=r(e,this),this.options=e,function(r){for(var e=function(r){return function(){var e=Array.prototype.slice.call(arguments,0);if(this.impl[r])return this.impl[r].apply(this.impl,e)}},o="log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","),n=0;n<o.length;n++)r[o[n]]=e(o[n])}(n.prototype)}n.prototype._swapAndProcessMessages=function(r,e){var o,n,t;for(this.impl=r(this.options);o=e.shift();)n=o.method,t=o.args,this[n]&&"function"==typeof this[n]&&("captureDomContentLoaded"===n||"captureLoad"===n?this[n].apply(this,[t[0],o.ts]):this[n].apply(this,t));return this},r.exports=n},function(r,e,o){"use strict";r.exports=function(r){return function(e){if(!e&&!window._rollbarInitialized){for(var o,n,t=(r=r||{}).globalAlias||"Rollbar",a=window.rollbar,l=function(r){return new a(r)},i=0;o=window._rollbarShims[i++];)n||(n=o.handler),o.handler._swapAndProcessMessages(l,o.messages);window[t]=n,window._rollbarInitialized=!0}}}}]);
        // End Rollbar Snippet
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <!--[if lte IE 8]>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <![endif]-->

    <!--<script>window.jQuery || document.write('<script src="./js/jquery-3.6.0.min.js"><\/script>')</script> -->

    <script src="{{ asset('js/jquery/jquery-3.6.0.min-astrology.js') }}"></script>

    <!--    LeadPost-->
    <meta name='referrer' content='no-referrer-when-downgrade'>
    <img src='https://rdcdn.com/rt?aid=21578&e=1&img=1' height='1' width='1' />

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '940096140734669');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=940096140734669&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- validation block start !-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7YJX2FVDMZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-7YJX2FVDMZ');
    </script>

    <script type="text/javascript">var poptinAfterPageLoad = true;</script>
    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=064a7309bc204' async='true'></script>

    @include('partials.trusted_form')
    @include('partials.lead_id')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>Astrology Spark</title>
    <meta name="description" content="Discover the power of astrology with AstrologySpark. Get free, personalized, and accurate predictions to transform your life. Sign up now for horoscopes that go beyond generic readings and start your journey today!"/>
    <meta name="author" content="AstrologySpark">
    <meta name="keywords" content="astrology, predictions, personalized, accurate, horoscopes, free, journey, transform, life, beyond generic readings "/>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon-astrology.png') }}">

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

    <form method="post" action="<?php echo $submitUrl;?>" id="horoscopeform" class="container" >
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
                            <img src="{{ asset('img/hd-cancer.png') }}">
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


        <fieldset>

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
                    <div class="col-12 form-error-message "></div>
                </div>

                <button  class="btn form-btn btn-next" type="button" ><span class="btn-text">Continue</span></button>
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
                <button  class="btn form-btn btn-next"  type="button" ><span class="btn-text">Continue</span></button>
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
                <button  class="btn form-btn"  type="submit"><span class="btn-text">SEND MY HOROSCOPE</span></button>
            </div>
        </fieldset>

    </form>

</main>
<footer style="display:none;">

    <div class="container">
        <ul class="justify-content-center d-flex">
            <li><a href="https://astrologyspark.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="https://astrologyspark.com/terms-and-conditions/">Terms & Conditions</a></li>
            <li><a href="https://astrologyspark.com/contact-us/">Contact</a></li>
            <li><a href="https://astrologyspark.com/email-preferences/">Email Preferences</a></li>
            <li><a href="https://astrologyspark.com/please-do-not-sell-my-personal-information/">Do Not Sell My Personal Information</a></li>
        </ul>

        <p class="copy">
            *DISCLAIMER: The information provided on astrologyspark.com, and in any reports, emails, ebooks, or other materials you might receive from astrologyspark.com, is for entertainment purposes only. Obviously, we cannot guarantee the accuracy of astrological information, and we are not responsible for how you interpret or apply it. The names and images of our astrologers have been changed to prevent instances of stalking or harassment. If you are struggling with serious problems, including chronic illness, mental instability, or legal issues, please consult with your local registered health care or legal professional as soon as possible. By signing up, you agree to receive emails and communications from us. You can unsubscribe at any time. Please also carefully read the full <a href="https://astrologyspark.com/terms-and-conditions/">Terms of Service</a>.
        </p>

    </div>

    <div class="copyright">

        <div class="container text-center copytext">
            <script>var currentYear = new Date().getFullYear();</script>

            Copyright © <script>document.write(currentYear)</script> <a href="https://astrologyspark.com" class="sitelink">AstrologySpark</a>. All Rights Reserved.

        </div>
    </div>
    <!--            <script type="text/javascript">-->
    <!--                (function(document, window){-->
    <!--                    var script = document.createElement("script");-->
    <!--                    script.type = "text/javascript";-->
    <!--                    script.src = "https://api.pushnami.com/scripts/v1/pushnami-adv/6410a86e28e95a001393e237";-->
    <!--                    script.onload = function() {-->
    <!--                        Pushnami-->
    <!--                            .update()-->
    <!--                            .prompt();-->
    <!--                    };-->
    <!--                    document.getElementsByTagName("head")[0].appendChild(script);-->
    <!--                })(document, window);-->
    <!--            </script>-->


</footer>

<script type="text/javascript" src="{{ asset('js/formvalidate-astrology.js') }}"></script>

<!--<script type="text/javascript" src="./js/home.js"></script>-->
<!--<script type="text/javascript" src="./js/jquery.blockUI.js"></script>-->
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


    (function($){

        function isStrictMode(){
            return !this;
        }

        function isStrictMode(){
            "use strict";
            return !this;
        }


        $(document).ready(function () {

            $('footer').fadeIn();
            $('form').validate(
                {
                    rules: {
                        // simple rule, converted to {required:true}
                        name: "required",
                        // compound rule
                        email: {
                            required: true,
                            email: true,
                            emailfull: true,
                        },
                        first_name: {
                            required: true,
                            minLengthNoSpaces: 2,
                            notNumber: true,
                            // noSpace: true,
                        },
                        last_name: {
                            required: true,
                            minLengthNoSpaces: 2,
                            notNumber: true,
                            // noSpace: true,
                        },
                    },
                    messages: {
                        email: {
                            remote: "Please double check that you entered your email correctly."
                        }
                    }
                }

            );

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

            $.validateEmail = function validateEmail(email, returnFullResponse = false) {

                var phpData = (function get_php_data() {
                    var php_data;
                    var ip_address = $("#ip_address").val();

                    $.ajax({
                        type: "POST",
                        url: "<?php echo $submitUrl;?>/validateEmail.php",
                        data: {"email":email,"ip_address":ip_address},
                        async: false,
                        dataType: 'json',
                        timeout: 3000,
                        success: function (json) {
                            php_data = json;
                        },
                        fail: function () {
                            php_data.valid = true;
                            console.log("Failed to get response to validate");
                        },
                    });
                    return php_data;
                })();

                if(returnFullResponse === true){
                    return phpData;
                } else {
                    if(phpData.valid===true){
                        return true;
                    } else {
                        return false;
                    }
                }
            }

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

            $("#email").enterKey(function () {
                goNext($(this));
            })

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
            function validateFields(){
                var result = $("form").valid();

                if(result == true){

                    $("#email").removeClass(".form-control .error")
                    $("#email-custom-error").fadeOut('fast');

                    var currentStep = $('fieldset:visible').attr('data-step');

                    if(currentStep == 2 && window.dontRemoteValidateEmail == false) {
                        console.log("validating email...");
                        let email = $("#email").val();
                        var emailResult = $.validateEmail(email, true);
                        // console.log(emailResult);

                        if(emailResult == null){
                            result = true;
                        }else if(emailResult.valid !== true){

                            $("#email").addClass(" .form-control .error")

                            if(emailResult !== null && emailResult.possible_email_correction !== ""){
                                var message = 'The email does not appear to be valid. Did you mean <a href="#" id="possible-email-correction">' + emailResult.possible_email_correction + '</a>?'
                            } else {
                                message = "Please provide a valid email address to proceed."
                            }

                            $("#email-custom-error").html(message);
                            $("#email-custom-error").fadeIn('fast');
                            $("#email").addClass(" shake").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
                                $(this).removeClass("shake ");
                            });
                            result = false;
                        }
                    }
                }

                return result;
            }

            function goNext(el) {
                var next_step = true;
                var parent_fieldset = el.parents('fieldset').last();
                // var result = $("form").valid() && $("form").valid();
                var result = validateFields();

                if (!result) {
                    next_step = false;
                    parent_fieldset.find('.form-control.error').first().focus();
                }

                if (next_step) {
                    $('form').submit();
                    if (parent_fieldset.data('step') < totalStep) {
                        parent_fieldset.fadeOut( function() {
                            $(this).next().fadeIn(function() {
                                // $.mainH();$.createStars();
                                $(this).find('input,select').first().focus();
                            });
                            $.stepanimate();
                        });
                    }
                }

                parent_fieldset.find('.form-control.error').each(function() {
                    $(this).addClass(" shake").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
                        $(this).removeClass("shake ");
                    });
                });
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
                // $(document).ajaxStop($.unblockUI);

                // if (!$('form').valid())
                //     return;

                var currentStep = $('fieldset:visible').attr('data-step');

                // prepare form for lead post

                var formdata = $(form).serializeArray().reduce(function (m, o) {
                    m[o.name] = o.value;
                    return m;
                }, {});

                formdata['email_address'] = $('#email').val();
                formdata['lead'] = "true";
                formdata['vertical'] = "astrology";
                formdata['token'] = token;

                // console.log(currentStep);
                formdata['currentStep'] = currentStep;
                formdata['totalSteps'] = totalStep;
                formdata['getParams'] = getUrlVars();
                formdata['url'] = window.location.href;

                window.formdata = formdata;

                $.ajax({
                    type: 'POST',
                    url: '<?php echo $submitUrl?>',
                    data: formdata,
                    // async: false,
                    dataType: "text",
                    success: function (data) {
                        var result = JSON.parse(data);

                        if(result.complete == true){

                            var ebook = window.formdata['ebook'];
                            if(ebook === true || ebook === 1  || ebook === "1" ) {
                                var append = "&ebook=1";
                            } else {
                                var append = "";
                            }

                            location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                        }
                    }, error: function(data) {
                        // console.log(data);
                        alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                    }
                });

                stl(formdata);

                // console.log(ajaxdata);
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




            // $.getJSON('https://api.ipify.org?format=json', function(data){
            //     $("#ip_address").val(data.ip);
            // });

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
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
