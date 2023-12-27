<!-- Start Facebook script -->
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

<!-- End Facebook script -->

<!-- Start Gtag manager script-->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-7YJX2FVDMZ"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-7YJX2FVDMZ');
</script>


<!-- End Gtag manager script-->


<!-- Start poptin script -->

<script type="text/javascript">var poptinAfterPageLoad = true;</script>
<script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=064a7309bc204' async='true'></script>

<!-- End poptin script -->

<!-- EF SCRIPT -->

@if(\Illuminate\Support\Facades\Request::get('source') !== 'pingdom')
    <script type="text/javascript"
            src="https://www.twck93j.com/scripts/sdk/everflow.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var efClickPromiseFulfilled = false;
            var efClickPromise = EF.click({  offer_id: 9,  affiliate_id: 2,  sub1: EF.urlParameter('sub_id'),  sub2: EF.urlParameter('s2'),  sub3: EF.urlParameter('s3'),  sub4: EF.urlParameter('s4'),  sub5: EF.urlParameter('s5'),  uid: EF.urlParameter('uid'), fbclid: EF.urlParameter('fbclid')});
            efClickPromise.then(function(transaction_id)  {
                efClickPromiseFulfilled = true;
                var oid = 9;
                if(oid) {
                    var transactionId = transaction_id;
                    if (!transactionId) {
                        //attempt to load via script, which will load from browser storage if exists
                        transactionId = EF.getTransactionId(oid);
                    }
                    if(transactionId) {
                        $("#ef_tx_id").val(transactionId);
                    }
                    else {
                        Rollbar.critical("Critical error: Unable to determine TransactionID for Everflow Direct Linking.");
                    }
                }
                else {
                    Rollbar.critical("Error in Everflow Direct Linking: Unable to determine OID (Offer ID) - required for a direct link click.");
                }
            });

            setTimeout(function(){
                    if(!efClickPromiseFulfilled) {
                        Rollbar.critical("Error in Everflow Direct Linking: No response received for the promise.");
                    }
                } , 10000
            )
        });
    </script>
@endif
