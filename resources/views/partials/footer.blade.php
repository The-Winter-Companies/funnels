<?php
?>
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
        @if($mainDomain == "foreverhomeplus")
            <span class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> Forever Home Plus. All Rights Reserved.</span>
        @else
            @if($mainDomain == "foreverhomequotes")
                <span class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> Forever Home Quotes. All Rights Reserved.</span>
            @else
                <span class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> Forever Home Hub. All Rights Reserved.</span>
            @endif
        @endif
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
