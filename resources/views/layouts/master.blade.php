<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>Consult - Business Consultancy Agency Template | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!--====== PRELOADER PART START ======-->
<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->
<header class="header-area">
   @yield('content')
</header>

<!--====== HEADER PART ENDS ======-->

<footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
    <div class="container">
        <div class="footer-widget pt-30 pb-70">
            <div class="row">
                <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                    <div class="footer-about pt-40">
                        <a href="#">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, repudiandae! Totam, nemo sed? Provident.</p> <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus</p>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                    <div class="footer-link pt-40">
                        <div class="footer-title">
                            <h5 class="title">Services</h5>
                        </div>
                        <ul>
                            <li><a href="#">Business Consultancy</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Market Analysis</a></li>
                            <li><a href="#">Web Development</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                    <div class="footer-link pt-40">
                        <div class="footer-title">
                            <h5 class="title">About Us</h5>
                        </div>
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Why us</a></li>
                            <li><a href="#">Awards & Recognitions</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                    <div class="footer-contact pt-40">
                        <div class="footer-title">
                            <h5 class="title">Contact Info</h5>
                        </div>
                        <div class="contact pt-10">
                            <p class="text">21 King Street, Melbourne <br>
                                Victoria, 1202 Australia.</p>
                            <p class="text">support@uideck.com</p>
                            <p class="text">+99 000 555 66 22</p>

                            <ul class="social mt-40">
                                <li><a href="#"><i class="lni-facebook"></i></a></li>
                                <li><a href="#"><i class="lni-twitter"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin"></i></a></li>
                            </ul>
                        </div> <!-- contact -->
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer-copyright text-center">
            <p class="text">© 2022 Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a> All Rights Reserved.</p>
        </div>
    </div> <!-- container -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->




<!--====== Jquery js ======-->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>

<!--====== Isotope js ======-->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

<!--====== Counter Up js ======-->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<!--====== Circles js ======-->
<script src="{{asset('assets/js/circles.min.js')}}"></script>

<!--====== Appear js ======-->
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>

<!--====== WOW js ======-->
<script src="{{asset('assets/js/wow.min.js')}}"></script>

<!--====== Headroom js ======-->
<script src="{{asset('assets/js/headroom.min.js')}}"></script>

<!--====== Jquery Nav js ======-->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>

<!--====== Scroll It js ======-->
<script src="{{asset('assets/js/scrollIt.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
