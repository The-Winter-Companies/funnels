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
if(empty($_GET['ef_aff_id'])){
    if(empty($_GET['ef_tx_id'])){
        header("Location: https://foreverhomehub.com", true, 302);
        exit;
    }
}
session_start();
?>
    <!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <title>Solar - ForeverHomeHub</title>
    <meta name="description" content="Lower your electric bill up to 80%">
    <meta name="author" content>
    <meta name="keywords" content>
    <meta itemprop="description" content="Lower your electric bill up to 80%">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Lower your electric bill up to 80%">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Lower your electric bill up to 80%">

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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-4.0.0-solar-F1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-U4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/v3z-solar-F1.css') }}" rel="stylesheet">
    <style>
        button[disabled] {
            opacity:0.7;
        }
        input.error, select.error {
            border: 1px solid red;
        }
    </style>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=481766585875396&amp;ev=PageView&amp;noscript=1"></noscript>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
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
</head>
<body>
<header class="container-fluid">
    <h1 class="logo">ForeverHomeHub</h1>
</header>
<div class="hero"><h2>Save BIG on Solar Installation!</h2> <p>Calculate savings and compare free quotes
    </p></div>
<form id="msform" class="form">
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
    <input type="hidden" id="monthly_electric_bill" name="monthly_electric_bill" value="$201-$300">
    <div id="hero-header-progress-wrapper">
        <div id="hero-header-progress">
            <div class="circle-progress" data-progress="0"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span>
                <div class="progress-value">
                    <div class="progress-content"><span class="percent">Start</span>
                        <br><span class="complete"><i class="arrowdown"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <fieldset data-bar="0" id="zip-container"><legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> would this project take place?</h3>
            <p class="step-desc">Enter your zip code and we will help you compare free quotes!</p>
            <div class="container" style="max-width:500px;">
                <div class="zip_box">
                    <div class="form-group"><label style="visibility: hidden; position: absolute;" for="zip">Zip Code</label>
                        <input id="zip_code" class="form-control zipcode" type="tel" name="zip_code" pattern="^[0-9]{5}(?:-[0-9]{4})?$" onkeyup="this.value=this.value.replace(/[^\d]/,'')" maxlength="5" placeholder="Enter your zip code" required>
                        <div class="zip_error" style="display: none">Please enter a valid zip code. (i.e. 90210)</div>
                    </div>
                    <div class="form-btns">
                        <button class="btn btn-primary btn-next" type="button" id="btn-zip" disabled><span class="btn-text">Get Started</span></button>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="1" data-bar="14" id="emailContainer" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">Zip Code</legend>
            <h3 class="step-title"><b>Where</b> should we send your free quotes?</h3>
            <p class="step-desc">We want to make sure you have a record of your free quotes and get them as fast as possible.</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="email">Email Address</label>
                    <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" type="email" name="email_address" placeholder="Email Address" required>
                    <div class="form-error-message">Please enter your email address.</div>
                    <label id="email-custom-error" class="mt-3" for="email" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #ffffff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-bar="28" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">full name</legend>
            <h3 class="step-title">Enter your <b>name</b>.</h3>
            <p class="step-desc">Who should we create these free quotes for?</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="first_name">first_name</label>
                    <input id="first_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="first_name" placeholder="First Name" required autofocus tabindex="1">
                    <div class="form-error-message">Don't forget to tell us your name.</div>
                </div>
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="last_name">Last Name</label>
                    <input id="last_name" pattern="[a-zA-Z]+" minlength="3" class="form-control" type="text" name="last_name" placeholder="Last Name" required tabindex="2">
                    <div class="form-error-message">Don't forget to tell us your last name.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-bar="42" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">electric bill</legend>
            <h3 class="step-title">What is your <b>estimated monthly electric bill?</b></h3>
            <p class="step-desc">This helps us determine how much solar power may save you.</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group ">
                    <div class="radio-btn-group">
                        <div class="row no-gutters">
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-1" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$0-$50">
                                <label class="radio-btn-group__label" for="electricBill-1">$0-
                                    <br class="mob-only">$50</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-2" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$51-$100">
                                <label class="radio-btn-group_label" for="electricBill-2">$51-
                                    <br class="mob-only">$100</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-3" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$101-$150">
                                <label class="radio-btn-group_label" for="electricBill-3">$101-
                                    <br class="mob-only">$150</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-4" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$151-$200">
                                <label class="radio-btn-group_label" for="electricBill-4">$151-
                                    <br class="mob-only">$200</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-5" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$201-$300" checked>
                                <label class="radio-btn-group__label" for="electricBill-5">$201-
                                    <br class="mob-only">$300</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-6" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$300-$400">
                                <label class="radio-btn-group__label" for="electricBill-6">$300-
                                    <br class="mob-only">$400</label>
                            </div>
                            <div class="col radio-btn-group_btn">
                                <input id="electricBill-7" class="radio-btn-group__input" type="radio" name="monthly_electric_bill_radio" value="$401+">
                                <label class="radio-btn-group_label" for="electricBill-7">$400+</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-bar="56" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">roof shade</legend>
            <h3 class="step-title"><b>How much shade</b> does your roof get?</h3>
            <p class="step-desc">Shade helps us determines what type of solar panels to use</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="No Shade" required>
                        <label for="roof_shade">No Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Partial Shade" required>
                        <label for="roof_shade">Partial Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Full Shade">
                        <label for="roof_shade">Full Shade</label> <span></span></div>
                    <div class="radio-colored">
                        <input id="roof_shade" type="radio" name="roof_shade" value="Not sure">
                        <label for="roof_shade">Not sure</label> <span></span></div>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-bar="70" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">utility provider</legend>
            <h3 class="step-title">Who is your <b>utility provider?</b></h3>
            <p class="step-desc">This helps us compare your current bill with how much solar can save you</p>
            <div class="container" style="max-width:600px;">
                <div class="form-group ">
                    <label for="provider-select" class="label"  style="visibility: hidden; position: absolute;">Electric Utility</label>
                    <select id="utility_provider" name="utility_provider" class="form-control custom-select" required>
                        <option value="Other" hidden>Other</option>
                    </select>
                    <div class="form-error-message">Pros need this information to generate a quote.</div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-bar="84" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">address</legend>
            <h3 class="step-title">What <b>address</b> would this project be located at?</h3>
            <p class="step-desc">This helps us find and compare contractors in your area.</p>
            <div class="container" style="max-width:640px;">
                <div class="form-group">
                    <label style="visibility: hidden; position: absolute;" for="address">Street Address</label>
                    <input id="address" class="form-control" type="text" name="address" placeholder="Street Address" data-geocomplete="street address" required>
                    <p class="address_loc mb-3" style="display: none;" id="add-change"><b><span class="street_span"></span> <span class="city_span"></span>&nbsp;<span class="state_span"></span> </b>
                    </p>
                    <div class="form-error-message">Please enter your address.</div>
                </div>
                <div class="form-group parent-error">
                    <div class="checkbox checkbox--no-border">
                        <label>
                            <input name="homeowner" type="checkbox" checked="checked"> I am the homeowner</label>
                    </div>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button"><span class="btn-text">Continue</span></button>
                </div>
            </div>
        </fieldset>
        <fieldset data-step="7" id="phoneContainer" data-bar="95" class="fadeInRight"><legend style="visibility: hidden; position: absolute;">full name</legend>
            <center><h3 class="step-title stlast">Your Results Are Ready</h3></center>
            <p class="step-desc">Enter your information and get your results - fast!</p>
            <div class="container" style="max-width:500px;">
                <div class="form-group parent-error">
                    <label style="visibility: hidden; position: absolute;" for="homePhone">Phone Number</label>
                    <input id="phone" class="form-control" type="tel" pattern="\d?[\(]\d{3}[\)][\-]\d{3}[\-]\d{4}" name="phone" placeholder="Phone Number" required>
                    <div class="form-error-message">Please enter your phone number.</div> <div class="phone-valid-error form-error-message">Please enter a valid phone number.</div>
                    <label id="phone-custom-error" class="mt-3" for="phone" style="    display:none; width: 100%;
     color: red;
    font-size: 12px;
    transform: translateY(-10px);
    background: #fff;
    padding: 1px;text-align: center;
    font-weight: 600;">Please enter a valid email address.</label>
                </div>
                <div class="form-btns">
                    <button class="btn btn-primary btn-next" type="button" id="form_submit"><span class="btn-text">Get My Quotes</span></button>
                </div>
                <div class="secure-text text-center mt-2">Your information is secure.<br><br></div>
            </div>
            <p class="tcpa form-tcpa text-center mt-3">
                <label id="tcpa_label" style="font-weight: normal; font-size: 12px; color:rgba(0,0,0,0.7); line-height: 1.2;">
                    <input type="hidden" id="leadid_tcpa_disclosure">By clicking “continue,” I authorize up to 4 home improvement services companies, their contractors, and <a href="https://foreverhomehub.com/partners" target="_blank">partner companies</a>
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
    </div>
