<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyTAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/welcome.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/BQ5rqoUxsfQGHC35jWa5Ub/icons.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top"><a href="{{url('/')}}" class="navbar-brand">MyTAL</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
            <li class="nav-item"><a href="#browser" class="nav-link link-scroll">How it works</a></li>
            <li class="nav-item"><a href="#features" class="nav-link link-scroll">Learn more</a></li>
            <li class="nav-item"><a href="#extra-features" class="nav-link link-scroll">More features</a></li>
            <li class="nav-item"><a href="#about-us" class="nav-link link-scroll">About Us</a></li>
          </ul>
          <div class="navbar-text">
            <!-- Button trigger modal-->
            <a href="/app/apk-inside-here.apk" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Download The App Now</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Modal-->
    {{-- <div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="exampleModalLabel" class="modal-title">Sign Up Modal</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="signupform" action="#">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name" id="fullname">
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" placeholder="User Name" id="username">
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email Address" id="email">
              </div>
              <div class="form-group">
                <button type="submit" class="submit btn btn-primary btn-shadow btn-gradient">Signup</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}
    <section id="hero" class="hero hero-home bg-gray">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 text order-2 order-lg-1 tag-line">
            <h1>Unlock the value of opinions</h1>
            <p class="hero-text">MyTAL helps brands and businesses understand their customers better and engage with them through advertising research and content.</p>
            <div class="CTA">
                <a href="#features" class="btn btn-primary btn-shadow btn-gradient link-scroll">Learn More</a>
                <a href="/app/apk-inside-here.apk" class="btn btn-outline-primary">Download The App Now</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
              {{-- <img src="img/Macbook.png" alt="..." class="img-fluid"> --}}
              <img src="img/login_nexus5x-portrait.png" alt="..." class="img-fluid brand-image">
          </div>
        </div>
      </div>
    </section>
    <section id="browser" class="browser">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="h3 mb-5">How it works</h2>
            <div class="browser-mockup">
              <div id="nav-tabContent" class="tab-content">
                <div id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab" class="tab-pane fade show active">
                  <img src="img/login_nexus5x-portrait.png" alt="..." class="img-fluid" height="600" width="340">
                </div>
                <div id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab" class="tab-pane fade">
                  <img src="img/profile_view.png" alt="..." class="img-fluid" height="950" width="600">
                </div>
                <div id="nav-third" role="tabpanel" aria-labelledby="nav-third-tab" class="tab-pane fade">
                  <img src="img/survey_view.png" alt="..." class="img-fluid" height="950" width="600">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="myTab" role="tablist" class="nav nav-tabs">
          <div class="row">
            <div class="col-md-4"><a id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-expanded="true" class="nav-item nav-link active"> <span class="number">1</span>Download the app from google play, signup with facebook.</a></div>
            <div class="col-md-4"><a id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" class="nav-item nav-link"> <span class="number">2</span>Complete your profile to get more contents tailored for you.</a></div>
            <div class="col-md-4"><a id="nav-third-tab" data-toggle="tab" href="#nav-third" role="tab" aria-controls="nav-third" class="nav-item nav-link"> <span class="number">3</span>Earn for every survey you take. Its that simple.</a></div>
          </div>
        </div>
      </div>
    </section>
    <section id="about-us" class="about-us bg-gray">
      <div class="container">
        <h2>About Us</h2>
        <div class="row">
          <p class="lead col-lg-10">
              Trace Africa Logistics’ comprehensive online solution is relied on by millions of worldwide cargo movers, carriers, warehouse and material equipment owners/operators and brokers, on a daily basis. Millions of full loads and less than truck loads and trucks are posted to our ‘TraceAfricaConnect’ network annually, making us the largest source of information for available loads and trucks throughout Africa. We are the preferred choice of transportation logistics companies in Africa because we keep trucks loaded and shipments moving. We provide affordable in-truck satellite tracking, messaging, and engine diagnostics as well as reliable GPS trailer tracking to keep the African Supply Chain visible to our clients.
          </p>
        {{-- </div><a href="#" class="btn btn-primary btn-shadow btn-gradient">Discover More</a> --}}
      </div>
    </section>
    <section id="features" class="features">
      <div class="container">
        <div class="row d-flex text-center">
          <h2 class="h3 mb-5 text-center">Plartform features</h2>
        </div>
        <div class="row d-flex align-items-center">
          <div class="text col-lg-6 order-2 order-lg-1">
            <div class="icon"><img src="img/medal.svg" alt="..." class="img-fluid"></div>
            <h4>Dashboard and Statistics</h4>
            <p>For every survey we conduct for you, we have robust dashboard and analytics which lets you look right through the datasets collected.</p>
            {{-- <a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a> --}}
          </div>
          <div class="image col-lg-6 order-1 order-lg-2"><img src="img/my-tal-dash.png" alt="..." class="img-fluid"></div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="image col-lg-6"><img src="img/multi-question.png" alt="..." class="img-fluid"></div>
          <div class="text col-lg-6">
            <div class="icon"><img src="img/hourglass.svg" alt="..." class="img-fluid"></div>
            <h4>Multiple questions per survey</h4>
            <p>Get a full coverage of all of your business queries in just one survey run. We have you covered.</p>
            {{-- <a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a> --}}
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="text col-lg-6 order-2 order-lg-1">
            <div class="icon"><img src="img/cup.svg" alt="..." class="img-fluid"></div>
            <h4>Multiple choice answers</h4>
            <p>Yes, a sandboxed environment lets you prove what you have already been suspecting about your business. Call us now.</p>
            {{-- <a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a> --}}
          </div>
          <div class="image col-lg-6 order-1 order-lg-2"><img src="img/multi-answers.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
    <section id="extra-features" class="extra-features bg-primary">
      <div class="container text-center">
        <header>
          <h2>More great features</h2>
          <div class="row">
            <p class="lead col-lg-8 mx-auto">There are many more greate feature that MyTAL offers.</p>
          </div>
        </header>
        <div class="grid row">
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-diploma"></i></div>
            <h3 class="h5">Statistic</h3>
            <p>Every survey run will be disected for every insight it can offer..</p>
          </div>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-folder-1"></i></div>
            <h3 class="h5">Multiple choice reponses</h3>
            <p>For a more controlled tightly coupled surveys, we have that covered for you.</p>
          </div>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-gears"></i></div>
            <h3 class="h5">Respondents</h3>
            <p>Get insights into your business with our loyal survey takers, always happy to help.</p>
          </div>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-management"></i></div>
            <h3 class="h5">Rewards</h3>
            <p>Greate rewards makes a happy respondent. We reward every repondent for every complete survey they take.</p>
          </div>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-pie-chart"></i></div>
            <h3 class="h5">Multiple questions</h3>
            <p>Multiple questions for every survey created lets you cover every angle of your business assesment.</p>
          </div>
          <div class="item col-lg-4 col-md-6">
            <div class="icon"> <i class="icon-quality"></i></div>
            <h3 class="h5">Pricing</h3>
            <p>We have competative pricing that suits every business survey needs. Reach out to us and we'll talk.</p>
          </div>
        </div>
      </div>
    </section>
    {{-- <section id="testimonials" class="testimonials">
      <div class="container">
        <header class="text-center no-margin-bottom">
          <h2>Happy Clients</h2>
          <p class="lead">There are many variations of passages of Lorem Ipsum available, but the majority have</p>
        </header>
        <div class="owl-carousel owl-theme testimonials-slider">
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Jessica Watson</strong>
              </div>
            </div>
          </div>
          <div class="item-holder">
            <div class="item">
              <div class="avatar"><img src="img/avatar-5.jpg" alt="..." class="img-fluid"></div>
              <div class="text">
                <div class="quote"><img src="img/quote.svg" alt="..." class="img-fluid"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p><strong class="name">Sarrah Wood</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- <section id="newsletter" class="newsletter bg-gray">
      <div class="container text-center">
        <h2>Subscribe to Newsletter</h2>
        <p class="lead">There are many variation passages of lorem ipsum, but the majority have</p>
        <div class="form-holder">
          <form id="newsletterForm" action="#">
            <div class="form-group">
              <input type="email" name="email" id="email" placeholder="Enter Your Email Address">
              <button type="submit" class="btn btn-primary btn-gradient submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </section> --}}
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a class="brand">Trace Africa Logistics</a>
            <ul class="contact-info list-unstyled">
              <li><a href="tel:123456789">Plot 3B Kyambogo Drive Ntinda</a></li>
              <li><a href="mailto:admin@traceafricalogistics.com">admin@traceafricalogistics.com</a></li>
              <li><a href="tel:+256-414-699-185">+256-414-699-185</a></li>
            </ul>
            <ul class="social-icons list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/TraceAfricaLogistics/"
                  target="_blank" title="Facebook"><i class="fa fa-facebook">
                  </i></a>
              </li>
              <li class="list-inline-item"><a href="https://twitter.com/TraceAfricaLog" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              {{-- <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li> --}}
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>More Links</h5>
            <ul class="links list-unstyled">
              <li><a href="{{ url('/login') }}">Platform access</a></li>
              <li><a href="#about-us">About Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Platform</h5>
            <ul class="links list-unstyled">
              <li><a href="#features">Learn more</a></li>
              <li><a href="#extra-features">Features</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5>Social Media</h5>
            <p>These are our official social media platforms.</p>
            <ul class="links list-unstyled">
              <li class="list-inline-item"><a href="https://www.facebook.com/TraceAfricaLogistics/"
                  target="_blank" title="Facebook"><i class="fa fa-facebook">
                  </i></a>
              </li>
              <li class="list-inline-item"><a href="https://twitter.com/TraceAfricaLog" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>&copy; 2017 Trace Africa Logistics.com. All rights reserved.</p>
            </div>
            <div class="col-md-5 text-right">
              <p>Developed By <a href="https://facebook.com/sxambrose">TrustFinity</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
