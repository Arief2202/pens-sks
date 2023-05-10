<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SISKS - Sistem Informasi SKS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="css/landing/img/favicon.png" rel="icon">
  <link href="css/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="css/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="css/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">SI-SKS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Hero Section -->
    <section id="hero">
        <div class="container topContent">
          <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <div>
                <h1>SISKS WEB APPLICATION PROJECT</h1>
                <h2>SISKS merupakan platform berbasis website yang digunakan untuk mempermudah Kaprodi IT dalam menentukan pembebanan SKS untuk setiap Dosen.</h2>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
              <img src="img/landing/hero_img.png" class="img-fluid" alt="" width="100%" height="100%">
            </div>
          </div>
        </div>
      </section>
      <!-- Hero Section -->

      <!-- Fitur Section -->
      <section id="services" class="services section-bg">
        <div class="container">  
          <div class="section-title">
            <h2>Features</h2>
            <p>SISKS menyediakan berbagai macam fitur untuk setiap tampilan<br>pada user Kepala Program Studi IT</p>
          </div>
          
          <div class="row">
            {{-- <div class="col d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-chart"></i></div>
                <h4><a href="">Dashboard</a></h4>
                <p>Voluptatum deleniti atque</p>
              </div>
            </div> --}}
  
            <div class="col d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-user"></i></div>
                <h4><a href="">Beban dan Profil Dosen</a></h4>
                {{-- <p>Duis aute irure dolor in</p> --}}
              </div>
            </div>
  
            <div class="col d-flex align-items-stretch mt-4 mt-xl-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-bookmark-alt-minus"></i></div>
                <h4><a href="">Kurikulum</a></h4>
                {{-- <p>Excepteur sint occaecat</p> --}}
              </div>
            </div>
  
            <div class="col d-flex align-items-stretch mt-4 mt-xl-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-package"></i></div>
                <h4><a href="">Paket Kurikulum</a></h4>
                {{-- <p>At vero eos et accusamus et iusto</p> --}}
              </div>
            </div>

            <div class="col d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-history"></i></div>
                <h4><a href="">Histori Kurikulum</a></h4>
                {{-- <p>Voluptatum deleniti atque corrupti</p> --}}
              </div>
            </div>

            <div class="col d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-briefcase"></i></div>
                <h4><a href="">Bidang Keahlian</a></h4>
                {{-- <p>Voluptatum deleniti atque</p> --}}
              </div>
            </div>
  
          </div>

          <div class="row">
            
            <div class="col d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-book"></i></div>
                <h4><a href="">Mata Kuliah</a></h4>
                {{-- <p>Duis aute irure dolor in</p> --}}
              </div>
            </div>
  
            <div class="col d-flex align-items-stretch mt-4 mt-xl-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-chalkboard"></i></div>
                <h4><a href="">Proses Pembebanan</a></h4>
                {{-- <p>Excepteur sint occaecat</p> --}}
              </div>
            </div>
  
            <div class="col d-flex align-items-stretch mt-4 mt-xl-0">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-archive-out"></i></div>
                <h4><a href="">Export Data</a></h4>
                {{-- <p>At vero eos et accusamus et iusto</p> --}}
              </div>
            </div>

            <div class="col d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-toggle-right"></i></div>
                <h4><a href="">Dark Mode</a></h4>
                {{-- <p>Voluptatum deleniti atque corrupti</p> --}}
              </div>
            </div>
          </div>
  
          </div>
  
        </div>
      </section>
      <!-- End of Fitur Section -->

      <!-- Team Section -->
      <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>SISKS memiliki tim developer yang beranggotakan 5 orang<br>dengan role masing-masing sebagai berikut</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="img/landing/Tim/rayhan.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Rayhan Munir Wibowo</h4>
                  <span>Backend Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="img/landing/Tim/ayin.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Madani Sofi Arina Hanif</h4>
                  <span>Product Owner</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="img/landing/Tim/arif.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Mohammad Arief Darmawan</h4>
                  <span>Fullstack Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>

          <div class="row" style="margin-left: 250px">
  
            <div class="col-lg-4 col-md-4">
              <div class="member" data-aos="zoom-in">
                <div class="pic"><img src="img/landing/Tim/ade.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Ade Bayu Budiono</h4>
                  <span>UI / UX Designer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-4">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="img/landing/Tim/farhan.png" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Farhan Izzuddin Az zufar</h4>
                  <span>Frontend Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>
      <!-- End of Team -->
      <script src="js/landing/landing.js"></script>
</body>