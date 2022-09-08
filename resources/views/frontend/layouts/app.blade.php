<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.ico') }}">
     <!-- CSS ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font.awesome.css') }}">
    <!--ionicons min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ionicons.min.css') }}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slinky.menu.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    
    <!--modernizr min js here-->
    <script src="{{ asset('assets/frontend/js/modernizr-3.7.1.min.js') }}"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
       
        <!--header top-->
        @include('frontend.layouts.header_top')
        <!--end header top-->

        <!--header menu-->
        @include('frontend.layouts.header_menu')
        <!--end header menu-->

    </header>
    <!--header area end-->


    <!--canvas area-->
    @include('frontend.layouts.canvas')
    <!--end/canvas area-->

    <!--slider area-->
    @include('frontend.layouts.slide')
    <!--end/slider area-->

    <!--shipping area start-->
    @include('frontend.layouts.shipping')
    <!--end shipping area-->

   <!--product area start-->
   @include('frontend.pages.popular_product')
   <!--end/product area-->

    <!--banner area start-->
    @include('frontend.layouts.banner_one')
    <!--banner area end-->

    <!--product area start-->
    @include('frontend.layouts.button_product')
    <!--end/product area-->

    <!--featured categories area start-->
    @include('frontend.layouts.featured_categories')
    <!--end/featured categories area-->

     <!--banner area start-->
     @include('frontend.layouts.banner_two')
    <!--banner area end-->

    <!--custom product area-->
    @include('frontend.pages.product')
    <!--end/custom product area-->

    <!--banner area start-->
    @include('frontend.layouts.banner_three')
    <!--banner area end-->


    <!--footer banner start-->
    @include('frontend.layouts.footer_banner')
    <!--end/footer banner-->

     <!--footer area-->
     @include('frontend.layouts.footer')
     <!--end/footer area-->

    <!-- modal area start-->
    @include('frontend.layouts.footer_modal')
    <!-- end/modal area-->
    

<!-- JS============================================ -->
<!--jquery min js-->
<script src="{{ asset('assets/frontend/js/jquery-3.4.1.min.js') }}"></script>
<!--popper min js-->
<script src="{{ asset('assets/frontend/js/popper.js') }}"></script>
<!--bootstrap min js-->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<!--owl carousel min js-->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<!--slick min js-->
<script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
<!--magnific popup min js-->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery countdown min js-->
<script src="{{ asset('assets/frontend/js/jquery.countdown.js') }}"></script>
<!--jquery ui min js-->
<script src="{{ asset('assets/frontend/js/jquery.ui.js') }}"></script>
<!--jquery elevatezoom min js-->
<script src="{{ asset('assets/frontend/js/jquery.elevatezoom.js') }}"></script>
<!--isotope packaged min js-->
<script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
<!--slinky menu js-->
<script src="{{ asset('assets/frontend/js/slinky.menu.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>
</html>