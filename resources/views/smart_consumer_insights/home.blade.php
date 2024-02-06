<?php

$solarLink = "https://foreverhomeplus.com/solar";
$roofingLink = "foreverhomeplus.com/roofing";
$tubsLink = "foreverhomeplus.com/tubs";
$windowsLink = "foreverhomeplus.com/windows";
$astrologyLink = "signup.astrologyspark.com";
$homeServicesLink = "foreverhomeplus.com";

?>
<!DOCTYPE html><html lang="en"><head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Title -->
   <title>Smart Consumer Insights</title>
   <!-- Favicon -->
   <link rel="icon" href="{{asset('img/favicon-32x32.png')}}">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet">
   <!-- gulp:css -->
   <link href="{{asset('css/app.min.css')}}" rel="stylesheet">
   <!-- endgulp -->
</head>

<body>
   <!--/// Header Area /// -->
   <header class="header-area">

      <div class="header-navbar-middle d-none d-lg-block">
         <div class="container">
            <div class="navbar-brand-wrapper py-3 d-flex justify-content-center align-items-center">
               <a class="navbar-brand" href="/">
                  <img class="lazyload" src="{{asset('img/fhp-logo-hp-new.png')}}" alt="image">
               </a>
            </div>
         </div>
      </div>
      <div class="header-navbar-bottom pt-2 pt-lg-0 border-top border-light">
         <div class="container themeix-menu-selector">
            <nav class="navbar navbar-expand-lg">
               <div class="collapse navbar-collapse" id="main_nav">
                  <ul class="navbar-nav me-auto">
                     <li class="nav-item"><a class="nav-link" href="/blog">Solar</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Roofing</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Windows</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Tubs</a></li>
                     <li class="nav-item"><a class="nav-link" href="/contact">Horoscopes</a></li>
					 <li class="nav-item"><a class="nav-link" href="https://themeix.com/product/newsfeed-news-magazine-website-html-site-template/">FREE Quotes<span>NEW</span></a></li>
                  </ul>
               </div>
            </nav>
            <div class="modal fade" id="search-modal" data-bs-backdrop="static">
               <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-body">
                        <form class="forms">
                           <div class="input-group">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                              <input type="text" class="form-control" placeholder="Search Here">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!--/// Hero Area /// -->
   <div class="hero-area pt-3 pb-3  pt-lg-2 pb-lg-3">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-12">
                   <article class="blog-style3 border-0 card mb-4 position-relative">
                       <div class="feature-image">
                           <div class="image-frame image-hover-style-1">
                               <a href="{{$solarLink}}" target="_blank"> <img class="lazyload" src="{{asset('img/sci-hp1.png')}}" alt="image"></a>
                           </div>
                       </div>
                       <div class="card-body">
                           <a class="badge bg-danger" href="">Home Services</a>
                           <h2><a href="foreverhomeplus.com/solar">Homeowners: Switch to Solar for Zero Down and Save Big</a>
                           </h2>
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="author-block">
                                       <ul class="avatar list-inline mb-0">
                                           <li class="list-inline-item"><a class="small" href="foreverhomeplus.com/solar"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="col-lg-6"> <span class="date-info small  float-lg-end">
                              <span>{{ \Carbon\Carbon::now()->subDays(0)->format('F j, Y')}}</span>
                              <span>1 mins to read</span>
                              </span>
                               </div>
                           </div>
                       </div>
                   </article>
               </div>
               <div class="col-lg-3 col-md-6">
                   <article class="blog-style4 ">
                       <div class="card border-0">
                           <div class="blog-post-image image-hover-style-1">
                               <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img3.jpg')}}" alt="image"></a>
                           </div>
                           <div class="card-body  px-0">
                               <h6><a href="/single"> I will tell you the truth about food in the next 60
                                       seconds</a>
                               </h6>
                           </div>
                       </div>
                   </article>
                   <article class="blog-style4 ">
                       <div class="card border-0">
                           <div class="blog-post-image image-hover-style-1">
                               <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img4.jpg')}}" alt="image"></a>
                           </div>
                           <div class="card-body px-0">
                               <h6><a href="/single">10 things your boss needs to know about</a>
                               </h6>
                           </div>
                       </div>
                   </article>
               </div>
               <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                   <nav class="themeix-post-list">
                       <ul class="list-group">
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">7 things your boss needs to know about
                                           food</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">1 hour ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">10 facts that nobody told you about you </a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">2 hours ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">How to leave sports without being noticed</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">1 day ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">New way to introduce business</a></h6>
                                   <time datetime="2021-02-14 20:00" class="small">3 days ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">In for the now propitiously beginning
                                           everything bright it they you</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">3 days ago</time>
                               </article>
                           </li>
                       </ul>
                   </nav>
               </div>
           </div>
       </div>
   </div>
   <!--/// Ads Area /// -->
   <div class="ads-area">
      <div class="container">
         <div class="text-center  themeix-ads"><a href="#"><img class="lazyload" src="{{asset('img/blog-ads.png')}}" alt="image"></a>
         </div>
      </div>
   </div>
      <!--/// Blog Block 1 Area /// -->
   <div class="blog-block-1 py-5 ">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-7">
               <div class="col-md-12">
                  <div class="section-title-block d-flex pb-3">
                     <h3 class="section-widget-title">Political News</h3>
                     <a class="text-uppercase section-title-link" href="/category">
                        See all
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                           </path>
                        </svg>
                     </a>
                  </div>
               </div>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img5.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">Every household to get prepaid blank postcard courtesy of News
                              Post</a>
                        </h4>
                        <p>The and room. Know and nation question would the to copy. And leather and eyes human
                           would collection.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img//blog-img6.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">What you need to know about COVID-19 in Ottawa on Sunday</a>
                        </h4>
                        <p>The can my after he cache by more name out it of differentiates we each were food, attentive
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href=""><img src="{{asset('img//author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img//blog-img7.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">Health Canada approves AstraZeneca's COVID-19 vaccine</a>
                        </h4>
                        <p>Also in project the way brief hills we secretly at in tones. Past person, a he cheerful, hollow never.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img8.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">Potato Head goes gender neutral</a>
                        </h4>
                        <p>At window it value do name not state would any not survey needed would the at wish phase on been to biases.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img9.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">5 Africa-born designers open digital Milan Fashion Week</a>
                        </h4>
                        <p>Chosen the long the coast right it aside, moving how feel in way. On supplies employed is the new room.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img10.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">Golden Globes: Wildest looks through the years</a>
                        </h4>
                        <p>Somewhere, even and the according walls analyzed way or have shortcuts. We it horses clearly, unrecognisable.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img11.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Lifestyle</a>
                        <h4><a href="/single">Deep Nostalgia uses video reenactment technology to animate
                              faces in still photos</a>
                        </h4>
                        <p>Between chooses declined, merely and should will hundred of meals nation team- that he the contrast, casting.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-lg-4 col-md-5">
               <div class="sidebar-widget mb-3 border border-light rounded">
                  <div class="wrapper">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title-block d-flex pb-3">
                              <h3 class="section-widget-title">Trending</h3>
                              <a class="text-uppercase section-title-link" href="/category">
                                 See all
                                 <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/blog-img12.jpg')}}" data-src="" alt="Post Title Here">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Build a covid-19 self assessment tool
                                 with
                                 google forms</a>
                           </h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/blog-img13.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Master chrome developer tools</a></h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/blog-img14.jpg')}}" >
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Find out how much traffic a website
                                 gets</a>
                           </h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/blog-img15.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Write your name in different languages
                                 and styles</a>
                           </h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/blog-img16.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">The 101 most useful websites on the
                                 internet</a>
                           </h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
               <div class="sidebar-widget mb-3 border border-light rounded">
                  <div class="wrapper">
                     <ul class="nav nav-tabs" id="tab-menu">
                        <li class="nav-item">
                           <a class="   active" data-bs-toggle="tab" href="#tab1">Most Viewed</a>
                        </li>
                        <li class="nav-item">
                           <a class=" " data-bs-toggle="tab" href="#tab2">Most Recent </a>
                        </li>
                     </ul>
                     <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                           <ul class="counter-post list-inline">
                              <li class="counter-post-item">
                                 <a href="/single">How to play youtube videos at custom speed</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How to search emails in gmail by specific time</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How to search emails in gmail by specific time</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">Let others upload videos to your youtube channel</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How to search emails in gmail by specific time</a>
                              </li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="tab2">
                           <ul class="counter-post list-inline">
                              <li class="list-inline-item">
                                 <a href="/single">How to add an xml sitemap to your blogger blog</a>
                              </li>
                              <li class="list-inline-item m-0">
                                 <a href="/single">The best twitter search tricks</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar-widget mb-3 border border-light rounded">
                  <div class="wrapper">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="section-title-block d-flex pb-3">
                              <h3 class="section-widget-title">Tag Cloud</h3>
                              <a class="text-uppercase section-title-link" href="/category">
                                 See all
                                 <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                                    </path>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                     <ul class="tag-cloud list-inline">
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Nature</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Fashion</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Wordpress</a></li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Photo</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Travel</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Hotel</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Business</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Culture</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Sports</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Design</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget mb-3 border border-light rounded">
                  <div class="wrapper">
                     <h3>Poll / Vote</h3>
                     <p>Who will win this cricket match today in ICC World T20?</p>
                     <form action="#" class="forms">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                           <label class="form-check-label" for="exampleRadios1">
                              Australia
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                           <label class="form-check-label" for="exampleRadios2">
                              India
                           </label>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="sidebar-widget border border-light rounded">
                  <div class="wrapper">
                     <h3>Subscribe Now</h3>
                     <p>Keep updated with the latest news!</p>
                     <form action="#" class="subscription-from">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Email Address">
                           <div class="input-group-append">
                              <button class="btn btn-secondary" type="button">Subscribe</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      <!--/// Editor Pick Area /// -->
   <div class="editor-pick bg-light pt-5 pb-3">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title-block d-flex pb-3">
                  <h3 class="section-widget-title">Editors Pick</h3>
                  <a class="text-uppercase section-title-link" href="/category">
                     See all
                     <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                        </path>
                     </svg>
                  </a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <article class="blog-style3 border-0 card mb-4 position-relative">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img36.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body">
                     <a class="badge bg-danger" href="/category">Political</a>
                     <h2><a href="/single">No. 19 Kansas upsets No. 2 Baylor as Bears</a></h2>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="author-block">
                              <ul class="avatar list-inline mb-0">
                                 <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                              <span>1 mins to read</span>
                           </span>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-lg-6 col-md-6">
               <article class="blog-style3 border-0 card mb-4 position-relative">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img34.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body">
                     <a class="badge bg-secondary" href="/category">WordPress</a>
                     <h2><a href="/single">100 things to do while stuck inside due to a pandemic</a></h2>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="author-block">
                              <ul class="avatar list-inline mb-0">
                                 <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                              <span>1 mins to read</span>
                           </span>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </div>
      <!--/// Blog Block 3 Area /// -->
   <div class="blog-block-3 py-5">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-4 pb-3">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title-block d-flex pb-3">
                        <h3 class="section-widget-title">Nature</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img17.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Plan your next hike at one of these mountain
                           trails</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img18.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Hotel industry announces $5 million</a></h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img19.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">The best way to shampoo curly hair</a></h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <div class="row">
                  <div class="col mt-3">
                     <a class="text-uppercase section-title-link" href="/category">
                        View all posts (11)
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                           </path>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4  pb-3">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title-block d-flex pb-3">
                        <h3 class="section-widget-title">Receipe</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img20.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Classic Pogi Kimchi (Whole Napa Cabbage
                           Kimchi)</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img21.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Tourist hits jackpot at airport slot
                           machine</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img22.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Alaska Airlines ordered to pay $3.2 million</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <div class="row">
                  <div class="col mt-3">
                     <a class="text-uppercase section-title-link" href="/category">
                        View all posts (17)
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                           </path>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4  pb-3">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title-block d-flex pb-3">
                        <h3 class="section-widget-title">National</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img23.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Delta passenger hit flight attendant after mask
                           dispute</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img24.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">United Airlines investigates Ted Cruz's </a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <article class="blog-style5 d-flex align-items-center">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/blog-img25.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">How to talk to your family, friends about
                           racism</a>
                     </h6>
                     <div class="post-meta">
                        <span class="date-info small">

                           <span>2 mins to read</span>
                        </span>
                     </div>
                  </div>
               </article>
               <div class="row">
                  <div class="col mt-3">
                     <a class="text-uppercase section-title-link" href="/category">
                        View all posts (9)
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                           </path>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <div class="row pt-2">
            <div class="col-md-12">
               <div class="section-title-block d-flex pb-3">
                  <h3 class="section-widget-title">Fashion</h3>
                  <a class="text-uppercase section-title-link" href="/category">
                     See all
                     <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 13.5h17.79l-5.445 6.54a1.502 1.502 0 102.31 1.92l7.5-9a1.78 1.78 0 00.135-.226c0-.075.075-.12.105-.195A1.5 1.5 0 0024 12a1.499 1.499 0 00-.105-.54c0-.075-.075-.12-.105-.195a1.766 1.766 0 00-.135-.225l-7.5-9A1.499 1.499 0 0015 1.5a1.5 1.5 0 00-1.155 2.46l5.445 6.54H1.5a1.5 1.5 0 100 3z">
                        </path>
                     </svg>
                  </a>
               </div>
            </div>

            <div class="col-md-6">
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-hover-style-1 image-frame">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img31.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Fashion</a>
                        <h4><a href="/single">The best jackets to buy for spring 2021</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6">
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-hover-style-1 image-frame">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img28.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Fashion</a>
                        <h4><a href="/single">Fab fleece or posh puffer? How the style set stay toasty
                           </a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img2.jpg')}}" alt="M. Robert" data-bs-toggle="tooltip" data-bs-placement="top" title="M. Robert"> M.
                                          Robert</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6">
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-hover-style-1 image-frame">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img29.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Fashion</a>
                        <h4><a href="/single">The truth about working for Topshop’s top branch</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern"> Joe Bern</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6">
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-hover-style-1 image-frame">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/blog-img30.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Fashion</a>
                        <h4><a href="/single">Rishi told hike in business tax 'choke recovery'</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img3.jpg')}}" alt="C. Wood" data-bs-toggle="tooltip" data-bs-placement="top" title="C. Wood"> C. Wood</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-6"> <span class="date-info small  float-lg-end">

                                 <span>1 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>

      </div>
   </div>

   <div class="cta-area py-5 bg-light">

      <ul class="circles">
        <li><i class="fa fa-envelope-open fa-5x"></i></li>
        <li><i class="fa fa-envelope fa-4x"></i></li>
        <li><i class="fa fa-envelope fa-3x"></i></li>
        <li><i class="fa fa-envelope-open fa-2x"></i></li>
        <li><i class="fa fa-envelope fa-1x"></i></li>
        <li><i class="fa fa-envelope fa-2x"></i></li>
        <li><i class="fa fa-envelope fa-1x"></i></li>
        <li><i class="fa fa-envelope fa-3x"></i></li>
        <li><i class="fa fa-envelope fa-2x"></i></li>
        <li><i class="fa fa-envelope fa-5x"></i></li>
      </ul>

      <div class="container text-center z-index-10 position-relative  ">
        <div class="row">
          <div class="col-md-8 m-auto">
            <h2 class="text-secondary">Subscribe to see what we're thinking</h2>
            <p>Subscribe to get access to premium content or contact us if you have any questions.</p>
            <a href="#" class="btn btn-outline-light bg-danger text-white box-hover">Subscribe Now <i class="fas fa-envelope-open-text ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  <!--/// Footer Area /// -->
  <footer class="footer-area pt-5 pb-2">
      <div class="container">
          <div class="row">
              <div class="col-xxl-5 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3  d-flex align-items-center">
                  <div class="footer-widget pe-2">
                      <img class="footer-logo mb-3" src="{{asset('img/footer-brand.png')}}" alt="">

                      <p>Newsfeed is well optimized template for any kinds of newspaper, blog, magazine etc website</p>

                  </div>
              </div>
              <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3">
                  <div class="footer-widget">
                      <h4 class="mb-2">Navigation</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Advertisement</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3">
                  <div class="footer-widget">
                      <h4 class="mb-2">Social Media</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#"><span class="icon"><i class="fab fa-facebook-f"></i></span>Facebook</a></li>
                          <li><a href="#"><span class="icon"><i class="fab fa-twitter"></i></span>Twitter</a></li>
                          <li><a href="#"><span class="icon"><i class="fab fa-instagram"></i></span>Instagram</a></li>
                          <li><a href="#"><span class="icon"><i class="fab fa-linkedin"></i></span>Linkedin</a></li>
                      </ul>
                  </div>
              </div>

              <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3 ">
                  <div class="footer-widget">
                      <h4 class="mb-2">Contact Info</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#"><span class="icon"><i class="fas fa-map-pin"></i></span>New S. Sales Road, Toronto, CA</a></li>
                          <li><a href="#"><span class="icon"><i class="fas fa-envelope-open"></i></span>support@themeix.com</a></li>
                          <li><a href="#"><span class="icon"><i class="fas fa-phone"></i></span>+1 (123) 123 456</a></li>
                          <li><a href="#"><span class="icon"><i class="fas fa-fax"></i></span>+1 (123) 123 456</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 mt-4 border-1 border-top pt-2 border-light">
                  <div class="footer-copyright text-sm  text-center"> <span>
                          <p>©<span id="spanYear"></span> Newsfeed -
                              <span>Developed with <i class="fa fa-heart text-danger"></i> by <a target="_blank" href="https://themeix.com">Themeix</a> <br>&amp; </span><span class="small">Published with <a target="_blank" href="https://getbootstrap.com/">Bootstrap 5</a></span>
                          </p>
                      </span></div>
              </div>
          </div>
          <a href="#" class="footer-back"><i class="fas fa-chevron-up"></i></a>
      </div>
  </footer>

</body></html>
