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

    <title>{{$domainTitle}} | Contact</title>


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
        @else
            @if($mainDomain == "homequotespro")
                <header>
                    <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/home-quotes-pro.png') }}" onerror="this.src='{{ asset('img/home-quotes-pro.png') }}'" width="320"
                                                                                 alt="Home Quotes Pro" class="img-fluid" draggable="false"></a>
				</span>
                    </nav>
                </header>
            @endif
        @endif
    @endif
@endif


<main>

    <article class="container">
        <div class="heading">
            <h1 class="text-center">CONTACT US</h1>
        </div>
        <div class="content">
            <p>
                <b>Thank you for visiting our website!<br><br>
                    Do you have questions?<br><br>
                    Browse our FAQs for answers to the most common questions.<br><br>
                    For All Media or Press Inquiries<br><br></b>
                    Please email us at {{$domainInfoEmail}}.<br>
                    Additionally, you can contact us by mail at:<br>
                    224 West 35th Street<br>
                    New City, NY, United States, New York
            </p>
        </div>
    </article>

</main>
@include('partials/footer', ['mainDomain' => $mainDomain])

</body>
</html>
