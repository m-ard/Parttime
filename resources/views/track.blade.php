<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>PART!ME</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
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
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="/dashboard">Home</a></li>
                                            <li><a href="/jobs_listing">Cari Lowongan</a></li>
                                            <li><a onclick="toggleNotification()">Notifikasi</a></li>
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

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Track Your Applications</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Progress lamaranmu</h4>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <div class="small-section-tittle2">
                                        <h3>Lacak lamaran</h3>
                            </div>
                                    <br>
                                    <div class="select-job-items">
                                            <a href="/track_sent">
                                                <h6>Lamaran Dikirim</h6>
                                            </a>
                                            <a href="/track_on_progress">
                                                <h6>Lamaran Direview</h6>
                                            </a>
                                            <a href="track_accepted">
                                                <h6>Lamaran Diterima</h6>
                                            </a>
                                    </div>
                        </div> 
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span>39, 782 Jobs found</span>
                                            <!-- Select job items start -->
                                            <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>Digital Marketer</h4>
                                            </a>
                                            <ul>
                                                <li>Creative Agency</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>Terkirim</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Semarang, Jawa Tengah</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>On progress</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Depok, Jawa Barat</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>Terkirim</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Badung, Bali</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>Diterima</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Serang, Banten</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>Terkirim</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Sleman, Yogyakarta</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>Terkirim</a>
                                    </div>
                                </div>
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="jobs_details"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle">
                                            <a href="jobs_details"><h4>Digital Marketer</h4></a>
                                                <ul>
                                                    <li>Creative Agency</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Malang, Jawa Timur</li>
                                                </ul>
                                        </div>
                                    </div>
                                    <div class="items-link f-right">
                                        <a>On progress</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        
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

               
                                     
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
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

		<!-- Jquery Slick , Owl-Carousel Range -->
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