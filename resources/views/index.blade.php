<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from likeabawz.dk/exill/demo/kitzu/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2022 08:47:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <!-- Title-->
  <title> Personal Portfolio </title>
  <!-- Description-->
  <meta name="description" content="Personal Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('img/favicons/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('img/favicons/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('img/favicons/favicon-16x16.png')}}">
  <!-- Web fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
  <!-- CSS vendors-->
  <link rel="stylesheet" href="{{url('css/bootstrap-custom.css')}}">
  <link rel="stylesheet" href="{{url('css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('css/tiny-slider.css')}}">
  <link rel="stylesheet" href="{{url('css/lity.min.css')}}">
  <link rel="stylesheet" href="{{url('css/simplebar.min.css')}}">
  <link rel="stylesheet" href="{{url('css/jquery.mb.YTPlayer.min.css')}}">
  <!-- Main CSS-->
  <link rel="stylesheet" href="{{url('css/main.css')}}">
  <!-- CSS Color scheme-->
  <link id="color-scheme" rel="stylesheet" href="{{url('css/colors/main-darkgreen.css')}}">
  <!-- Custom CSS (Add your custom CSS styles to this file)-->
  <link rel="stylesheet" href="{{url('css/custom.css')}}">
  <!-- removeIf(customizerDist)-->
  <link rel="stylesheet" href="{{url('../customizer/main.css')}}">
  <!-- endremoveIf(customizerDist)-->
</head>

