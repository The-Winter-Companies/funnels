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

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
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
    <title>Forever Home Plus | Contact</title>
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
        <title>Smart Consumer Insights | Contact</title>
    @endif
@endif


<main>

    <article class="container">
        <div class="heading">
            <h1 class="text-center">Disclaimer</h1>
            <p><b>Last updated: February 2, 2024</b></p>
        </div>
        <div class="content">
            <h4>Interpretation and Definitions</h4>
            <h6>Interpretation </h6>
            <p>
                The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
            </p>
            <h6>Definitions </h6>
            <p>
                For the purposes of this Disclaimer:<br><br>
                <b>1.</b> Company (referred to as either “the Company”, “We”, “Us” or “Our” in this Disclaimer) refers to {{$domainTitle}}, 224 West 35th Street, New City, NY, United States, New York.<br>
                <b>2.</b> Service refers to the Website.<br>
                <b>3.</b> You means the individual accessing the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.<br>
                <b>4.</b> Website refers to {{$domainTitle}}, accessible from https://foreverhomehub.com/
            </p>
            <h4>Disclaimer</h4>
            <p>
                The information contained on the Service is for general information purposes only.<br><br>
                The Company assumes no responsibility for errors or omissions in the contents of the Service.<br><br>
                In no event shall the Company be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. The Company reserves the right to make additions, deletions, or modifications to the contents on the Service at any time without prior notice. This Disclaimer has been created with the help of the Free Disclaimer Generator.<br><br>
                The Company does not warrant that the Service is free of viruses or other harmful components.
            </p>
            <h4>External Links Disclaimer </h4>
            <p>
                The Service may contain links to external websites that are not provided or maintained by or in any way affiliated with the Company.<br><br>
                Please note that the Company does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.
            </p>
            <h4>Errors and Omissions Disclaimer </h4>
            <p>
                The information given by the Service is for general guidance on matters of interest only. Even if the Company takes every precaution to ensure that the content of the Service is both current and accurate, errors can occur. Plus, given the changing nature of laws, rules and regulations, there may be delays, omissions or inaccuracies in the information contained on the Service.<br><br>
                The Company is not responsible for any errors or omissions, or for the results obtained from the use of this information.
            </p>
            <h4>Fair Use Disclaimer </h4>
            <p>
                The Company may use copyrighted material which has not always been specifically authorized by the copyright owner. The Company is making such material available for criticism, comment, news reporting, teaching, scholarship, or research.<br><br>
                The Company believes this constitutes a “fair use” of any such copyrighted material as provided for in section 107 of the United States Copyright law.<br><br>
                If You wish to use copyrighted material from the Service for your own purposes that go beyond fair use, You must obtain permission from the copyright owner.
            </p>
            <h4>Views Expressed Disclaimer </h4>
            <p>
                The Service may contain views and opinions which are those of the authors and do not necessarily reflect the official policy or position of any other author, agency, organization, employer or company, including the Company.<br><br>
                Comments published by users are their sole responsibility and the users will take full responsibility, liability and blame for any libel or litigation that results from something written in or as a direct result of something written in a comment. The Company is not liable for any comment published by users and reserves the right to delete any comment for any reason whatsoever.
            </p>
            <h4>No Responsibility Disclaimer </h4>
            <p>
                The information on the Service is provided with the understanding that the Company is not herein engaged in rendering legal, accounting, tax, or other professional advice and services. As such, it should not be used as a substitute for consultation with professional accounting, tax, legal or other competent advisers.<br><br>
                In no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever arising out of or in connection with your access or use or inability to access or use the Service.
            </p>
            <h4>“Use at Your Own Risk” Disclaimer </h4>
            <p>
                All information in the Service is provided “as is”, with no guarantee of completeness, accuracy, timeliness or of the results obtained from the use of this information, and without warranty of any kind, express or implied, including, but not limited to warranties of performance, merchantability and fitness for a particular purpose.<br><br>
                The Company will not be liable to You or anyone else for any decision made or action taken in reliance on the information given by the Service or for any consequential, special or similar damages, even if advised of the possibility of such damages.
            </p>
            <h4>Contact Information</h4>
            <p>
                If you have any questions regarding these Terms or the Site, please contact Company at:<br><br>
                {{$domainInfoEmail}}<br><br>
                or<br><br>
                {{$domainTitle}}<br><br>
                224 West 35th Street<br><br>
                New City, NY, United States, New York
            </p>
        </div>
    </article>

</main>
@include('partials/footer', ['mainDomain' => $mainDomain])

</body>
</html>
