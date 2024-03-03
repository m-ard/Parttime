<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>PART!ME </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            
        <style>
         /* CSS */
         .notification-section {
         position: fixed;
         top: 50px;
         right: 20px;
         transform: translateY(0%);
         z-index: 9999;
         background-color: #f8f8f8;
         width: 600px;
         max-height: 80vh;
         overflow-y: auto;
         box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         display: none;
         border: 2px solid #fb246a;
         border-radius: 10px;
         }
         .notification-section.show-notification {
         display: block;
         }
         .notification-container {
         padding: 20px;
         }
         .notification-header {
         display: flex;
         align-items: center;
         justify-content: space-between;
         margin-bottom: 10px;
         }
         .notification-title {
         margin: 0;
         text-align: center;
         color: #fb246a;
         width: 100%;
         font-size: 24px;
         font-weight: bold;
         background-color: #fb246a;
         padding: 10px;
         border-radius: 5px;
         color: #fff;
         }
         .notification-close-btn {
         background: none;
         border: none;
         color: #f8f8f8;
         font-size: 18px;
         cursor: pointer;
         }
         .notification-close-btn:hover {
         color: #fb246a;
         }
         .notification-body {
         margin-bottom: 10px;
         }
         .notification-list {
         list-style-type: none;
         padding: 0;
         margin: 0;
         }
         .notification-item {
         display: flex;
         align-items: center;
         padding: 10px;
         border-bottom: 2px solid #fb246a;
         }
         .notification-thumbnail {
         width: 50px;
         height: 50px;
         margin-right: 10px;
         border-radius: 50%;
         }
         .notification-info {
         flex: 1;
         }
         .notification-heading {
         margin: 0;
         font-size: 16px;
         font-weight: bold;
         color: #333;
         }
         .notification-date {
         font-size: 12px;
         color: #888;
         }
         .notification-description {
         margin: 5px 0;
         color: #666;
         }
         .notification-footer {
         text-align: right;
         }
         .notification-button {
         background-color: #fb246a;
         color: #fff;
         border: none;
         cursor: pointer;
         padding: 8px 16px;
         border-radius: 5px;
         font-weight: bold;
         transition: background-color 0.3s ease;
         }
         .notification-button:hover {
         background-color: #d11351;
         }
        </style> 
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div id="notification-container" class="notification-section">
         <div class="notification-header" style="background-color: #fb246a;">
            <h2 class="notification-title" style="text-align: left; color: white;">Notification</h2>
            <button class="notification-close-btn" onclick="closeNotification()">Close</button>
         </div>
         <div class="notification-body">
            <div class="notification-list">
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 1</h5>
                     <small class="notification-date">2 days ago</small>
                     <p class="notification-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis nunc id neque pretium, in ultricies elit ultrices.</p>
                  </div>
                  <img src="assets/img/logo/logo.png" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 2</h5>
                     <small class="notification-date">1 week ago</small>
                     <p class="notification-description">Pellentesque eu aliquam nisi, vitae feugiat sapien. Sed at ullamcorper leo. Morbi venenatis finibus tortor.</p>
                  </div>
                  <img src="assets/img/logo/loder.jpg" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 3</h5>
                     <small class="notification-date">1 month ago</small>
                     <p class="notification-description">Vel placerat nunc dictum vitae. Nullam tristique nibh sit amet elit venenatis, sed luctus neque tempor.</p>
                  </div>
                  <img src="assets/img/logo/testimonial.png" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 4</h5>
                     <small class="notification-date">1 year ago</small>
                     <p class="notification-description">Suspendisse potenti. Donec auctor, ex ac ultrices pellentesque, justo felis dignissim magna, sed maximus.</p>
                  </div>
                  <img src="assets/img/logo/logo.png" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 5</h5>
                     <small class="notification-date">2 years ago</small>
                     <p class="notification-description">Suspendisse potenti. Donec auctor, ex ac ultrices pellentesque, justo felis dignissim magna, sed maximus.</p>
                  </div>
                  <img src="assets/img/logo/loder.jpg" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 6</h5>
                     <small class="notification-date">3 years ago</small>
                     <p class="notification-description">Suspendisse potenti. Donec auctor, ex ac ultrices pellentesque, justo felis dignissim magna, sed maximus.</p>
                  </div>
                  <img src="assets/img/logo/testimonial.png" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 7</h5>
                     <small class="notification-date">4 years ago</small>
                     <p class="notification-description">Suspendisse potenti. Donec auctor, ex ac ultrices pellentesque, justo felis dignissim magna, sed maximus.</p>
                  </div>
                  <img src="assets/img/logo/logo.png" alt="Thumbnail" class="notification-thumbnail">
               </div>
               <div class="notification-item">
                  <div class="notification-info">
                     <h5 class="notification-heading">Notification 8</h5>
                     <small class="notification-date">5 years ago</small>
                     <p class="notification-description">Suspendisse potenti. Donec auctor, ex ac ultrices pellentesque, justo felis dignissim magna, sed maximus.</p>
                  </div>
                  <img src="assets/img/logo/loder.jpg" alt="Thumbnail" class="notification-thumbnail">
               </div>
            </div>
         </div>
      </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="/dashboard"><img src="assets/img/logo/logo.png" alt="" width=240 height=70;></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class ="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="/dashboard">Home</a></li>
                                            <li><a href="/jobs_listing">Cari Lowongan </a></li>
                                            <li><a  onclick="toggleNotification()">Notifikasi</a></li>
                                            <li><a href="/track">Riwayat Lamaran</a></li>
                                        </ul> 
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        
                                        <ul id="navigation">
                                            <li>{{ Auth::user()->name }}     <i class="fas fa-chevron-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('profile.edit') }}"> {{ __('Profile') }} </a></li>
                                                    <li>
                                                        <a class="button" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                {{ __('Log Out') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>   
                            </div>       
                            <!-- Header End -->
                        </header>
                        <main>

                            <!-- slider Area Start-->
                            <div class="slider-area ">
                                <!-- Mobile Menu -->
                                <div class="slider-active">
                                    <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-9 col-md-10">
                                                    <div class="hero__caption">
                                                        <h1>Find your jobs in your time</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Search Box -->
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <!-- form -->
                                                    <form action="#" class="search-box">
                                                        <div class="input-form">
                                                            <input type="text" placeholder="Cari lowongan atau kata kunci">
                                                        </div>
                                                        <div class="select-form">
                                                            <div class="select-itms">
                                                                <select name="select" id="select1">
                                                                    <option value="">Jawa Tengah</option>
                                                                    <option value="">Jawa Barat</option>
                                                                    <option value="">Jawa Timur</option>
                                                                    <option value="">Jakarta</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="search-form">
                                                            <a href="#">Cari lowongan</a>
                                                        </div>	
                                                    </form>	
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider Area End-->

                            <!-- Featured_job_start -->
                            <section class="featured-job-area feature-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-tittle text-center">
                                                <span>LOWONGAN TERKINI</span>
                                                <h2>Rekomendasi Pekerjaan</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            @foreach($vacancies as $vacancy)
                                                <div class="single-job-items mb-30">
                                                    <div class="job-items">
                                                        <div class="company-img">
                                                            <a href="jobs_details"><img src="assets/img/icon/job-list{{ $vacancy->id_perusahaan }}.png" alt=""></a>
                                                        </div>
                                                        <div class="job-tittle">
                                                            <a href="jobs_details"><h4>{{ $vacancy->posisi }}</h4></a>
                                                            <ul>
                                                                <li>{{ $vacancy->nama_perusahaan }}</li>
                                                                <li><i class="fas fa-map-marker-alt"></i>{{ $vacancy->lokasi }}</li>
                                                                <li>{{ 'Rp '.number_format($vacancy->gaji, 2, ',', '.') }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="items-link f-right">
                                                        <a href="jobs_details">{{ $vacancy->tipe }}</a>
                                                        <span>{{ $vacancy->sincee }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Featured_job_end -->

                            <!-- Our Services Start -->
                            <div class="our-services section-pad-t30">
                                <div class="container">
                                    <!-- Section Tittle -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-tittle text-center">
                                                <span>Kategori Pekerjaan</span>
                                                <h2>Temukan Lowongan Berdasarkan Bidang Yang Kamu Inginkan</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-contnet-center">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-tour"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Design & Creative</a></h5>
                                                    <span>(653)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-cms"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Design & Development</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-report"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Sales & Marketing</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-app"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Mobile Application</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-helmet"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Construction</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-high-tech"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Information Technology</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-real-estate"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Real Estate</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-services text-center mb-30">
                                                <div class="services-ion">
                                                    <span class="flaticon-content"></span>
                                                </div>
                                                <div class="services-cap">
                                                <h5><a href="jobs_listing">Content Writer</a></h5>
                                                    <span>(658)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- More Btn -->
                                    <!-- Section Button -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="browse-btn2 text-center mt-50">
                                                <a href="jobs_listing" class="border-btn2">Telusuri Lebih Banyak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Our Services End -->


                            
                            <!-- How  Apply Process Start-->
                            <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
                                <div class="container">
                                    <!-- Section Tittle -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-tittle white-text text-center">
                                                <span>Proses Lamaran Kerja</span>
                                                <h2>Apa saja langkah melamar pekerjaan?</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Apply Process Caption -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-process text-center mb-30">
                                                <div class="process-ion">
                                                    <span class="flaticon-search"></span>
                                                </div>
                                                <div class="process-cap">
                                                <h5>1. Cari lowongan pekerjaan</h5>
                                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-process text-center mb-30">
                                                <div class="process-ion">
                                                    <span class="flaticon-curriculum-vitae"></span>
                                                </div>
                                                <div class="process-cap">
                                                <h5>2. Ajukan lamaran</h5>
                                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-process text-center mb-30">
                                                <div class="process-ion">
                                                    <span class="flaticon-tour"></span>
                                                </div>
                                                <div class="process-cap">
                                                <h5>3. Dapatkan pekerjaan</h5>
                                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- How  Apply Process End-->
                            
                            

                        </main>
                        <footer>
                            <!-- Footer Start-->
                            <div class="footer-area footer-bg footer-padding">
                                <div class="container">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                        <div class="single-footer-caption mb-50">
                                            <div class="single-footer-caption mb-30">
                                                <div class="footer-tittle">
                                                    <h4>About Us</h4>
                                                    <div class="footer-pera">
                                                        <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                            <div class="single-footer-caption mb-50">
                                                <div class="footer-tittle">
                                                    <h4>Contact Info</h4>
                                                    <ul>
                                                        <li>
                                                        <p>Address :Your address goes
                                                            here, your demo address.</p>
                                                        </li>
                                                        <li><a href="#">Phone : +8880 44338899</a></li>
                                                        <li><a href="#">Email : info@colorlib.com</a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                            <div class="single-footer-caption mb-50">
                                                <div class="footer-tittle">
                                                    <h4>Important Link</h4>
                                                    <ul>
                                                        <li><a href="#"> View Project</a></li>
                                                        <li><a href="#">Contact Us</a></li>
                                                        <li><a href="#">Testimonial</a></li>
                                                        <li><a href="#">Proparties</a></li>
                                                        <li><a href="#">Support</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                                            <div class="single-footer-caption mb-50">
                                                <div class="footer-tittle">
                                                    <h4>Newsletter</h4>
                                                    <div class="footer-pera footer-pera2">
                                                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                                </div>
                                                <!-- Form -->
                                                <div class="footer-form" >
                                                    <div id="mc_embed_signup">
                                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                                        method="get" class="subscribe_form relative mail_part">
                                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                                            onblur="this.placeholder = ' Email Address '">
                                                            <div class="form-icon">
                                                                <button type="submit" name="submit" id="newsletter-submit"
                                                                class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                                            </div>
                                                            <div class="mt-10 info"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-bottom area -->
                            <div class="footer-bottom-area footer-bg">
                                <div class="container">
                                    <div class="footer-border">
                                        <div class="row d-flex justify-content-between align-items-center">
                                            <div class="col-xl-10 col-lg-10 ">
                                                <div class="footer-copy-right">
                                                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-2">
                                                <div class="footer-social f-right">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fas fa-globe"></i></a>
                                                    <a href="#"><i class="fab fa-behance"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer End-->
                        </footer>

                    <!-- JS here -->
                        
                            <!-- All JS Custom Plugins Link Here here -->
                            <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
                            <!-- Jquery, Popper, Bootstrap -->
                            <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
                            <script src="./assets/js/popper.min.js"></script>
                            <script src="./assets/js/bootstrap.min.js"></script>
                            <!-- Jquery Mobile Menu -->
                            <script src="./assets/js/jquery.slicknav.min.js"></script>

                            <!-- Jquery Slick , Owl-Carousel Plugins -->
                            <script src="./assets/js/owl.carousel.min.js"></script>
                            <script src="./assets/js/slick.min.js"></script>
                            <script src="./assets/js/price_rangs.js"></script>
                            
                            <!-- One Page, Animated-HeadLin -->
                            <script src="./assets/js/wow.min.js"></script>
                            <script src="./assets/js/animated.headline.js"></script>
                            <script src="./assets/js/jquery.magnific-popup.js"></script>

                            <!-- Scrollup, nice-select, sticky -->
                            <script src="./assets/js/jquery.scrollUp.min.js"></script>
                            <script src="./assets/js/jquery.nice-select.min.js"></script>
                            <script src="./assets/js/jquery.sticky.js"></script>
                            
                            <!-- contact js -->
                            <script src="./assets/js/contact.js"></script>
                            <script src="./assets/js/jquery.form.js"></script>
                            <script src="./assets/js/jquery.validate.min.js"></script>
                            <script src="./assets/js/mail-script.js"></script>
                            <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
                            
                            <!-- Jquery Plugins, main Jquery -->	
                            <script src="./assets/js/plugins.js"></script>
                            <script src="./assets/js/main.js"></script>
                            <script>
                                function toggleNotification() {
                                    var notificationContainer = document.getElementById('notification-container');
                                    notificationContainer.classList.toggle('show-notification');
                                }
                                
                                function closeNotification() {
                                    var notificationContainer = document.getElementById('notification-container');
                                    notificationContainer.classList.remove('show-notification');
                                }
                            </script>
                        </body>
                    </html>