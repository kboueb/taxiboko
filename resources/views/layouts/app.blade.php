<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mbango</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/favicon.png') }}') }}" rel="icon">
  <link href="{{ asset('images/apple-touch-icon.png') }}') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="/">Mba<span>ngo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto" href="/#about">A propos</a></li>
            <li class="dropdown"><a href="/#passagers"><span>Passagers</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/#cc">Comment ça marche</a></li>
                <li><a href="/#prix">Nos prix & engagements</a></li>
            </ul>
            </li>
            <li class="dropdown"><a href="/#chauffeurs"><span>Chauffeurs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/#cc1">Comment ça marche</a></li>
            </ul>
            </li>
            <li class="dropdown"><a href="/#business"><span>Business</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="/#cc2">Comment ça marche</a></li>
                <li><a href="/#tarif">Les offres Smart Busiess</a></li>
            </ul>
            </li>
            
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="/#about" class="get-started-btn scrollto">Inscriptions</a>

    </div>
</header>

    @yield("content")
    <script src="{{ asset('css/bootstrap5/js/bootstrap.js') }}"></script>
</body>
</html>