<body class="theme-dark">
  <!-- Preloader-->
  <div class="preloader">
    <div class="preloader-block">
      <div class="preloader-icon"><span class="loading-dot loading-dot-1"></span><span class="loading-dot loading-dot-2"></span><span class="loading-dot loading-dot-3"></span></div>
    </div>
  </div>
  <div id="overlay-effect"></div>
  <!-- Navbar-->
  <nav class="navbar-expand-md navbar fixed-top" id="navbar"><a class="navbar-brand" data-scroll="" href="#home-area">
      <!-- Navbar Logo-->
      <img class="img-fluid" src="img/logo.png" alt="Logo" width="20px"></a>
    <span class="navbar-menu ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button"><span class="btn-line"></span></span>
    <div class="collapse navbar-collapse order-1 order-lg-0" id="navbarSupportedContent">
      <!-- Navbar menu-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- Home-->
  <section class="home-area element-cover-bg" id="home" style="background-image:url(img/home2.jpg)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
    @foreach($donnees as $donnee)

        <div class="col-12 col-lg-8 home-content text-center">

          <h1 class="home-name">{{ $donnee['nom'] }} <span>{{ $donnee['prenom'] }}</span></h1>

          <h4 class="cd-headline clip home-headline">I’m a <span class="cd-words-wrapper single-headline"><b class="is-visible">Software Engineer</b><b>Developer</b><b>Freelancer</b></span></h4>
        </div>

      </div>
    </div>
    <div class="fixed-wrapper">
      <!-- Languages list-->
      <div class="fixed-block block-left">
       
      </div>
      <!-- Social media icons-->
      <div class="fixed-block block-right">
        <ul class="list-unstyled social-icons">
          <li><a href="{{ $donnee['fb'] }}"><i class="icon ion-logo-facebook"></i></a></li>
          <li><a href="{{ $donnee['ln'] }}"><i class="icon ion-logo-linkedin"></i></a></li>
          <li><a href="{{ $donnee['git'] }}"><i class="icon ion-logo-github"></i></a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- About lightbox-->
  <div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Get to know me</p>
                  <h2 class="section-title">About Me</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Info section-->
            <div class="info-section single-section">
              <div class="row align-items-center">
                <!-- Picture part-->
                <div class="col-12 col-lg-5 info-img"><img src="{{asset('Image/' .$donnee['image'])}}"  width="120px" alt=""></div>
                <!-- Content part-->
                <div class="col-12 col-lg-7 info-content">
                  <div class="content-block">
                    <h2 class="content-subtitle">Who am i?</h2>
                    <h6 class="content-title">I'm {{ $donnee['nom'] }} {{ $donnee['prenom'] }}, a Software Engineer and Web Developer</h6>
                    <div class="content-description">
                      <p>{{ $donnee['description'] }}</p>
                    </div>
                    <address class="content-info">
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Name:</span>
                          <p>{{ $donnee['nom'] }} {{ $donnee['prenom'] }}</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>Email:</span>
                          <p><a href="mailto:emma@example.com">{{ $donnee['email'] }}</a></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-md-6 single-info"><span>Age:</span>
                          <p>{{ $donnee['age'] }}</p>
                        </div>
                        <div class="col-12 col-md-6 single-info"><span>From:</span>
                          <p>{{ $donnee['adresse'] }}</p>
                        </div>
                      </div>
                    </address>
                      <ul class="list-unstyled list-inline content-follow">
                        <li class="list-inline-item"><a href="{{ $donnee['ln'] }}"><i class="icon ion-logo-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="{{ $donnee['git'] }}"><i class="icon ion-logo-github"></i></a></li>
                        <li class="list-inline-item"><a href="{{ $donnee['fb'] }}"><i class="icon ion-logo-facebook"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

            <!-- Services section-->


            <div class="services-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">Services i offer to my clients</p>
                    <h2 class="section-title">My Services</h2>
                  </div>
                </div>
              </div>
              <div class="row">

           
              @foreach($donnees_serv as $donnee)


                <!-- Single service-->
                <div class="col-12 col-md-6 col-lg-4">
                  <div class="single-service"><img src="{{asset('Image/' .$donnee['image'])}}"  width="120px" alt="">
                  <br> <br>
                    <h6 class="service-title">{{ $donnee['titre'] }} </h6>
                    <p class="service-description">{{ $donnee['description'] }} </p>
                  </div>
                </div>
                @endforeach
              
                
              </div>
            </div>
            <!-- Testimonials section-->
           
            <!-- Pricing section-->
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Resume lightbox-->
  <div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Check out my Resume</p>
                  <h2 class="section-title">Resume</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Resume section-->
            <div class="resume-section single-section">
              <div class="row">
                <!-- Education part-->
                <div class="col-12 col-md-6">
                  <div class="col-block education">
                    <h3 class="col-title">Education</h3>
                    @foreach($donnees_educ as $donnee_educ)
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">{{ $donnee_educ['titre'] }}</h5><span class="item-details">{{ $donnee_educ['periode'] }}</span>
                      <p class="item-description">{{ $donnee_educ['description'] }}</p>
                    </div>
                    @endforeach
                   
                   
                  </div>
                </div>
                <!-- Experience part-->
                <div class="col-12 col-md-6">
                  <div class="col-block experience">
                    <h3 class="col-title">Experience</h3>
                    @foreach($donnees_exp as $donnee_exp)
                    <div class="resume-item"><span class="item-arrow"></span>
                      <h5 class="item-title">{{ $donnee_exp['titre'] }}</h5><span class="item-details">{{ $donnee_exp['periode'] }}</span>
                      <p class="item-description">{{ $donnee_exp['description'] }}</p>
                    </div>
                    @endforeach
                    
                   
                  </div>
                </div>
              </div>
            </div>
            <!-- Skills section-->

            <div class="skills-section single-section">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading">
                    <p class="section-description">My level of knowledge in some tools</p>
                    <h2 class="section-title">My Skills</h2>
                  </div>
                </div>
              </div>

              <div class="row">
              @foreach($donnees_skill as $donnee_skill)

                <div class="col-12 col-md-6">


                  <div class="single-skill" data-percentage="{{ $donnee_skill['pourcentage'] }}">
                    <div class="skill-info"><span class="skill-name">{{ $donnee_skill['titre'] }}</span><span class="skill-percentage"></span></div>
                    <div class="progress skill-progress">
                      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <br>
                  

                  

                </div>
                @endforeach


              </div>

            </div>

            <!-- Video section-->
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio lightbox-->
  <div class="lightbox-wrapper" id="portfolio" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Showcasing some of my best work</p>
                  <h2 class="section-title">Portfolio</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Portfolio section-->
            <div class="portfolio-section single-section">
              <div class="row">
                <!-- Filter nav-->
                <div class="col-12">
                  <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                    <li class="list-inline-item tab-active" data-filter="*">All</li>
                    <li class="list-inline-item" data-filter=".brand">Brand</li>
                    <li class="list-inline-item" data-filter=".design">Design</li>
                    <li class="list-inline-item" data-filter=".photos">Photos</li>
                  </ul>
                </div>
              </div>
              <!-- Thumbnail list-->
              <div class="portfolio-grid row">
                <!-- Single item-->
                @foreach($donnees_port as $donnee_port)
                <div class="single-item col-6 col-lg-4 {{ $donnee_port['categorie'] }}" ><a class="portfolio-item" href="{{asset('Image/' .$donnee_port['image'])}}" data-lightbox>
                    <div class="portfolio-wrapper"><img src="{{asset('Image/' .$donnee_port['image'])}}"  width="380px" alt="">
                      <div class="item-content">
                        <h6 class="content-title">{{ $donnee_port['titre'] }}</h6><a href="{{ $donnee_port['lien'] }}"><span class="content-more">More Info</span></a>
                      </div>
                    </div>
                  </a></div>
                  @endforeach
                <!-- Single item-->
                
                <!-- Single item-->
                
                <!-- Single item-->
                
                <!-- Single item-->
                
                <!-- Single item-->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
           
  <!-- Contact lightbox-->
  <div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
      <div class="lightbox-close">
        <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="lightbox-content">
            <div class="row">
              <div class="col-12">
                <div class="section-heading page-heading">
                  <p class="section-description">Feel free to contact me anytimes</p>
                  <h2 class="section-title">Get in Touch</h2>
                  <div class="animated-bar"></div>
                </div>
              </div>
            </div>
            <!-- Contact section-->
            <div class="contact-section single-section">
              <div class="row">
                <!-- Contact form-->
                <div class="col-12 col-lg-7">
                  <form class="contact-form" id="contact-form" action="addContactClient" method="post">
                  @csrf 

                    <h4 class="content-title">Message Me</h4>
                    <div class="row">
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-name" type="text" name="nom" placeholder="Name" required=""></div>
                      <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-email" type="email" name="email" placeholder="Email" required=""></div>
                      <div class="col-12 form-group"><input class="form-control" id="contact-subject" type="text" name="sujet" placeholder="Subject" required=""></div>
                      <div class="col-12 form-group form-message"><textarea class="form-control" id="contact-message" name="message" placeholder="Message" rows="5" required=""></textarea></div>
                      <div class="col-12 form-submit"> <button class="btn button-main button-scheme" id="contact-submit" type="submit">Send Message</button>
                        <p class="contact-feedback"></p>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Contact info-->
                <div class="col-12 col-lg-5">
                  <div class="contact-info">
                    <h4 class="content-title">Contact Info</h4>
                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                    <ul class="list-unstyled list-info">
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                          <div class="media-body info-details">
                          @foreach($donnees as $donnee)

                            <h6 class="info-type">Name</h6><span class="info-value">{{ $donnee['nom'] }} {{ $donnee['prenom'] }}</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Location</h6><span class="info-value">{{ $donnee['adresse'] }}</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+441632967704">{{ $donnee['tel'] }}</a></span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                          <div class="media-body info-details">
                            <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emma@example.com">{{ $donnee['email'] }}</a></span>
                          </div>
                        </div>
                        @endforeach
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- removeIf(customizerDist)-->
  <div class="demo-tool">
    <div class="tool-wrapper">
      <span class="tool-toggler"><i class="icon ion-md-settings"></i></span>
      <div class="tool-box">
        <ul class="list-inline single-block color-switcher">
          <li class="list-inline-item" style="background-color: #2c31ff;" data-path="{{url('css/colors/main-blueviolet.css')}}"></li>
          <li class="list-inline-item" style="background-color: #3460D1;" data-path="{{url('css/colors/main-nightskyblue.css')}}"></li>
          <li class="list-inline-item" style="background-color: #EE3158;" data-path="{{url('css/colors/main-redpink.css')}}"></li>
          <li class="list-inline-item" style="background-color: #007bff;" data-path="{{url('css/colors/main-blue.css')}}"></li>
          <li class="list-inline-item" style="background-color: #17a2b8;" data-path="{{url('css/colors/main-cyan.css')}}"></li>
          <li class="list-inline-item" style="background-color: #3365b0;" data-path="{{url('css/colors/main-darkblue.css')}}"></li>
          <li class="list-inline-item" style="background-color: #a435b7;" data-path="{{url('css/colors/main-darkmagenta.css')}}"></li>
          <li class="list-inline-item" style="background-color: #c93e70;" data-path="{{url('css/colors/main-darkpink.css')}}"></li>
          <li class="list-inline-item" style="background-color: #bf2a3d;" data-path="{{url('css/colors/main-darkred.css')}}"></li>
          <li class="list-inline-item" style="background-color: #28a745;" data-path="{{url('css/colors/main-green.css')}}"></li>
          <li class="list-inline-item" style="background-color: #6610f2;" data-path="{{url('css/colors/main-indigo.css')}}"></li>
          <li class="list-inline-item" style="background-color: #fd7e14;" data-path="{{url('css/colors/main-orange.css')}}"></li>
          <li class="list-inline-item" style="background-color: #e83e8c;" data-path="{{url('css/colors/main-pink.css')}}"></li>
          <li class="list-inline-item" style="background-color: #6f42c1;" data-path="{{url('css/colors/main-purple.css')}}"></li>
          <li class="list-inline-item" style="background-color: #dc3545;" data-path="{{url('css/colors/main-red.css')}}"></li>
          <li class="list-inline-item" style="background-color: #20c997;" data-path="{{url('css/colors/main-teal.css')}}"></li>
          <li class="list-inline-item" style="background-color: #333;" data-path="{{url('css/colors/main-dark.css')}}"></li>
          <li class="list-inline-item" style="background-color: #78b230;" data-path="{{url('css/colors/main-yellowgreen.css')}}"></li>
          <li class="list-inline-item" style="background-color: #E16F7C;" data-path="{{url('css/colors/main-tangopink.css')}}"></li>
          <li class="list-inline-item" style="background-color: #6F73D2;" data-path="{{url('css/colors/main-moodyblue.css')}}"></li>
          <li class="list-inline-item" style="background-color: #664C43;" data-path="{{url('css/colors/main-brown.css')}}"></li>
          <li class="list-inline-item" style="background-color: #4770D9;" data-path="{{url('css/colors/main-royalblue.css')}}"></li>
          <li class="list-inline-item" style="background-color: #ffb100;" data-path="{{url('css/colors/main-darkyellow.css')}}"></li>
        </ul>
        <div class="single-block buy-btn mb-0">
          <a class="btn btn-success btn-sm" target="_blank" href="https://themeforest.net/item/kitzu-personal-portfolio-template/26075107" role="button">Buy Kitzu</a>
        </div>
      </div>
    </div>
  </div>
  <!-- endremoveIf(customizerDist)-->
  <!-- Scripts-->
  <script src="{{url('js/jquery.min.js')}}"></script>
  <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{url('js/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('js/animatedModal.js')}}"></script>
  <script src="{{url('js/tiny-slider.js')}}"></script>
  <script src="{{url('js/lity.min.js')}}"></script>
  <script src="{{url('js/simplebar.min.js')}}"></script>
  <script src="{{url('js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{url('js/main.js')}}"></script>
  <!-- Custom JS (Add your custom JS scripts to this file)-->
  <script src="{{url('js/custom.js')}}"></script>
  <!-- removeIf(customizerDist)-->
  <script src="{{url('../customizer/main.js')}}"></script>
  <!-- endremoveIf(customizerDist)-->
</body>



<!-- Mirrored from likeabawz.dk/exill/demo/kitzu/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2022 08:48:00 GMT -->
</html>
