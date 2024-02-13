<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" onerror="this.href='{{ asset('img/favicon.png') }}'">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <title>{{$domainTitle}} | Privacy</title>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">



    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap-v4.0.0.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-funnels-footer.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&amp;display=swap" rel="stylesheet">

    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">
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
    @if($mainDomain == "smartconsumerinsights")
        <header>
            <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/sci-logo-final.png') }}" onerror="this.src='{{ asset('img/sci-logo-final.png') }}'" width="320"
                                                                                 alt="Smart Consumer Insights" class="img-fluid" draggable="false"></a>
				</span>
            </nav>
        </header>
    @else
        @if($mainDomain == "yourafterhome")
            <header>
                <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/yah-logo.png') }}" onerror="this.src='{{ asset('img/yah-logo.png') }}'" width="320"
                                                                                 alt="Your After Home" class="img-fluid" draggable="false"></a>
				</span>
                </nav>
            </header>
        @endif
    @endif
@endif


<main>

    <article class="container">
        <div class="heading">
            <h1 class="text-center">PRIVACY POLICY</h1>
            <p><b>Last updated: February 2, 2024</b></p>
        </div>
        <div class="content">
            <p>This {{$domainTitle}} General Privacy Policy (“Privacy Policy”) covers the information we collect about you both online and offline, including information that you provide to us online or that we collect when you interact with {{$domainTitle}}, Inc. and its subsidiaries, brands, and affiliates (collectively, “{{$domainTitle}}”) websites, the Mobile Services (as defined below) or desktop application services, software, or other materials or services made available on, from, or through the websites (collectively, the “Website(s)”). Some sections of this Privacy Policy may be specific to certain {{$domainTitle}} affiliates, subsidiaries, or grouped companies only. Where that occurs, we will inform you.
            <br><br>If you have any questions or suggestions regarding our Privacy Policy, please contact us. By using the Website(s) you understand and agree to the Terms of Use and Privacy Policies.</p>

            <h4>Children</h4>

            <p>{{$domainTitle}} Website(s) are not intended for and should not be used by anyone under the age of eighteen (18). To use the Website(s) or provide information to {{$domainTitle}}, you must either be (a) at least eighteen (18) years of age or the age of majority in your jurisdiction of residence (whichever is greater); or, (b) if you are between the ages of thirteen (13) and eighteen (18)/the age of majority, you must have the consent of your legal parent or guardian to use the Website(s). If you are under thirteen (13) years of age, please do not use the Website(s). If we learn we have collected or received personal information from a child under thirteen (13) without verification of parental or guardian consent, we will delete that information. If you believe we might have any information from or about a child under thirteen (13), please contact us at {{$domainInfoEmail}}.<br><br>
                California residents under sixteen (16) years of age may have additional rights regarding the collection and sale of their personal information. Please see California Consumer Privacy Rights for more information below.</p>
            <h4>Collection of Data</h4>
            <p>{{$domainTitle}} may collect and receive customer data and other personal information and data (“personal information”) in a variety of ways. {{$domainTitle}} collects, generates, and/or receives personal information, including (i) identifying information provided through your account, (ii) contact information, (iii) survey results and information, (iv) payment, billing, or financial information, (v) usage information, (vi) cookie information, (vii) information from third party services and partners, and (viii) additional information provided to {{$domainTitle}} through User Submissions.
            <br><br>
                {{$domainTitle}} may receive this information directly from you, for example from forms you fill out; indirectly from you, for example by observing your behaviors or interactions with our Website(s); or from third parties, such as our business partners, clients, or enrichment services.<br><br>
                {{$domainTitle}} is the controller of the personal information collected on the Website(s), which includes:<br><br>
                <b>1.</b> Your email address when you register for an account on a Website. <br>
                <b>2.</b> Information by which you may be personally identified, including (a) information that you provide for your user profile upon registration, (b) that you provide to us through other interactions with us including the use of the Website(s), and (c) that we may receive from our third party business partners, such as your name, home, work, and mobile phone numbers, mailing address, email address, gender, zip code, income, political views, and any other information requested on applicable registration forms (“personal information”).<br>
                <b>3.</b> Information about your internet connection, the equipment you use to access our Website(s), and usage details.<br>
                <b>4.</b> Information that is about you, but individually does not identify you, such as geographic location, hobbies or interests.<br><br>
                Some registered customers of {{$domainTitle}} subscription services use the services to collect information about how their own users use the services, applications, websites and related third-party applications, including personal information (“{{$domainTitle}} Services Data”).<br><br>
                With respect to {{$domainTitle}} Services Data, please note: <br><br>
                <b>1.</b> {{$domainTitle}} Services Data may include, without limitation, information about the identity of {{$domainTitle}} users (such as name, postal address, e-mail address, IP address and phone number), as well as information about the pages users visit, the features they use, and the actions they take while using the Fixel services.<br>
                <b>2.</b> This Privacy Policy does not apply to {{$domainTitle}} Services Data and we are not responsible for our clients’ handling of {{$domainTitle}} Services Data. Our clients have their own policies regarding the collection, use and disclosure of your personal information. To learn about how a particular client handles your personal information, we encourage you to read the client’s privacy statement.<br>
                <b>3.</b> Fixel may collect, process, and use anonymized client end user data.
            </p>
            <h4>User Submissions</h4>
            <p>
                “User Submissions” are communications between you and {{$domainTitle}}. For example, {{$domainTitle}} may send you emails related to the Website(s) (e.g., for account verification, changes/updates to features of the Website(s), technical and security notices). {{$domainTitle}} may collect personal information through User Submissions to respond to your inquires. Note that you may not opt out of these emails without deleting your account.<br><br>
                You may opt out of our email newsletters by clicking the “Unsubscribe” at the bottom of each email and following the subsequent instructions. You may also opt-out of all marketing and advertising communications from {{$domainTitle}} by contacting us using the contact information below or emailing us at {{$domainInfoEmail}}.<br><br>
                {{$domainTitle}} may offer certain services that are available via a mobile device or app, including (i) the ability to provide User Submissions to the Website(s) via a mobile device, and (ii) the ability to browse the Website(s) from a mobile device (collectively, the ”Mobile Services“). If you use the Mobile Services, {{$domainTitle}} may store information regarding your mobile device, including your device type and operating system, the advertising ID of your mobile device, location services, or in other applications as permitted by the functionality of such mobile device.<br><br>
                In addition, {{$domainTitle}} may access, collect, monitor, store on your device, and/or remotely store one or more “device identifiers.” Device identifiers are small data files or similar data structures stored on or associated with your mobile device, which uniquely identify your mobile device. A device identifier may be data stored in connection with the device hardware, data stored in connection with the device’s operating system or other software, or data sent to the device by {{$domainTitle}}. A device identifier may deliver information to {{$domainTitle}} or to a third party partner about how you browse and use the Website(s) and may help {{$domainTitle}} or others provide reports or personalized content and ads. Some features of the Website(s) may not function properly if use or availability of device identifiers is impaired or disabled.
            </p>
            <h4>Enrichment Services</h4>
            <p>
                Certain categories of personal information may be made available to our customers and business partners in connection with providing data enrichment services. Data enrichment is a process of combining data from different sources to enhance, refine, and improve the data. {{$domainTitle}} may combine data in its possession, or with data from enrichment services, in order to match contact data or other relevant records linked to the same individual. Data that may be returned by our enrichment services include email addresses, social handles, hashed identifiers, basic demographic information, and consumer interests.<br><br>
                Whenever we store your information directly, we will provide you with access to that information upon request. If that information is wrong, we strive to give you an easy way to update it or ask for it to be deleted. We will ensure your personal information is promptly updated or deleted, unless we have a legal basis for keeping any part of information.<br><br>
                If you would like to request access to your information, or to delete or update it, please contact us at {{$domainInfoEmail}} or fill out the request form here - https://{{$domainFullDomain}}/contact-us
            </p>
            <h4>How We Use and Share Your Information</h4>
            <p>
                {{$domainTitle}} creates aggregate reports on user demographics and traffic patterns. These aggregated statistics are used internally to better provide services to users of the Website(s) and may also be provided to advertisers, sponsors, and partners. This allows {{$domainTitle}}’s advertisers, partners, and sponsors to advertise more effectively, and allows our users to receive advertisements that are pertinent to their interests and needs. For example, we use the information we collect to (a) provide, maintain, and protect the services and Website(s); (b) notify users of promotions, special events, new services and special offers relevant to you, for example, with your consent where appropriate, through emails, phone calls, text messages (SMS), and push notifications; (c) tailor product offerings, customer service and overall experience; (d) improve the content, operation, appearance and utility of the Website(s); (e) conduct surveys, research and evaluations; (f) troubleshoot and resolve disputes; (g) gather analytical data and (h) fulfill any other purpose for which you provide it; and (j) accomplish other administrative tasks or in any other way we may describe when you provide the information.<br><br>
                {{$domainTitle}} also uses the information that you provide, or that {{$domainTitle}} collects, to provide its products, services and features to you; to provide you with customer support; as well as to track user-generated content and users to comply as a service provider with the DMCA and other applicable laws. {{$domainTitle}} uses the information to prevent potentially illegal activities. These efforts may on occasion result in a temporary or permanent suspension or termination of some functions for some users. {{$domainTitle}} may contact you with announcements related to the Website(s) from time to time. You may opt out of all communications except essential updates on your account.<br><br>
                When you click on or otherwise interact with an advertisement on our Website(s) there is a possibility that the advertiser may place a cookie in your browser or the advertising ID for the Mobile Services and note that it meets the criteria they selected.<br><br>
                {{$domainTitle}} may share User Submissions and your information (including but not limited to, information from cookies, log files, device identifiers, location data, and usage data) with businesses that are legally part of the same group of companies that {{$domainTitle}} is part of, or that become part of that group (“Affiliates”). Affiliates may use this information to help provide, understand, and improve the Website(s) (including by providing analytics) and Affiliates’ own services (including by providing you with better and more relevant experiences); however, these Affiliates will honor the choices you make about who can see your photos.<br><br>
                {{$domainTitle}} may also share personal information outlined in this Privacy Policy, with others, in the following instances:<br><br>
                <b>1.</b> With our service providers, in order to operate, maintain and enhance the services we provide; <br>
                <b>2.</b> With our billing or payment services providers;<br>
                <b>3.</b> With competent authorities and with any third party, as may be required;<br>
                <b>4.</b> With third parties to whom we believe that we are required by law to disclose your information; <br>
                <b>5.</b> With attorneys, courts and relevant third parties, in any case of dispute, or legal proceeding of any kind involving you; and<br>
                <b>6.</b> With {{$domainTitle}} Affiliates and other corporate group companies.<br>
                <b>7.</b> With third parties to offer marketing or services to you directly.
            </p>
            <h4>Mailing List</h4>
            <p>
                {{$domainTitle}} may launch a mailing list for some or all of the Website(s). In order to sign up to receive regular emails, newsletters and the like from a mailing list from one of the Website(s), users must submit information including, without limitation, a valid email address and demographic information such as location and interests. This information will be used in anonymous, aggregate form only in order to assess general user interest in various internal and third party products and services. Users who choose to sign up for a mailing list will receive regular emails from the site, including new articles added to the site as well as emails from third party site sponsors. If you do not wish to receive emails from third party advertisers, do not sign up for the mailing list. Alternatively, you may opt-out of the communications by following the instructions at the bottom of every email.
            </p>
            <h4>Cookies</h4>
            <p>
                Some of {{$domainTitle}}’s business partners (for example, advertisers) may use cookies on the Website(s) or advertising IDs for the Mobile Services (collectively, “cookies”). However, {{$domainTitle}} has no access to or control over these cookies, once we have given permission for them to set cookies for advertising. This privacy statement covers the use of cookies by {{$domainTitle}} only and does not cover the use of cookies by any advertisers.<br><br>
                In addition, the Website(s) use Google Analytics, a web analytics service provided by Google, Inc. (“Google”). Google Analytics and {{$domainTitle}}’s business partners use cookies to help them analyze how users use the Website(s). The information generated by the cookie about your use of the Website(s) (including your IP address) will be transmitted to and stored by Google on servers in the United States. Google and {{$domainTitle}}’s business partners will use this information for the purpose of evaluating your use of the Website(s) or our services, compiling reports on website activity for website operators and providing other services relating to website activity and internet usage. Google and {{$domainTitle}}’s business partners may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google’s or {{$domainTitle}}’s business partners’ behalf. Google will not associate your IP address with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser. At this time we do not respond to browser ‘Do Not Track’ signals, as we await the work of interested stakeholders and others to develop standards for how such signals should be interpreted. By using this Website, you consent to the processing of data about you by Google and {{$domainTitle}}’s business partners in the manner and for the purposes set out above.
            </p>
            <h4>Web Beacons</h4>
            <p>
                Some of our Website(s) may contain electronic images known as web beacons, which are also called single-pixel gifs. These images allow us to count users who have visited those pages and to deliver co-branded services. Web beacons are not used to access your personal data, but they are a technique used to compile aggregated statistics about our Website usage. Web beacons used on our Website(s) collect only a limited set of information including a cookie number, time and date of a page view, and a description of the page on which the web beacon resides. Some of our Website(s) may also contain web beacons placed there to help us determine the effectiveness of our advertising campaigns.
            </p>
            <h4>Third Party Advertising</h4>
            <p>
                The ads appearing on Website(s) are delivered to users by third party advertisers including Google, among others. These companies may use information (not including your name, address, email address or telephone number) about your visits to this and other websites in order to provide advertisements on this site and other sites about goods and services that may be of interest to you. These Website(s) allow third-party companies to serve ads and/or collect certain anonymous information when you and other Internet users visit. These companies may use non-personally identifiable information (e.g., click stream information, browser type, time and date, subject of advertisements clicked or scrolled over) during your visits to this site and other Web sites in order to provide advertisements about goods and services likely to be of greater interest to you. These companies typically use a cookie or third-party web beacon to collect this information.
            </p>
            <h4>Log Files</h4>
            <p>
                Like most standard website servers we use log files. This includes internet protocol (IP) addresses, browser type, internet service provider (ISP), referring/exit pages, platform type, date/time stamp, and number of clicks to analyze trends, administer the site, track user’s movement, and gather broad demographic information for aggregate use. We may use a tracking utility that uses log files to analyze user movement.
            </p>
            <h4>Legal Disclosures</h4>
            <p>
                {{$domainTitle}} may need to disclose personal information when required by law or legal process. {{$domainTitle}} may also share information when it has a good-faith belief that such action is necessary: to comply with a current judicial proceeding, a court order or legal process served on {{$domainTitle}} or any of its Affiliates; to prevent fraud or other illegal activity; to prevent imminent bodily harm; or, to protect {{$domainTitle}} and users from people violating this Privacy Policy or Terms of Use.
            </p>
            <h4>Business Transitions</h4>
            <p>
                In the event {{$domainTitle}} goes through a business transition, such as a merger, acquisition by another company, or sale of a portion of its assets, or if {{$domainTitle}} declares bankruptcy, {{$domainTitle}} may transfer your personal information as part of the assets transferred.
            </p>
            <h4>Data Retention</h4>
            <p>
                {{$domainTitle}} will retain your personal information for as long as is necessary to fulfill the services that you have requested, comply with any laws or regulations, resolve disputes, and enforce our agreements. {{$domainTitle}} may retain your data longer for a legitimate business interest where the business benefit is not outweighed by your personal rights and freedoms.
            </p>
            <h4>Links</h4>
            <p>The Website(s) contain links to third party sites. Please be aware that {{$domainTitle}} has no control over and is not responsible for the privacy practices or content of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of each and every website that collects personally identifiable information. This privacy statement applies solely to information collected by {{$domainTitle}}.</p>
            <h4>Fixel’s Transfer of Data Outside Your Territory</h4>
            <p>For purposes of providing Fixel services, we may store and process information in a location outside of your own country, including the United States. We may also process information using cloud services. In certain cases, the laws in some of these countries may provide a lower degree of data protection than the laws of your own country. You agree to the transfer of your information to such other countries for the purpose of processing as described in this Privacy Policy, including through cloud services.</p>
            <h4>Notification of Changes</h4>
            <p>Whenever {{$domainTitle}} changes its Privacy Policy, we will post those changes to the Website(s), this privacy statement, and other places we deem appropriate.</p>
            <h4>Violations of this Policy</h4>
            <p>{{$domainTitle}} will terminate your access to the Website(s) if, under appropriate circumstances, {{$domainTitle}} determines you violated this Privacy Policy or the Terms of Use.</p>
            <h4 id="ccpa">California Consumer Privacy Rights</h4>
            <p>YOUR PRIVACY RIGHTS – California law permits California residents to request certain information regarding collection, uses, sharing of, and deletion of personal information internally and to third parties. Under the CCPA, this is your ‘Right to Know’, ‘Right to Request Deletion’, ‘Right to Opt-Out of Sale’, and ‘Right to be Free from Discrimination’. To make a verifiable consumer request pursuant to the CCPA, please send an email to {{$domainInfoEmail}} or fill out the request form here.
            <br><br>
                A consumer request is considered verifiable by email address. For example, a verifiable request submitted by email must be received by or confirmed through the email address associated with the personal information in question. An authorized agent must contact {{$domainInfoEmail}} to submit a request under the CCPA on a California consumer’s behalf and must carbon copy (CC:) the email address in question in the request. We may request additional information to verify the request or the agent<br><br>
                We collect the following categories of Personal Information:
            <br><br>
                <b>1.</b> Name, phone number, street address, city, zip code, email address, household income, or financial and payment information, date of birth, age, gender, political views, vehicle(s), service or utility provider(s), and homeowner status, relationship or marital status, etc.;<br>
                <b>2.</b> Identifiers such as IP address and other network information, online identifiers, cookie IDs and similar information, mobile device IDs, advertising IDs, device information and characteristics, and browser or device “fingerprint”—not your personal fingerprint but instead a statistical classification of your device or browser;<br>
                <b>3.</b> Survey responses (where voluntarily provided);<br>
                <b>4.</b> Transaction information and purchase history;<br>
                <b>5.</b> Internet or network activity information, such as browsing history and interactions with our websites, mobile, or applications;<br>
                <b>6.</b> Geolocation data, such as device or browser location;<br>
                <b>7.</b> Form submissions and Emails; and<br>
                <b>8.</b> Inferences drawn from any of the Personal Information listed above to create a profile or summary about, for example, an individual’s preferences and characteristics.<br><br>
                {{$domainTitle}} collects this Personal Information directly and indirectly from California residents themselves and from third parties such as enrichment services, joint marketing, co-branding, co-promotional, or advertising partners; Affiliates; and other sources of demographic information.<br><br>
                In the preceding twelve (12) months, {{$domainTitle}} has disclosed the following categories of personal information for a business purpose:<br><br>
                <b>1.</b> Name, phone number, street address, city, zip code, email address, household income, or financial and payment information, date of birth, age, gender, political views, vehicle(s), service or utility provider(s), and homeowner status, relationship or marital status, etc.;<br>
                <b>2.</b> Identifiers such as IP address and other network information, online identifiers, cookie IDs and similar information, mobile device IDs, advertising IDs, device information and characteristics, and browser or device “fingerprint”—not your personal fingerprint but instead a statistical classification of your device or browser;<br>
                <b>3.</b> Survey responses (where voluntarily provided);<br>
                <b>4.</b> Transaction information and purchase history;<br>
                <b>5.</b> Internet or network activity information, such as browsing history and interactions with our websites, mobile, or applications;<br>
                <b>6.</b> Geolocation data, such as device or browser location;<br>
                <b>7.</b> Form submissions and Emails; and<br>
                <b>8.</b> Inferences drawn from any of the Personal Information listed above to create a profile or summary about, for example, an individual’s preferences and characteristics.<br><br>
                In the preceding twelve (12) months, {{$domainTitle}} has sold the following categories of personal information:<br><br>
                <b>1.</b> Name, phone number, street address, city, zip code, email address, household income, or financial and payment information, date of birth, age, gender, political views, vehicle(s), service or utility provider(s), and homeowner status, relationship or marital status, etc.;<br>
                <b>2.</b> Identifiers such as IP address and other network information, online identifiers, cookie IDs and similar information, mobile device IDs, advertising IDs, device information and characteristics, and browser or device “fingerprint”—not your personal fingerprint but instead a statistical classification of your device or browser;<br>
                <b>3.</b> Survey responses (where voluntarily provided);<br>
                <b>4.</b> Transaction information and purchase history;<br>
                <b>5.</b> Internet or network activity information, such as browsing history and interactions with our websites, mobile, or applications;<br>
                <b>6.</b> Geolocation data, such as device or browser location;<br>
                <b>7.</b> Form submissions and Emails; and<br>
                <b>8.</b> Inferences drawn from any of the Personal Information listed above to create a profile or summary about, for example, an individual’s preferences and characteristics.<br><br>
                In some instances, you may have the opportunity to provide personal information for a price quote or service. You can opt into these services by submitting your personal information. If you subsequently wish to withdraw your consent, you can do so by a verifiable consumer request by sending an email to {{$domainInfoEmail}} or by filling out the request form here.
            </p>
            <h4>Personal Information Sales Opt-Out and Opt-In Rights</h4>
            <p>If you are 16 years of age or older, you have the right to direct us to not sell your personal information at any time (the “Right to Opt-Out”). We do not sell the personal information of consumers we actually know are less than 16 years of age. Individuals who opt-in to personal information sales may opt-out of future sales at any time.<br><br>
                To exercise the right to opt-out, you (or your authorized representative) may submit a request to us by visiting the following Internet Web page link: https://{{$domainFullDomain}}/contact-us<br><br>
                We will not discriminate against you for exercising any of your CCPA rights. Unless permitted by the CCPA, we will not deny you goods or services, charge you different prices or rates for goods or services, including through granting discounts or other benefits, or imposing penalties, provide you a different level or quality of goods or services, or suggest that you may receive a different price or rate for goods or services or a different level or quality of goods or services. </p>
            <h4>Other California Privacy Rights</h4>
            <p>
                California’s “Shine the Light” law (Civil Code Section § 1798.83) permits users of our Website(s) that are California residents to request certain information regarding our disclosure of personal information to third parties for their direct marketing purposes. To make such a request, please send an email to {{$domainInfoEmail}}.
            </p>
            <h4>Contact Information</h4>
            <p>
                If you have inquiries about our privacy practices or you suspect that {{$domainTitle}} has handled your information in a manner that does not comply with this Privacy Policy, please contact us by emailing to {{$domainInfoEmail}}.<br><br>
                We can also be contacted by mail at:<br><br>
                {{$domainTitle}}<br>
                224 West 35th Street<br>
                New City, NY, United States, New York
            </p>
        </div>
    </article>

</main>
@include('partials/footer', ['mainDomain' => $mainDomain])

</body>
</html>
