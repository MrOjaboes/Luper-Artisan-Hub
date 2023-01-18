
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Artisan Hub | Search</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/SearchUi/assets/img/favicon.png" rel="icon">
  <link href="/SearchUi/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/SearchUi/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/SearchUi/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/SearchUi/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Artisan Hub</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">HOME</a></li>
          <li><a class="nav-link scrollto" href="">GET STARTED</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">LOGIN</a></li>
          <li><a class="nav-link   scrollto" href="{{ route('register') }}">REGISTER</a></li>
             </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-5">
                <input type="text" name="artisan" value="{{ request()->get('artisan') }}" class="form-control" placeholder="Who are you looking For?" id="name" required>
              </div>
              <div class="form-group col-md-5">
                <input type="email" class="form-control" placeholder="Where?" name="email" id="email" required>
              </div>
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-danger">Search</button>
             </div>
            </div>


          </form>

        </div>

      </div>
    </div>

  </section><!-- End Hero -->
  <main id="main">
   @yield('index')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">




    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Artisan Hub</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
            Developed by <a href="">Ojabo E.S</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/SearchUi/assets/vendor/aos/aos.js"></script>
  <script src="/SearchUi/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/SearchUi/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/SearchUi/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/SearchUi/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/SearchUi/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/SearchUi/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/SearchUi/assets/js/main.js"></script>

</body>

</html>
