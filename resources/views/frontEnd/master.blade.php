<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('frontEnd')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('frontEnd')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEnd')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontEnd')}}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Restaurantly - v3.9.1
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

@include('frontEnd.include.header')

@yield('home')



<main id="main">
    <br> <br> <br><br>


    <!-- ======= About Section ======= -->
    @yield('content')

    <!-- ======= Menu Section ======= -->
   <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
   <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
   <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontEnd.include.footer')
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEnd')}}/assets/vendor/aos/aos.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontEnd')}}/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEnd')}}/assets/js/main.js"></script>

</body>

</html>
