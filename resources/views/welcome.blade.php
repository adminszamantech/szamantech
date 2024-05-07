<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SZamanTech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1 class="text-light"><a href="{{ route('index.homepage') }}"><span>SzamanTech</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
    <a href="{{ route('index.homepage') }}"><img src="{{ asset('uploads/logo/logo3.png') }}"  alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="{{route('index.mission-and-vision')}}">Mission & Vision</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>-->
          <!--  <ul>-->
          <!--    <li><a href="#">Drop Down 1</a></li>-->
          <!--    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
          <!--      <ul>-->
          <!--        <li><a href="#">Deep Drop Down 1</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 2</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 3</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 4</a></li>-->
          <!--        <li><a href="#">Deep Drop Down 5</a></li>-->
          <!--      </ul>-->
          <!--    </li>-->
          <!--    <li><a href="#">Drop Down 2</a></li>-->
          <!--    <li><a href="#">Drop Down 3</a></li>-->
          <!--    <li><a href="#">Drop Down 4</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Better digital experience with SzamanTech</h1>
          <h2>We are team of talented designer & developers making websites & other applications !</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
              @if(isset($whoweare->image))
                  <img src="{{ asset($whoweare->image) }}" class="img-fluid" alt="" data-aos="zoom-in">
              @else
                  <img src="https://placehold.co/526x344" class="img-fluid" alt="" data-aos="zoom-in">
              @endif

          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">{{ isset($whoweare->title) ? $whoweare->title : 'This is title' }}</h3>
            <p data-aos="fade-up" data-aos-delay="100">{{ isset($whoweare->long_description) ? $whoweare->long_description : 'This is' }}</p>
            <!--<div class="row">-->
            <!--  <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">-->
            <!--    <i class="bx bx-receipt"></i>-->
            <!--    <h4>{{ isset($whoweare->short_title_one) ? $whoweare->short_title_one : 'This description' }}</h4>-->
            <!--    <p>{{ isset($whoweare->short_desc_one) ? $whoweare->short_desc_one : 'this is' }}</p>-->
            <!--  </div>-->
            <!--  <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">-->
            <!--    <i class="bx bx-cube-alt"></i>-->
            <!--    <h4>{{ isset($whoweare->short_title_two) ? $whoweare->short_title_two : 'This is' }}</h4>-->
            <!--    <p>{{ isset($whoweare->short_desc_two) ? $whoweare->short_desc_two : 'This is' }}</p>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>{{ isset($service->title) ? $service->title : 'This it' }}</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">{{ isset($service->short_title_one) ? $service->short_title_one : 'This is' }}</a></h4>
              <p class="description">{{ isset($service->short_desc_one) ? $service->short_desc_one : 'This  is' }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">{{ isset($service->short_title_two) ? $service->short_title_two : 'This is' }}</a></h4>
              <p class="description">{{ isset($service->short_desc_two) ? $service->short_desc_two : 'this is' }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">{{ isset($service->short_title_three) ? $service->short_title_three : 'This is' }}</a></h4>
              <p class="description">{{ isset($service->short_desc_three) ? $service->short_desc_three : 'This is' }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">{{ isset($service->short_title_four) ? $service->short_title_four : 'this is' }}</a></h4>
              <p class="description">{{ isset($service->short_desc_four) ? $service->short_desc_four : 'This is' }}</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check out our beautifull portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
{{--              <li data-filter=".filter-card">Card</li>--}}
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            @if(count($app_developments) > 0)
                @foreach($app_developments as $app_development)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset($app_development->image) }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset($app_development->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $app_development->title }}"><i class="bi bi-plus"></i></a>
                                <a href="{{ $app_development->portfolio_link }}" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $app_development->title }}</h4>
                                <p>{{ $app_development->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

           @if(count($web_developments) > 0)
                @foreach($web_developments as $web_development)
                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                      <img src="{{ asset($web_development->image) }}" class="img-fluid" alt="">
                      <div class="portfolio-links">
                        <a href="{{ asset($web_development->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $web_development->title }}"><i class="bi bi-plus"></i></a>
                        <a href="{{ $web_development->portfolio_link }}" title="More Details"><i class="bi bi-link"></i></a>
                      </div>
                      <div class="portfolio-info">
                        <h4>{{ $web_development->title }}</h4>
                        <p>{{ $web_development->description }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
           @endif


{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-links">--}}
{{--                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>--}}
{{--                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>--}}
{{--              </div>--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Card 1</h4>--}}
{{--                <p>Card</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!--<section id="faq" class="faq section-bg">-->
    <!--  <div class="container" data-aos="fade-up">-->

    <!--    <div class="section-title">-->
    <!--      <h2>F.A.Q</h2>-->
    <!--      <p>Frequently Asked Questions</p>-->
    <!--    </div>-->

    <!--    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq1" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq2" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq3" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq4" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq5" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
    <!--        <div id="faq6" class="collapse" data-bs-parent=".faq-list">-->
    <!--          <p>-->
    <!--            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--    </ul>-->

    <!--  </div>-->
    <!--</section>-->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>

        <div class="row">

            @if(count($teams) > 0)
                @foreach($teams as $team)
                    <div class="col-md-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member">
                            @if($team->image !== null)
                                <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                            @else
                                <img src="https://placehold.co/306x306" class="img-fluid" alt="">
                            @endif
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{ $team->name }}</h4>
                                    <span>{{ $team->designation }}</span>
                                </div>
                                <div class="social">
                                    <a href="{{ $team->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $team->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
          <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">

              @if(count($clients) > 0)
                  @foreach($clients as $client)
                      <div class="swiper-slide"><img src="{{ asset($client->image) }}" class="img-fluid" alt=""></div>
                  @endforeach
              @else
                  <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                  <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              @endif

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">

              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ isset($contactus->address) ? $contactus->address : 'this is' }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ isset($contactus->email) ? $contactus->email : 'email.' }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ isset($contactus->phone) ? $contactus->phone : 'phone' }}</p>
              </div>
              <iframe src="{{ isset($contactus->map) ? $contactus->map : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.697208913179!2d90.38482509265083!3d23.752777614674773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b958fd49ffbd%3A0x9c54cbb11ea61300!2sdhaka%20prokash!5e0!3m2!1sen!2sbd!4v1710852677306!5m2!1sen!2sbd' }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
{{--            <form action="{{ route('send.message') }}" method="POST" role="form" class="php-email-form">--}}
{{--            <form action="{{ route('send.message') }}" method="POST" id="messageForm" class="php-email-form">--}}
            <form method="POST" id="messageForm" class="php-email-form">
{{--                @csrf--}}
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                    <small class="text-danger" id="nameError"></small>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    <small class="text-danger" id="emailError"></small>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your subject" required>
                  <small class="text-danger" id="subjectError"></small>
              </div>
              <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="10" required placeholder="Enter your message"></textarea>
                  <small class="text-danger" id="messageError"></small>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="row">
                  <div class="col-md-8">
                      <div id="successMsg" style="color: #eb5d1e" class="d-none" role="alert">sdfsdf</div>
                  </div>
                  <div class="col-md-4 text-center">
                      <button type="submit" id="messageForm_btn" >Send Message</button>
                  </div>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>You will be notified instantly when any latest news will come from us.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{ isset($company->company_name) ? $company->company_name : ''  }}</h3>
            <p>{{ isset($company->address) ? $company->address : ''  }}
                <br>
              <strong>Phone:</strong> {{ isset($company->phone) ? $company->phone : 'phone'  }}<br>
              <strong>Email:</strong> {{ isset($company->email) ? $company->email : 'email'  }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Check out our activities and get connected through social networks</p>
            <div class="social-links mt-3">
                @if(isset($social_media->twitter))
                    <a href="{{ $social_media->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                @else
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                @endif
                @if(isset($social_media->facebook))
                    <a href="{{ $social_media->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                @else
                   <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                @endif
                @if(isset($social_media->instagram))
                    <a href="{{ $social_media->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                @else
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                @endif
               @if(isset($social_media->instagram))
                    <a href="{{ $social_media->skype }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                    @else
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                @endif
                @if(isset($social_media->linkedin))
                        <a href="{{ $social_media->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    @else
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                @endif

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; {{date('Y')}} Copyright <strong><span>{{ isset($company->company_name) ? $company->company_name : 'Company name'  }}</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
{{--  <script src="assets/vendor/php-email-form/validate.js"></script>--}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $("#messageForm_btn").click(function(e){

          e.preventDefault();
          // Getting Form Data
          let name = $('#name').val();
          let email = $('#email').val();
          let subject = $('#subject').val();
          let message = $('#message').val();
          // Form Validation
          if (!name.length > 0){
              $("#nameError").text('Name field is required!');
          }else if(!email.length > 0){
              $("#emailError").text('Email field is required!');
          }else if(!subject.length > 0){
              $("#subjectError").text('Subject field is required!');
          } else if(!message.length > 0){
              $("#messageError").text('Subject field is required!');
          } else{

              // Form Data
              let formData = {
                  name: name,
                  email: email,
                  subject: subject,
                  message: message,
              }

              $.ajax({
                  url: "{{ route('send.message') }}",
                  type: "POST",
                  data : formData,
                  success: function(response) {
                      $("#successMsg").text(response.success).removeClass('d-none');
                      $('#messageForm')[0].reset();
                  },
              });
          }
      })
  </script>

</body>

</html>
