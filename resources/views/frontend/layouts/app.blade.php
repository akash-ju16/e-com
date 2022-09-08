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
   @include('frontend.layouts.popular_product')
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
    @include('frontend.layouts.product')
    <!--end/custom product area-->

    <!--banner area start-->
    @include('frontend.layouts.banner_three')
    <!--banner area end-->


    <!--call to action start-->
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call_action_inner">
                        <div class="call_text">
                            <h3>We Have <span>Recommendations</span> for You</h3>
                            <p>Take 30% off when you spend $150 or more with code Autima11</p>
                        </div>
                        <div class="discover_now">
                            <a href="#">discover now</a>
                        </div>
                        <div class="link_follow">
                            <ul>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action end-->

     <!--footer area-->
     @include('frontend.layouts.footer')
     <!--end/footer area-->


    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('assets/frontend/img/product/product1.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('assets/frontend/img/product/product2.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('assets/frontend/img/product/product3.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('assets/frontend/img/product/product5.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('assets/frontend/img/product/product1.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('assets/frontend/img/product/product2.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('assets/frontend/img/product/product3.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('assets/frontend/img/product/product5.jpg') }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
    <!-- modal area end-->



<!-- JS
============================================ -->
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


<!-- Mirrored from template.hasthemes.com/autima/autima/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Nov 2021 12:04:45 GMT -->
</html>