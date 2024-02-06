<?php

$solarLink = "https://www.twck93j.com/QL3F2/3QQG7/?uid=10&sub1=smartconsumerinsights";
$roofingLink = "https://www.twck93j.com/QL3F2/2CTPL/?uid=9&sub1=smartconsumerinsights";
$tubsLink = "https://www.twck93j.com/QL3F2/D42TT/?uid=11&sub1=smartconsumerinsights";
$windowsLink = "https://www.twck93j.com/QL3F2/55M6S/?sub1=smartconsumerinsights";
$astrologyLink = "https://www.twck93j.com/QL3F2/FGXLG/?uid=7&sub1=smartconsumerinsights";
$homeServicesLink = "https://foreverhomeplus.com";

function carbonDate($daysToSubtract){
    return \Carbon\Carbon::now()->subDays($daysToSubtract)->format('F j, Y');
}
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
                     <li class="nav-item"><a class="nav-link" href="{{$solarLink}}">Solar</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Roofing</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Windows</a></li>
                     <li class="nav-item"><a class="nav-link" href="/blog">Tubs</a></li>
                     <li class="nav-item"><a class="nav-link" href="/contact">Horoscopes</a></li>
                     <li class="nav-item"><a class="nav-link" href="/contact">Mortgage Refinance</a></li>
                     <li class="nav-item"><a class="nav-link" href="/contact">Dish</a></li>
                     <li class="nav-item"><a class="nav-link" href="/contact">Home Security</a></li>
					 <li class="nav-item"><a class="nav-link" href="">FREE Quotes<span>NEW</span></a></li>
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
                           <h2><a href="{{$solarLink}}">Homeowners: Switch to Solar for Zero Down and Save Big</a>
                           </h2>
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="author-block">
                                       <ul class="avatar list-inline mb-0">
                                           <li class="list-inline-item"><a class="small" href="{{$solarLink}}"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="col-lg-6"> <span class="date-info small  float-lg-end">
                              <span>{{carbonDate(0)}}</span>
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
                               <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp5.jpg')}}" alt="image"></a>
                           </div>
                           <div class="card-body  px-0">
                               <h6><a href="/single">Unlock Significant Savings: Upgrade to Stylish Windows with No Initial Investment</a>
                               </h6>
                           </div>
                       </div>
                   </article>
                   <article class="blog-style4 ">
                       <div class="card border-0">
                           <div class="blog-post-image image-hover-style-1">
                               <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp4.jpg')}}" alt="image"></a>
                           </div>
                           <div class="card-body px-0">
                               <h6><a href="/single">Shield Your Home with $0 Down Roofing Solutions for Ultimate Protection</a>
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
                                   <h6 class="mb-1"><a href="{{$solarLink}}">7 Surprising Benefits of Solar Energy for Your Home</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">1 hour ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">New Beginnings Aligned: Introduce Astrology into Your Daily Life</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">2 hours ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">Immerse Yourself in Luxury: The Tubs You Deserve</a>
                                   </h6>
                                   <time datetime="2021-02-14 20:00" class="small">1 day ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">10 Facts That Will Make You Rethink Your Home's Roof</a></h6>
                                   <time datetime="2021-02-14 20:00" class="small">3 days ago</time>
                               </article>
                           </li>
                           <li class="list-group-item">
                               <article class="list-blog">
                                   <h6 class="mb-1"><a href="/single">Quietly Elegant: How to Transform Your Home with New Windows</a>
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
         <div class="text-center  themeix-ads"><a href="#"><img class="lazyload" src="{{asset('img/sci-hp37.jpg')}}" alt="image"></a>
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
                     <h3 class="section-widget-title">News</h3>
                  </div>
               </div>
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp6.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Horoscope</a>
                        <h4><a href="/single">Unlock Your Celestial Path with a Free Horoscope</a>
                        </h4>
                        <p>Discover the cosmic secrets that shape your destiny. Navigate life with celestial insights tailored just for you.
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp7.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Walk-In Tubs</a>
                        <h4><a href="/single">Escape to Tranquility: Tub Makeover for Your Home Retreat</a>
                        </h4>
                        <p>Create a retreat within your home. Transform your bathroom into a sanctuary of tranquility
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href=""><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                        <a href="{{$solarLink}}"> <img class="lazyload" src="{{asset('img/sci-hp8.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="{{$solarLink}}">Solar</a>
                        <h4><a href="{{$solarLink}}">Power Up Your Home</a>
                        </h4>
                        <p>Uncover the brilliance of sustainable energy and power up your home with the sun's rays</p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp10.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Roofing</a>
                        <h4><a href="/single">Sheltered Elegance: Your Home, Your Roofing Upgrade</a>
                        </h4>
                        <p>Give your home the care it deserves with a thorough roofing analysis. Elevate your living space with insights that transform your roof into a masterpiece
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp9.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Windows</a>
                        <h4><a href="/single">Panoramic Elegance: Elevate Your Home with Expert Window Makeovers</a>
                        </h4>
                        <p>Transform your view with expert window makeovers. Elevate your home's elegance and create a panoramic vista from within with insightful enhancements
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                        <a href="{{$solarLink}}"> <img class="lazyload" src="{{asset('img/sci-hp11.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="{{$solarLink}}">Solar</a>
                        <h4><a href="{{$solarLink}}">Sun-Driven Savings: Elevate Your Home with Expert Solar Upgrades</a>
                        </h4>
                        <p>Experience the future of energy with expert solar upgrades. Transform your home and enjoy significant savings on your energy bills with insightful guidance
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp12.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-primary" href="/category">Roofing</a>
                        <h4><a href="/single">Above and Beyond: Explore Insightful Roofing Assessments</a>
                        </h4>
                        <p>Redefine your living experience with insightful roofing assessments. Elevate your home's protection and aesthetics with expert insights delivered to your doorstep
                        </p>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/sci-hp34.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Pong Yang</a></li>
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
                              <h3 class="section-widget-title">Did you know..</h3>
                           </div>
                        </div>
                     </div>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="/single">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/sci-hp13.jpg')}}" data-src="" alt="Post Title Here">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Dive into the mysteries of the cosmos with our Astrology Horoscopes</a>
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
                              <img class="lazyload post-img" src="{{asset('img/sci-hp14.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Pamper yourself with Tub upgrades – because a little luxury goes a long way</a></h6>
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
                              <img class="lazyload post-img" src="{{asset('img/sci-hp15.jpg')}}" >
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Redefine living with Window enhancements – style meets energy efficiency</a>
                           </h6>
                           <div class="post-meta">
                              <span class="date-info small">

                                 <span>2 mins to read</span>
                              </span>
                           </div>
                        </div>
                     </article>
                     <article class="blog-style5 d-flex  d-md-block d-xl-flex align-items-center">
                        <a aria-label="Post Title Here" href="{{$solarLink}}">
                           <div class="post-img-wrap position-relative overflow-hidden">
                              <img class="lazyload post-img" src="{{asset('img/sci-hp16.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="{{$solarLink}}">Amp up your home with our Solar solutions – turning sunlight into savings</a>
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
                              <img class="lazyload post-img" src="{{asset('img/sci-hp17.jpg')}}">
                           </div>
                        </a>
                        <div class="post-content pt-md-2 pt-xl-0 pt-0">
                           <h6 class="post-title"><a href="/single">Give your home a royal crown with our Roofing solutions – it's a game-changer</a>
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
                                  <img class="lazyload post-img" src="{{asset('img/sci-hp38.jpg')}}">
                              </div>
                          </a>
                          <div class="post-content pt-md-2 pt-xl-0 pt-0">
                              <h6 class="post-title"><a href="/single">Crown Your Home Entertainment – Satellite Dish Solutions, a Majestic Game-Changer</a>
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
                                  <img class="lazyload post-img" src="{{asset('img/sci-hp39.jpg')}}">
                              </div>
                          </a>
                          <div class="post-content pt-md-2 pt-xl-0 pt-0">
                              <h6 class="post-title"><a href="/single">Discover Savings Sovereignty: Mortgage Refinance – A Home Finance Revolution</a>
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
                     </ul>
                     <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                           <ul class="counter-post list-inline">
                              <li class="counter-post-item">
                                 <a href="/single">How can I understand my zodiac sign's potential?</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How do I add a bit of luxury to my bathroom?</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="{{$solarLink}}">How do I save money by using solar power at home?</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How do I make my home look nicer with new windows?</a>
                              </li>
                              <li class="counter-post-item">
                                 <a href="/single">How can I give my house a quick facelift with a new roof?</a>
                              </li>
                               <li class="counter-post-item">
                                 <a href="/single">What are the quickest steps to bolster my home's security for peace of mind?</a>
                              </li>
                               <li class="counter-post-item">
                                 <a href="/single">What's the fastest route to a superior TV setup with a new satellite dish?</a>
                              </li>
                               <li class="counter-post-item">
                                 <a href="/single">Looking for a rapid financial facelift – any advice on mortgage refinance options?</a>
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
                              <h3 class="section-widget-title">Check</h3>
                           </div>
                        </div>
                     </div>
                     <ul class="tag-cloud list-inline">
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="{{$solarLink}}">Solar</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Roofing</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Walk-In Tubs</a></li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Windows</a>
                        </li>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Astrology</a>
                         <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Dish</a>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Mortgage Refinance</a>
                        <li class="list-inline-item"><a class="btn bg-light text-secondary bg-hover-danger text-hover-white bg-hover-danger text-hover-white" href="/category">Home Security</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget mb-3 border border-light rounded">
                  <div class="wrapper">
                     <h3>Poll / Vote</h3>
                     <p>Who do you think is the smartest zodiac sign?</p>
                     <form action="#" class="forms">
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="">
                           <label class="form-check-label" for="exampleRadios1">
                              Cancer
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                           <label class="form-check-label" for="exampleRadios2">
                              Pisces
                           </label>
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
                  <h3 class="section-widget-title">Consumers Pick</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6">
               <article class="blog-style3 border-0 card mb-4 position-relative">
                  <div class="feature-image">
                     <div class="image-frame image-hover-style-1">
                        <a href="{{$solarLink}}"> <img class="lazyload" src="{{asset('img/sci-hp18.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body">
                     <a class="badge bg-danger" href="{{$homeServicesLink}}">Home Services</a>
                     <h2><a href="{{$solarLink}}">10 reasons why you should upgrade to solar panels ASAP</a></h2>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="author-block">
                              <ul class="avatar list-inline mb-0">
                                 <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp19.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body">
                     <a class="badge bg-secondary" href="/category">Home Services</a>
                     <h2><a href="/single">Want your roof to look like this ? CLICK here </a></h2>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="author-block">
                              <ul class="avatar list-inline mb-0">
                                 <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
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
                        <h3 class="section-widget-title">Astrology</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/sci-hp20.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Embrace your cosmic potential and discover zodiac secrets</a>
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp21.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Dive into the mysteries of the cosmos</a></h6>
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp22.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Uncover your cosmic journey – where the stars share exclusive secrets just for you</a></h6>
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
                        View more
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
                        <h3 class="section-widget-title">Walk-In Tubs</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/sci-hp23.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Pamper yourself with Tub upgrades
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp24.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Elevate your bath time with Tub transformations
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp25.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Blissful baths ahead with our Tub solutions</a>
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
                        View more
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
                        <h3 class="section-widget-title">Windows</h3>
                     </div>
                  </div>
               </div>
               <article class="blog-style5 d-flex align-items-center mb-3">
                  <a aria-label="Post Title Here" href="/single">
                     <div class="post-img-wrap position-relative overflow-hidden">
                        <img class="lazyload post-img" src="{{asset('img/sci-hp26.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Upgrade your outlook with Windows to Wow</a>
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp27.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">See life through a new lens with Window upgrades</a>
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
                        <img class="lazyload post-img" src="{{asset('img/sci-hp28.jpg')}}" alt="Post Title Here">
                     </div>
                  </a>
                  <div class="post-content">
                     <h6 class="post-title"><a href="/single">Light up your space with Window insights</a>
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
                        View more
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
                  <h3 class="section-widget-title">Top Notch</h3>
               </div>
            </div>

            <div class="col-md-6">
               <article class="blog-style2 card mb-4 ">
                  <div class="feature-image">
                     <div class="image-hover-style-1 image-frame">
                        <a href="{{$solarLink}}"> <img class="lazyload" src="{{asset('img/sci-hp29.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="{{$solarLink}}">Solar</a>
                        <h4><a href="{{$solarLink}}">Your dream solar paneled house coming to life</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp30.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Roofing</a>
                        <h4><a href="/single">Keep your neighbors jealous
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp31.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Astrology</a>
                        <h4><a href="/single">Know the secrets of the universe</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img8.jpg')}}" alt="Joe Bern" data-bs-toggle="tooltip" data-bs-placement="top" title="Joe Bern">Joe Bern</a></li>
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
                        <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp32.jpg')}}" alt="image"></a>
                     </div>
                  </div>
                  <div class="card-body  d-md-flex align-items-center">
                     <div class="card-flex-content">
                        <a class="badge bg-info" href="/category">Walk-In Tubs</a>
                        <h4><a href="/single">Take your mind off the hardships during the day in your brand new tub</a>
                        </h4>

                        <div class="row">
                           <div class="col-lg-6">
                              <div class="author-block">
                                 <ul class="avatar list-inline mb-0">
                                    <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img3.jpg')}}" alt="C. Wood" data-bs-toggle="tooltip" data-bs-placement="top" title="C. Wood">Tyler Mayk</a></li>
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
                             <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp32.jpg')}}" alt="image"></a>
                         </div>
                     </div>
                     <div class="card-body  d-md-flex align-items-center">
                         <div class="card-flex-content">
                             <a class="badge bg-info" href="/category">Walk-In Tubs</a>
                             <h4><a href="/single">Take your mind off the hardships during the day in your brand new tub</a>
                             </h4>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="author-block">
                                         <ul class="avatar list-inline mb-0">
                                             <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img3.jpg')}}" alt="C. Wood" data-bs-toggle="tooltip" data-bs-placement="top" title="C. Wood">Tyler Mayk</a></li>
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
                             <a href="/single"> <img class="lazyload" src="{{asset('img/sci-hp32.jpg')}}" alt="image"></a>
                         </div>
                     </div>
                     <div class="card-body  d-md-flex align-items-center">
                         <div class="card-flex-content">
                             <a class="badge bg-info" href="/category">Walk-In Tubs</a>
                             <h4><a href="/single">Take your mind off the hardships during the day in your brand new tub</a>
                             </h4>

                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="author-block">
                                         <ul class="avatar list-inline mb-0">
                                             <li class="list-inline-item"><a class="small" href="/author"><img src="{{asset('img/author-img3.jpg')}}" alt="C. Wood" data-bs-toggle="tooltip" data-bs-placement="top" title="C. Wood">Tyler Mayk</a></li>
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
        <li><i class="fa fa-home fa-5x"></i></li>
        <li><i class="fa fa-home fa-4x"></i></li>
        <li><i class="fa fa-home fa-3x"></i></li>
        <li><i class="fa fa-home fa-2x"></i></li>
        <li><i class="fa fa-home fa-1x"></i></li>
        <li><i class="fa fa-home fa-2x"></i></li>
        <li><i class="fa fa-home fa-1x"></i></li>
        <li><i class="fa fa-home fa-3x"></i></li>
        <li><i class="fa fa-home fa-2x"></i></li>
        <li><i class="fa fa-home fa-5x"></i></li>
      </ul>

      <div class="container text-center z-index-10 position-relative  ">
        <div class="row">
          <div class="col-md-8 m-auto">
            <h2 class="text-secondary">Find quality contractors near you</h2>
            <p>Make informed decisions and save more by comparing FREE quotes!</p>
            <a href="#" class="btn btn-outline-light bg-danger text-white box-hover">Get Started!</a>
          </div>
        </div>
      </div>
    </div>
  <!--/// Footer Area /// -->
  <footer class="footer-area pt-5 pb-2">
      <div class="container">
          <div class="row">
              <div class="col-xxl-4 col-xl-2 col-lg-6 col-md-6 col-sm-6 pb-3  d-flex align-items-center">
                  <div class="footer-widget pe-2">
                      <img class="footer-logo mb-3" src="{{asset('img/fhp-logo-hp-new.png')}}" alt="">

                      <p>For expert advice on home services and insightful consumer guidance, trust Smart Consumer Insights – your source for reliable, well-informed content.</p>

                  </div>
              </div>
              <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3">
                  <div class="footer-widget">
                      <h4 class="mb-2">Navigation</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Home Services</a></li>
                          <li><a href="{{$solarLink}}">Solar</a></li>
                          <li><a href="#">Roofing</a></li>
                          <li><a href="#">Walk-In Tubs</a></li>
                          <li><a href="#">Windows</a></li>
                          <li><a href="#">Astrology</a></li>
                          <li><a href="#">Mortgage Refinance</a></li>
                          <li><a href="#">Dish</a></li>
                          <li><a href="#">Home Security</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-sm-6 pb-3">
                  <div class="footer-widget">
                      <h4 class="mb-2">Info</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Terms Of Use</a></li>
                          <li><a href="#">Disclaimer</a></li>
                          <li><a href="#">CCPA</a></li>
                          <li><a href="#">Do Not Sell My Information</a></li>
                      </ul>
                  </div>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-8 col-md-6 col-sm-6 pb-3 ">
                  <div class="footer-widget">
                      <h4 class="mb-2">Contact Info</h4>
                      <ul class="footer-nav list-inline">
                          <li><a href="#"><span class="icon"><i class="fas fa-envelope-open"></i></span>info@smartconsumerinsights.com</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <a href="#" class="footer-back"><i class="fas fa-chevron-up"></i></a>
      </div>
  </footer>

</body></html>
