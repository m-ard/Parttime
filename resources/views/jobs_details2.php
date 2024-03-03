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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/price_rangs.css">
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
         #map {
         height: 400px;
         }
         .popup {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.8);
         display: flex;
         justify-content: center;
         align-items: center;
         z-index: 9999;
         visibility: hidden;
         opacity: 0;
         transition: visibility 0s, opacity 0.3s;
         }
         .popup.active {
         visibility: visible;
         opacity: 1;
         }
         .popup-content {
         background-color: #fb246a;
         color: #ffffff;
         padding: 30px;
         border-radius: 10px;
         text-align: center;
         position: relative;
         max-width: 400px;
         transform: scale(0.8);
         animation: popup-animation 0.3s ease forwards;
         }
         @keyframes popup-animation {
         0% {
         opacity: 0;
         transform: scale(0.5);
         }
         70% {
         transform: scale(1.05);
         }
         100% {
         opacity: 1;
         transform: scale(1);
         }
         }
         .close-btn {
         position: absolute;
         top: 10px;
         right: 10px;
         color: #ffffff;
         font-size: 24px;
         cursor: pointer;
         }
         .popup-title {
         margin-top: 0;
         }
         .popup-message {
         margin-bottom: 20px;
         }
         .okay-btn {
         background-color: transparent;
         border: none;
         color: #ffffff;
         font-weight: bold;
         cursor: pointer;
         padding: 10px 20px;
         border-radius: 5px;
         border: 2px solid #ffffff;
         transition: background-color 0.3s, color 0.3s;
         }
         .okay-btn:hover {
         background-color: #ffffff;
         color: #fb246a;
         }
         .popup-animation {
         animation-name: popup-animation;
         animation-duration: 0.5s;
         animation-timing-function: ease;
         animation-fill-mode: forwards;
         }
         @keyframes popup-animation {
         0% {
         opacity: 0;
         transform: scale(0.5);
         }
         50% {
         transform: scale(1.05);
         }
         100% {
         opacity: 1;
         transform: scale(1);
         }
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
               <a href="/home"><img src="assets/img/logo/logo.png" alt="" width=240 height=70;></a>
            </div>
         </div>
         <div class="col-lg-9 col-md-9">
         <div class="menu-wrapper">
            <!-- Main-menu -->
            <div class="main-menu">
               <nav class="d-none d-lg-block">
                  <ul id="navigation">
                     <li><a href="/dashboard">Home</a></li>
                     <li><a href="/jobs_listing">Cari Lowongan </a></li>
                     <li><a  onclick="toggleNotification()">Notifikasi</a></li>
                     <!-- <button class="notification-button" onclick="toggleNotification()">Notifikasi</button> -->
                     <li><a href="/track">Riwayat Lamaran</a></li>
                  </ul>
               </nav>
            </div>
            <div class="main-menu">
               <nav class="d-none d-lg-block">
                  <ul id="navigation">
                     <li>
                        {{ Auth::user()->name }}     <i class="fas fa-chevron-down"></i></a>
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
                           <h2>{{ $vacancy[1]->posisi }}</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Hero Area End -->
         <!-- job post company Start -->
         <div id="popup" class="popup">
            <div class="popup-content">
               <span id="close-btn" class="close-btn">&times;</span>
               <h2 class="popup-title">Terima Kasih Sudah Mendaftar</h2>
               <button id="okay-btn" class="okay-btn">OKAY</button>
            </div>
         </div>
         <div class="job-post-company pt-120 pb-120">
            <div class="container">
               <div class="row justify-content-between">
                  <!-- Left Content -->
                  <div class="col-xl-7 col-lg-8">
                     <!-- job single -->
                     <div class="single-job-items mb-50">
                        <div class="job-items">
                           <div class="company-img company-img-details">
                              <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                           </div>
                           <div class="job-tittle">
                              <a href="#">
                                 <h4>{{ $vacancy[1]->posisi }}</h4>
                              </a>
                              <ul>
                                 <li>{{ $vacancy[1]->nama_perusahaan }}</li>
                                 <li><i class="fas fa-map-marker-alt"></i>{{ $vacancy[1]->lokasi }}</li>
                                 <li>{{ 'Rp '.number_format($vacancy[1]->gaji, 2, ',', '.') }}</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- job single End -->
                     <div class="job-post-details">
                        <div class="post-details1 mb-50">
                           <!-- Small Section Tittle -->
                           <div id="map"></div>
                           <div class="small-section-tittle mt-4">
                              <h4>Deskripsi Pekerjaan</h4>
                           </div>
                           <p>{{ $vacancy[1]->deskripsi }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                           <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                              <h4>Pengetahuan, Kemampuan, dan Keterampilan yang Diperlukan</h4>
                           </div>
                           <ul>
                              <p>{{ $vacancy[1]->syarat }}</p>
                              <!-- <li>Mampu mengatasi masalah dengan strategi pemecahan masalah yang tepat</li>
                              <li>Mampu melahirkan dan mengeksekusi ide-ide brilian, inovatif, segar dan menemukan solusi unik serta efektif dalam melihat peluang pada pangsa pasar</li>
                              <li>Mampu berpikir ana;itis, terutama dalam membaca laporan atau data terkait kampanye yang sudah dijalankan</li>
                              <li>Mampu memegang beberapa tanggung jawab sekaligus</li>
                              <li>Memiliki Keingintahuan yang tinggi untuk terus up to date dengan teknologi dan teori baru yang mampu diaplikasikan di pemasaran bisnis</li> -->
                           </ul>
                        </div>
                        <div class="post-details2  mb-50">
                           <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                              <h4>Pendidikan dan Pengalaman</h4>
                           </div>
                           <ul>
                              <li>Bisa moto pake kamera.</li>
                              <li>Editing Photoshop, Lightroom, Primer, AI jago.</li>
                              <li>Pengalaman desain grafis dan software editing digital, untuk membuat postingan media sosial lebih menarik dengan tambahan video, foto dan infografis</li>
                              <li>Punya Kamera, Laptop Gaming, dan Studio.
                              <!-- <li>Menguasai SEO atau SEM, mampu mengelola database, email, media sosial dan kampanye iklan online</li>
                              <li>Berpengalaman merancang dan mengoptimalkan landing pages</li>
                              <li>Memiliki pengetahuan yang kuat pada analisis situs Web (misalnya, Google Analytics, NetInsight, Omniture, WebTrends)</li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!-- Right Content -->
                  <div class="col-xl-4 col-lg-4">
                     <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                           <h4>Ringkasan Mengenai Lowongan Pekerjaan</h4>
                        </div>
                        <ul>
                           <li>Tanggal diunggah : <span>28 Mei 2023</span></li>
                           <li>Lokasi pekerjaan : <span>Kebon Jeruk, Jakarta Barat, DKI Jakarta</span></li>
                           <li>Jumlah lowongan : <span>2</span></li>
                           <li>Sifat pekerjaan : <span>Full time</span></li>
                           <li>Rentang Gaji :  <span>Rp10,000,000 - Rp15,000,000/bulan</span></li>
                        </ul>
                        <style>
                           .apply-btn2 {
                           display: flex;
                           gap: 5px; /* Jarak antara tombol-tombol */
                           }
                           .centered-text {
                           display: flex;
                           justify-content: center;
                           align-items: center;
                           }
                        </style>
                        <div class="apply-btn2 centered text">
                           <a href="#" class="btn">Apply Now</a>
                           <a href="#" class="btn">Contact</a>
                        </div>
                     </div>
                     <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                           <h4>Informasi Perusahaan</h4>
                        </div>
                        <span>Colorlib</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul>
                           <li>Name: <span>Colorlib </span></li>
                           <li>Web : <span> colorlib.com</span></li>
                           <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- job post company End -->
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
                              here, your demo address.
                           </p>
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
                           <p>
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                           </p>
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
      <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
      <script>
         var map = L.map('map').setView([-6.9788, 110.4063], 15);
         
         L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
           attribution: '&copy; OpenStreetMap contributors'
         }).addTo(map);
         
         L.marker([-6.9788, 110.4063]).addTo(map)
           .bindPopup('Universitas Negeri Semarang (UNNES)').openPopup();
      </script>
      <script>
         // Select elements
         const popup = document.getElementById('popup');
         const closeBtn = document.getElementById('close-btn');
         const okayBtn = document.getElementById('okay-btn');
         const applyBtn = document.querySelector('.apply-btn2 .btn');
         
         // Open popup when Apply Now button is clicked
         applyBtn.addEventListener('click', function(event) {
         event.preventDefault(); // Prevent default link behavior
         popup.classList.add('active');
         });
         
         // Close popup when Close button is clicked
         closeBtn.addEventListener('click', function() {
         popup.classList.remove('active');
         });
         
         // Close popup when Okay button is clicked
         okayBtn.addEventListener('click', function() {
         popup.classList.remove('active');
         });
      </script>
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