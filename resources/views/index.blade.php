<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kopiqu</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('/img/favicon.jpg')}}" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="">
                  <h1><span>K</span>opiqu <i class ="fa fa-coffee"></i></h1></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#hotitem">Hot Item</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Product</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i> Cart</a>
                  </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown"><a href="" data-toggle="dropdown" class="dropdown-toggle">{{Auth::user()->name}}</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-2 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title1">"Coffee is a beverage that puts one to sleep when not drank."</h1>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h2 class="title2">- Alphonse Allais</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-2 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title1">"I never drink coffee at lunch. I find it keeps me awake for the afternoon."</h1>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h2 class="title2">- Ronald Regan</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-2 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title1">"A mathematician is a device for turning coffee into theorems."</h1>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h2 class="title2">- Alfred Renyi</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
<!-- Start new item area -->
<div id="hotitem" class="our-team-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>New Item</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="team-top">
          @foreach($newProduct as $newP)
              <form method="post">
                  @csrf

              <input type="hidden" name="id" value="{{ $newP->idProduk }}"/>
              <input type="submit" value="add"/>
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="single-team-member">
                      <div class="team-img">
                          <a href="{{route('user.addToCart')}}">
                              <img src="storage/product_images/{{$newP->foto}}" alt="">
                          </a>
                          <div class="team-social-icon">
                              <a href="{{route('user.addToCart')}}">
                                  <i class="fa fa-shopping-cart fa-3x"></i>
                              </a>
                          </div>
                      </div>
                      <div class="team-content text-center">
                          <h4>{{$newP->namaP}}</h4>
                          <p>{{$newP->deskripsi}}</p>
                          <p>Rp. {{$newP->harga}}</p>
                      </div>
                  </div>
              </div>
              </form>
          @endforeach
      </div>
    </div>
  </div>
</div>
<!-- End new item area -->



<!-- Start portfolio Area -->
<div id="portfolio" class="portfolio-area area-padding fix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Our Coffee</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Start Portfolio -page -->
      <div class="awesome-project-1 fix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="awesome-menu ">
            <ul class="project-menu">
              <li>
                <a href="#" class="active" data-filter="*">All</a>
              </li>
                @foreach($allCategories as $cat)
                    <li>
                        <a href="#" data-filter=".{{$cat->name}}">{{$cat->name}}</a>
                    </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="awesome-project-content">
        <!-- single-awesome-project start -->
          @foreach($allProduct as $product)
              <form method="post" action="">
                  @csrf
                  <input type="hidden" name="id" value="{{ $product->idProduk }}"/>
                <div class="col-md-4 col-sm-4 col-xs-12 design {{$product->name}}">
                  <div class="single-awesome-project">
                    <div class="awesome-img">
                      <a href="/"><img src="storage/product_images/{{$product->foto}}" alt="" /></a>
                        <div class="add-actions team-img text-center">
                            <div class="project-dec">
                                <a href="/">
                                    <h4><i class="fa fa-shopping-cart fa-2x"></i></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                      <div class="team-content text-center">
                          <h4>{{$product->namaP}}</h4>
                          <p>{{$product->deskripsi}}</p>
                          <p>Rp. {{$product->harga}}</p>
                          <input type="submit" value="add"/>
                      </div>
                  </div>
                </div>
              </form>
          @endforeach
      </div>
    </div>
  </div>
</div>
<!-- awesome-portfolio end -->
  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h1>About Kopiqu <i class ="fa fa-coffee"></i></h1>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
				<img src="img/about/1.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">OUR STORY</h4>
              </a>
              <p>
                Established in 2019, Kopiqu is a passionate coffee startups aiming to brew the best specialty coffee for our customer. We want our existence to increase coffee quality for our community.
                Leveraging network and experience, we are using the latest tech for our tools and bean blend. Directly from the selected farmer, high-quality beans are processed and roasted to perfection by ourselves then passed on to our skilled barista,
                excitedly prepare the cup of happiness to be served to you especially.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="services-contents">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
									<i class="services-icon fa fa-code"></i>
                  <h4>Working Space</h4>
                  <p>
                    Memiliki tempat untuk mengerjakan tugas anda dengan nyaman
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
									<i class="services-icon fa fa-clock-o"></i>
                  <h4>Open 24 Hours Everyday</h4>
                  <p>
                    Kami siap melayani anda kapanpun
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
									<i class="services-icon fa fa-wifi"></i>
                  <h4>Wifi Cepat</h4>
                  <p>
                    Wifi dengan speed 100 Mbps
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

<!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>K</span>opiqu</h2>
                </div>

                <p>We’re not just passionate purveyors of coffee, but everything else that goes with a full and rewarding coffeehouse experience. We also offer a selection of premium teas, fine pastries and other delectable treats to please the taste buds. And the music you hear in store is chosen for its artistry and appeal.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Untuk keperluan, silahkan hubungi kami via:
                </p>
                <div class="footer-contacts">
                  <p><span>Telepon:</span>14045</p>
                  <p><span>Email:</span> kopiqu@coffee.com</p>
                  <p><span>Working Hours:</span>24 hours</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Kopiqu</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>
</body>

</html>
