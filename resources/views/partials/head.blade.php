<meta charset="utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources."/>
<meta name="author" content="">
<meta name="keywords" content=""/>
<title>{{ucfirst($vertical)}} - ForeverHomeHub</title>

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="">
<meta itemprop="description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
<meta itemprop="image" content="../assets/img/favicon.png">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="#">
<meta property="og:type" content="website">
<meta property="og:title" content="">
<meta property="og:description" content="Discover the best solutions for your forever home with our trusted network and insightful resources.">
<meta property="og:image" content="../assets/img/favicon.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="Description">
<meta name="twitter:image" content="">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,700,800" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

<link href="{{ asset('css/bootstrap-v4.0.0.css') }}" rel="stylesheet">

<script type="text/javascript">if(typeof window.jQuery === 'undefined') {document.write('<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"><\/script>');}</script>
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/selectivizr.js"></script>
<script type="text/javascript">
    document.createElement('header');
    document.createElement('nav');
    document.createElement('menu');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
</script>
<![endif]-->
<!--[if IE 9]>
<link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
<![endif]-->
<!--[if lte IE 8]>
<link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>

<![endif]-->

@if ( env('APP_ENV') !== 'local' )
    @include('partials.rollbar_script')
@endif

@include('partials.trusted_form')
@include('partials.lead_id')


@if (isset($enablePushnami) && $enablePushnami == true)
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
@endif