</form>
<footer>
    <div class="container text-center">
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
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-4.0.0-solar-F1.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script>

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
    };

    jQuery.validator.addMethod("emailfull", function (value, element) {
        return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
    }, "Please enter valid email address!");

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

    jQuery.validator.addMethod("phone_number", function (value, element) {
        var phone_selector = $('input[name="phone"]');
        if (phone_selector.mask !== undefined) {
            var phone_value_clean = phone_selector.cleanVal();
        }
        else {
            var phone_value_clean = phone_selector.val();
        }
        if(phone_value_clean.length < 10) {
            return false;
        }
        if(phone_value_clean.length == 11 && phone_value_clean.charAt(0) != '1') {
            return false;
        }
        return true;

    }, "Please enter a valid phone!");


    jQuery.validator.addMethod("fullName", function (value, element, len) {
        if((typeof value !== 'undefined') && (typeof value === 'string' || value instanceof String)) {
            if(value.includes("@")) {
                return false;
            }
            var index = value.indexOf(" ");  // Gets the first index where a space occours
            if(!index) {
                return false;
            }
            var firstName = value.substr(0, index); // Gets the first part
            var lastName = value.substr(index + 1);  // Gets the text part
            if(typeof firstName !== 'string' || typeof lastName !== 'string' || firstName.length < 4 || lastName.length < 4) {
                return false;
            } else {
                $("#first_name").val(firstName);
                $("#last_name").val(lastName);
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


    //set the original url field
    function setOriginalUrlField() {
        $("#msform").append('<input type="hidden" id="original_url" name="original_url" value="' + window.location.href +'">');
    }



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
            full_name: {
                required: true,
                fullName: true
            },
            monthly_electric_bill: {
                required: true
            },
            roof_shade: {
                required: true
            },
            utility_provider: {
                required: true
            },
            address: {
                hasLettersAndSpaces:true,
                required: true,
                hasNumber: true,
                minLengthNoSpaces: 5
            },
            phone: {
                required: true,
                phone_number: true
            },
            state: {
                required: true,
                state: true
            }
        },

        messages: {
            zip_code: 'Please enter valid US zip code.',
            email_address: {
                required: 'Please enter your email address!',
                emailfull: 'Invalid email - please check spelling or use another!',
                remote: 'Invalid email - please check spelling or use another!'
            },
            first_name: "Don't forget to tell us your name.",
            last_name: "Don't forget to tell us your last name.",
            full_name: {
                required: "Don't forget to tell us your name.",
                fullName:  "Please enter your full name",
            },
            address: {
                required: 'Please enter your address.',
                hasNumber:  'Your address must include the house/unit number. ',
                minLengthNoSpaces: 'Your address is too short'
            },
            phone: 'Please enter your phone number.'
        },

        errorElement: 'div',


        onkeyup :false,
    });

    $(document).ready(function () {

        $('input[type=radio][name=monthly_electric_bill_radio]').click(function(){
            $('#monthly_electric_bill').val($(this).val());
        });

        $.ajaxSetup({
            //timeout: 20000, //Time in milliseconds
            cache: false
        });

        /*$(document).ajaxError(function myErrorHandler(event, xhr, ajaxOptions, thrownError) {
        Rollbar.error("Ajax error", {urlError: ajaxOptions.url, xhr: xhr, thrownError: thrownError, email: $("input[name='email_address']").val() });
        });*/

        $('#tcpa_text').val( $('#leadid_tcpa_disclosure').parent().text() );


        var phoneSelector = $('input[name="phone"]');


        var maskOptions = {
            onKeyPress: function (cep, e, field, options) {
                var masks = ['(000) 000-0000'];
                var mask = masks[0];
                $('input[name="phone_home"]').mask(mask, options);
            },
            translation: {
                'Z': {
                    pattern: /[0-9]/, optional: true
                }
            }
        };

        if (phoneSelector.mask !== undefined) {
            phoneSelector.mask('(000) 000-0000', maskOptions);
        }

        //disable copy/paste
        $('input[type="text"],input[type="tel"],input[type="email"],input[type="number"]').bind('cut copy paste', function (e) {
            e.preventDefault();
        });

        $(".btn-next").click(function() {
            $("#email-preferences-link").hide();
        });

        $('#zip-container').on('step-redirect', function () {
            $("#email-preferences-link").hide();
        });


    });


    function is_int(value) {
        if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * Parses for given url parameter
     * @param name
     * @returns {(string | number)|null}
     */
    $.urlParam = function (name) {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        } else {
            return decodeURI(results[1]) || 0;
        }
    };


</script>
<script>

    (function(){

        $(document).ready(function() {
            var zip_inclick = false;
            var fieldset = $("form fieldset");
            var resultEmail = false;
            var resultPhone = false;
            var zip_container = true;

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
                                            zip_container = false;
                                            setUtilityProvidersOptions($('#state').val());
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

            function setUtilityProvidersOptions(state){
                var company = JSON.parse(power_company);
                var result = company[state];
                for (var i = 0; i < result.length; i++) {
                    var $o = $('<option>');
                    $o.val(result[i].name);
                    $o.html(result[i].name);
                    $('#utility_provider').append($o);
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


            $("#provider-select").on('change',function(){
                $(this).closest("fieldset").find(".btn-next").trigger("click");
            });

            $("input:radio").click(function() {
                $(this).closest("fieldset").find(".btn-next").trigger("click");
            });

            $(".btn-next").click(function(){
                if(!zip_container){
                    var parent_fieldset = $(this).parents('fieldset');
                    var next_step = true;
                    var current_step = fieldset.index(parent_fieldset);
                    var progwidth = $(this).parents('fieldset').next().attr('data-bar');


                    parent_fieldset.find('[required]:visible').each(function() {
                        var result = $("#msform").valid();
                        if (!result) {
                            next_step = false;
                        }
                    });

                    if( next_step ) {

                        var ls = $('#phoneContainer').data('step');

                        if (current_step === $('#emailContainer').data('step')) {
                            (async function () {
                                var emailValid = await emailIsValid();
                                if (emailValid === false) {
                                    return;
                                } else {
                                    parent_fieldset.removeClass('fadeInRight');
                                    parent_fieldset.toggleClass('fadeOutLeft');
                                    parent_fieldset.fadeOut(function () {
                                        $(this).find('.form-group').children('.form-error-message').hide();
                                        $("body").animate({scrollTop: 0}, '500');
                                        window.top.scrollTo(0, 0)

                                        $(this).next().fadeIn(
                                            function () {
                                                $(this).find('input').first().focus();
                                                $(".circle-progress").attr('data-progress', progwidth);
                                                $(".percent").html(progwidth + '%');
                                                $(".complete").html('completed')

                                            });

                                    })
                                }
                            })()
                        } else if (current_step < ls) {
                            parent_fieldset.removeClass('fadeInRight');
                            parent_fieldset.toggleClass('fadeOutLeft');
                            parent_fieldset.fadeOut(function () {
                                $(this).find('.form-group').children('.form-error-message').hide();
                                $("body").animate({scrollTop: 0}, '500');
                                window.top.scrollTo(0, 0)

                                $(this).next().fadeIn(
                                    function () {
                                        $(this).find('input').first().focus();
                                        $(".circle-progress").attr('data-progress', progwidth);
                                        $(".percent").html(progwidth + '%');
                                        $(".complete").html('completed')

                                    });

                            })
                        } else {
                            if(current_step === $('#phoneContainer').data('step')){
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

            $('form input').on('keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    var next_btn = $(this).closest("fieldset").find(".btn-next");
                    if(!next_btn.prop('disabled'))
                        next_btn.trigger("click");
                    e.preventDefault();
                    return false;

                }
            });

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

            function fillFormData() {
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
                formData['lp_campaign_id'] = "17604";
                formData['lp_supplier_id'] = "38531";
                formData['lp_key'] = "qqz1h52vku0dpy";
                if($('#email').val() === 'test@test.com'){
                    formData['lp_action'] = "test";
                }
                formData['trustedform_cert_url'] = $("input[name='xxTrustedFormToken']").val();
                formData['jornaya_leadid'] = $('#leadid_token').val();
                formData['user_agent'] = window.navigator.userAgent;
                formData['home_owner'] = "Yes";
                formData['roof_shade'] = "No Shade";
                formData['landing_page_url'] = window.location.href;
                formData['monthly_electric_bill'] = $('#monthly_electric_bill').val();
                formData['utility_provider'] = $('#utility_provider').val();
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
                formData['healthchecks_slug'] = 'solar-f1';
                formData['token'] = token;

                return formData;
            }

            // Form submit

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
                    formdata['vertical'] = "solar";
                    formdata['token'] = token;
                    formdata['getParams'] = getUrlVars();
                    formdata['url'] = window.location.href;
                    formdata['is_test'] = "1";
                    formdata['complete'] = "1";
                    formdata['healthchecks_slug'] = 'solar-f1';

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
                                window.location.replace("/thank-you?ef_aff_id="+$("#ef_aff_id").val()+"&ef_tx_id="+$("#tx_id").val()+"&s1="+$("#s1").val()+"&s2="+$("#s2").val()+"&s3="+$("#s3").val()+"&s4="+$("#s4").val()+"&s5="+$("#s5").val()+"&v=solar");
                                // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;
                            }
                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });
                    stl(formdata);
                }else{

                    var formData = fillFormData();
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
                                window.location.replace("/thank-you?ef_aff_id="+getUrlParameter('ef_aff_id')+"&ef_tx_id="+getUrlParameter('ef_tx_id')+"&s1="+getUrlParameter('s1')+"&s2="+getUrlParameter('s2')+"&s3="+getUrlParameter('s3')+"&s4="+getUrlParameter('s4')+"&s5="+getUrlParameter('s5')+"&v=solar"+"&ef_offer_id="+getUrlParameter('ef_offer_id'));
                            }, 500);
                            // location.href = "https://astrologyspark.com/thank-you?sign="+window.formdata['horoscope']+"&uid="+result.uniqueId+append;

                        }, error: function(data) {
                            // console.log(data);
                            alert("There was an issue, please try again or contact us at info@astrologyspark.com");
                        }
                    });

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

        });


    })();


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

<script type="text/javascript" src="{{ asset('js/power_company-roofing-main.js') }}"></script>
</body></html>

<?php

if(isset($_GET['ef_tx_id'])){
    if(!isset($_GET['ef_aff_id']) && !isset($_GET['ef_offer_id'])){
        echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ]! MISSING [ef_offer_id] AND [ef_aff_id]');</script>";
    }else{
        if(!isset($_GET['ef_aff_id']) && isset($_GET['ef_offer_id'])){
            echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and offer ID [ '+ getUrlParameter('ef_offer_id') +' ]! MISSING [ef_aff_id]');</script>";
        }else{
            if(!isset($_GET['ef_offer_id']) && isset($_GET['ef_aff_id'])){
                echo "<script>Rollbar.error('New error : Failed accessing the page - quotes.foreverhomehub.com/solar/f1.' +
 ' Everflow link is incomplete for the click ID [ ' + getUrlParameter('ef_tx_id') +  ' ] and affiliate ID [ '+ getUrlParameter('ef_aff_id') +' ]! MISSING [ef_offer_id]');</script>";
            }
        }
    }
}
?>
