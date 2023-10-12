<?php
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == "roofing.foreverhomehub.local"){
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "https://winterbot.app";
    $leadBackupUrl = $submitUrl;

} else {
    $leadProsperUrl = "https://api.leadprosper.io/ingest";
    $submitUrl = "https://winterbot.app";
    $leadBackupUrl = "https://lb.winterbot.app";
}
if(!isset($_GET['ef_aff_id'])){
    if(!isset($_GET['ef_tx_id'])){
        header("Location: https://foreverhomehub.com", true, 302);
        exit;
    }
}
session_start();
?>
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

    <!-- Init Rollbar -->
    <script>
        var _rollbarConfig = {
            accessToken: 'd6740180e2514acb89bc08cbdfc7b0ff',
            captureUncaught: true,
            captureUnhandledRejections: true,
            payload: {
                environment: 'production',
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

    <!-- End Rollbar -->

    <!--             Start TrustedForm-->
    <script>
        (function() {
            var tf = document.createElement('script');
            tf.type = 'text/javascript'; tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&identifier=token&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>

    <!--             End TrustedForm-->

    <script id="LeadiDscript" type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/afa16655-8fdd-dcd2-3e5a-3ca33da472df.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img src='//create.leadid.com/noscript.gif?lac=5CA41630-FEE8-F07B-6C06-80DBD7D64283&lck=afa16655-8fdd-dcd2-3e5a-3ca33da472df&snippet_version=2' /></noscript>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-4.0.0-tubs-f1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lp3-tubs-f1.css') }}" rel="stylesheet">

    <link href="{{ asset('css/footer-tubs-f1.css') }}" rel="stylesheet">
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
                        <input type="hidden" id="city" name="city" value="">
                        <input type="hidden" id="state" name="state" value="">
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
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0-tubs-f1.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>

    (function(){

        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
        if (isAndroid) {
            $('select.form-control').removeClass('form-control').css({'width': '100%', 'height': '50px'})
        }


        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);


        function isStrictMode(){
            return !this;
        }
        /*
           returns false, since 'this' refers to global object and
           '!this' becomes false
        */
        function isStrictMode(){
            "use strict";
            return !this;
        }

        /* min height zip*/
        function mincont() {
            var hd = $('header').outerHeight(),
                fd = $('footer').outerHeight(),
                xd = parseInt(window.innerHeight - (hd + fd));

            $('main').attr('style','min-height:'+xd+'px;');
        }



        $(document).ready(function() {

            var f = 1;
            $('form fieldset').each(function(){
                $(this).attr('data-step',f++);
            });


            mincont();
            var fieldset = $("form fieldset");
            var totalStep = fieldset.length;
            var current_step = 0;

            var resultPhone = false;
            var resultEmail = false;
            var zip_inclick = false;

            var zip_container = true;

            function is_int(value) {
                return parseFloat(value) === parseInt(value) && !isNaN(value);
            }

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
                var el = $("[name='zip_code']");

                $('#btn-zip .btn-text').text('Please Wait');

                setTimeout(function() {
                    // check if zip is valid
                    if (el.val().length === 5 && is_int(el.val()) && !zip_inclick) {
                        zip_inclick = true;

                        $.getJSON("https://zip.getziptastic.com/v2/US/" + el.val())
                            .done(function (result) {
                                $("#zip_code").val(result.postal_code).addClass('valid');
                                $("[name='city']").val(result.city).addClass('valid');
                                $("[name='state']").val(result.state_short).addClass('valid');

                                zip_inclick = false;
                                $(".zip_error").hide();

                                el.parents("fieldset").fadeOut(function () {
                                    $(".headline").hide("blind");
                                    $(this)
                                        .next()
                                        .fadeIn(function () {
                                            $(this).find("input,select").first().focus();
                                            current_step = fieldset.index($(this));
                                            zip_container = false;
                                            stepanimate();
                                        });
                                });
                            })
                            .fail(function () {
                                zipValidationError()
                            })
                            .always(function () {
                                $('#btn-zip .btn-text').text('Get Started');
                                zip_inclick = false;
                            });

                    } else if (el.val().length < 5) {
                        zipValidationError()
                    }

                    function zipValidationError() {
                        $(".zip_error").text("Please enter a valid zip code. (i.e. 90210)").fadeIn().css("display", "inline-block").css("color", "red");
                        $('#btn-zip .btn-text').text('Get Started');
                        $(".zip_box").addClass('fail')
                    }

                });
            });

            /* next step*/
            $(".radio-next input[type=radio],.btn-next").bind("click",function () {
                if(!zip_container){

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
                                    }
                                })()
                            }
                        }

                    }
                }
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

            function validateEmail(email, returnFullResponse = false) {

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


            function validatePhone(phone, returnFullResponse = false) {

                var phpData = (function get_php_data() {
                    var php_data;

                    $.ajax({
                        type: "POST",
                        url: "<?php echo $submitUrl;?>/validatePhone.php",
                        data: {"phone":phone},
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

            $.getJSON("https://api.ipify.org?format=json", function(data) {
                $('#ip_address').val(data.ip);
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

            $.height = function () {
                var hd = $('header').outerHeight();
                var xd = parseInt(window.innerHeight - hd);

                $('main').animate({
                    'min-height': xd + 'px'
                }, 500);
            }


            //mask phone (000)-000-000000
            var phoneSelector = $('input[name="phone"]');



            var maskOptions = {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['(000) 000-0000'];
                    var mask =  masks[0];
                    $('input[name="phone"]').mask(mask, options);
                },
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optional: true
                    }
                }
            };

            $('input[type=radio][name=project_reason_radio]').click(function(){
                $('#project_reason').val($(this).val());
            });

            $('input[type=radio][name=time_frame_radio]').click(function(){
                $('#time_frame').val($(this).val());
            });

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

            // Form submit

            function fillFormDataTubs() {
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
                formData['lp_campaign_id'] = "18372";
                formData['lp_supplier_id'] = "41113";
                formData['lp_key'] = "x2yzfldq0srz17";
                if($('#email').val() === 'test@test.com' ){
                    formData['lp_action'] = "test";
                }
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['landing_page_url'] = window.location.href;
                formData['time_frame'] = $('#time_frame').val();
                formData['project_reason'] = $('#project_reason').val();
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
                formData['healthchecks_slug'] = 'tubs-o7';
                formData['token'] = token;

                return formData;
            }

            $('form').submit(function (e) {
                var form = this;
                e.preventDefault();

                if (!$(form).validate().form())
                    return;
                // $('#form_submit').prop('disabled', true);

                if($("#email").val() === "pingdom@test.com"){
                    // prepare form for lead post
                    var formdata = $(form).serializeArray().reduce(function (m, o) {
                        m[o.name] = o.value;
                        return m;
                    }, {});

                    const searchParams = new URLSearchParams(window.location.search);
                    searchParams.forEach((value, key) => {
                        if (formdata[key] === undefined)
                            formdata[key] = value;
                    });

                    formdata = Object.keys(formdata).reduce((acc, k) => (!formdata[k] && k != 'test' && delete acc[k], acc), formdata);

                    // prepare form for lead post

                    formdata['email_address'] = $('#email').val();
                    formdata['lead'] = "true";
                    formdata['vertical'] = "tubs";
                    formdata['token'] = token;
                    formdata['currentStep'] = current_step;
                    formdata['totalSteps'] = totalStep;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'tubs-o7';

                    window.formdata = formdata;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $submitUrl?>',
                        data: formdata,
                        //async: false,
                        dataType: "text",
                        success: function (data) {
                            var result = JSON.parse(data);
                            if(result.complete){
                                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=tubs");
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                            }
                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formdata);
                }else{

                    var formData = fillFormDataTubs();
                    window.formdata = formData;

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $leadProsperUrl?>',
                        data: formData,
                        // async: false,
                        dataType: "text",
                        success: function (data) {
                            var result = JSON.parse(data);
                            if(result.status !== 'ACCEPTED') {
                                Rollbar.error('LeadProsper - Lead submission FAILED for' + ' email : [ ' + $('#email').val() +' ]' + ' REASON: ' + result.message);
                            }
                            setTimeout(function() {
                                window.location.replace("/thank-you?ef_aff_id="+getUrlParameter('ef_aff_id')+"&ef_tx_id="+getUrlParameter('ef_tx_id')+"&s1="+getUrlParameter('s1')+"&s2="+getUrlParameter('s2')+"&s3="+getUrlParameter('s3')+"&s4="+getUrlParameter('s4')+"&s5="+getUrlParameter('s5')+"&v=tubs"+"&ef_offer_id="+getUrlParameter('ef_offer_id'));
                            }, 500);
                            // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formData);

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

    })();


</script>
<script>

    //add support for foreach on NodeList
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = Array.prototype.forEach;
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


    function is_int(value) {
        if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
            return true;
        } else {
            return false;
        }
    }

    jQuery.validator.addMethod("emailfull", function (value, element) {
        return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
    }, "Please enter valid email address!");

    jQuery.validator.addMethod("boolean", function (value, element) {
        if(value == 1 || value == 0) return true;
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

    jQuery.validator.addMethod("hasNumber", function (value, element) {
        return value.match(".*\\d.*");
    }, "Your address must include the house/unit number.");

    jQuery.validator.addMethod("hasLettersAndSpaces", function (value, element) {
        return value.match(/[a-zA-Z]/) && value.trim().match(/\s/);
    }, "Your address must include letters and spaces.");

    jQuery.validator.addMethod("notNumber", function (value, element) {
        return !value.match(".*\\d.*");
    }, "Number not permitted.");

    jQuery.validator.addMethod("state", function (value, element) {
        var states = "|AL|AK|AS|AZ|AR|CA|CO|CT|DE|DC|FM|FL|GA|GU|HI|ID|IL|IN|IA|KS|KY|LA|ME|MH|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|MP|OH|OK|OR|PW|PA|PR|RI|SC|SD|TN|TX|UT|VT|VI|VA|WA|WV|WI|WY|";
        return (value.length == 2 && states.indexOf(value) !== -1)
    }, "Please enter two letter state name.");

    jQuery.validator.addMethod("phone", function (value, element) {
        var phone_selector = $('input[name="phone"]');
        if (phone_selector.mask !== undefined) {
            var phone_value_clean = phone_selector.cleanVal();
        }
        else {
            var phone_value_clean = phone_selector.val();
        }
        if(phone_value_clean.length < 10) {
            return false
        }
        if(phone_value_clean.length == 11 && phone_value_clean.charAt(0) != '1') {
            return false;
        }
        return true;

    }, "Please enter a valid phone!");


    $(document).ready(function(){
        $('#tcpa_text').val($('#leadid_tcpa_disclosure').parent().text());


        //disable copy/paste
        $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
            e.preventDefault();
        });

    });

</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWGUjDoetHonsX_8REioiFxYojrnomGIs&libraries=places"></script>
<script src="{{ asset('js/jquery.geocomplete.min.js') }}"></script>
<script>
    var invalid_city_state = false;
    if(typeof window.google !== 'undefined' && typeof window.google.maps !== 'undefined') {
        $("#address").geocomplete({
            formId: "#msform",
            componentRestrictions: {
                country: ['us']
            },
            types: ['address'],
            fields: ['address_components'],
            onChange: function (name, result) {
                var searchAddressComponents = result.address_components;
                $.each(searchAddressComponents, function () {
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
                });
                $('#add-change').show();
                $('.address_loc').slideDown();
                $('#adddetails-change').hide();
                $("input[name='address']").valid();

                //Autocomplete if house number is invalid
                var originalAddress = $("input[name='address']").val();
                var matches = originalAddress.match(/(\d+)/);
                setTimeout(function () {
                    function hasNumbers(t)
                    {
                        var regex = /\d/g;
                        return regex.test(t);
                    }
                    var updatedAddress = $("input[name='address']").val();
                    if(!hasNumbers(updatedAddress) && hasNumbers(originalAddress) && matches) {
                        $("input[name='address']").val(matches[0] + " " + updatedAddress);
                    }
                    $("input[name='address']").valid();
                }, 100);
            }
        });
    }

    $(".change-address").bind("click", function () {
        $(this).parents('.address_change').fadeOut(function () {
            $(this).next().fadeIn(
                function () {
                    $(this).find('input,select').first().focus();
                });
        });
        return false;
    });
</script>
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
                    phone: true
                },
                address: {
                    hasLettersAndSpaces:true,
                    required: true,
                    hasNumber: true,
                    minLengthNoSpaces: 5
                },
            },

            messages: {
                zip_code: 'Please enter valid US zip code.',
                email: {
                    required: 'Please enter your email address!',
                },
                first_name: "Don't forget to tell us your name.",
                last_name: "Don't forget to tell us your last name.",
                address: {
                    required: 'Please enter your address.',
                    hasNumber:  'Your address must include the house/unit number. ',
                    minLengthNoSpaces: 'Your address is too short'
                },
                phone: 'Please enter a valid phone number'
            },

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

</script></body></html>

<?php

if(isset($_GET['ef_tx_id'])){
    if(!isset($_GET['ef_aff_id']) && !isset($_GET['ef_offer_id'])){
        echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ]! MISSING [ef_offer_id] AND [ef_aff_id]');</script>";
    }else{
        if(!isset($_GET['ef_aff_id']) && isset($_GET['ef_offer_id'])){
            echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and offer ID [ '+ getUrlParameter('ef_offer_id') +' ]! MISSING [ef_aff_id]');</script>";
        }else{
            if(!isset($_GET['ef_offer_id']) && isset($_GET['ef_aff_id'])){
                echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/roofing/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and affiliate ID [ '+ getUrlParameter('ef_aff_id') +' ]! MISSING [ef_offer_id]');</script>";
            }
        }
    }
}
?>
