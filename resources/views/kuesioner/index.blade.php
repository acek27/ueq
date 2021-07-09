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
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
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
    @include('layouts._nav')

    <div id="home" class="bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-check-box"></i> Form
                            <span>Survei pengalaman pengguna.</span>
                        </h4>
                        <form id="contact-form" action="{{route('kuesioner.update', $data->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-10">
                                @php($q = 1)
                                @foreach($kuesioner as $datum)
                                    <div class="mt-45">
                                        <div class="row">
                                            <div class="col-lg-4 text-right">
                                                <label>{{$datum->item_left}}</label>
                                            </div>
                                            <div class="col-lg-4 text-center">
                                                <div class="row">
                                                    @for($i = 1; $i<=7;$i++)
                                                        <div class="form-check ml-4">
                                                            <input class="form-check-input" type="radio"
                                                                   name="Q{{$q}}" data-id="{{$q}}"
                                                                   onclick="q{{$q}}checked({{$i}}, {{$q}})"
                                                                   value="{{$i}}"
                                                                   required>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-left">
                                                <label>{{$datum->item_right}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    @php($q++)
                                @endforeach
                                <div class="col-md-12 text-center">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Selanjutnya</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div>
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="item"></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12 text-center">
                        <select name="feature" class="form-control border border-primary text-center">
                            <option value="1">Informasi</option>
                            <option value="2">Besaran Pajak</option>
                            <option value="3">Informasi Pengesahan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </div>

        </div>
    </div>

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
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                            repudiandae! Totam, nemo sed? Provident.</p>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus</p>
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
            <p class="text">© 2022 Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a> All Rights
                Reserved.</p>
        </div>
    </div> <!-- container -->
</footer>

<script>
    function q1checked(q1, i1) {
        $.get("{{url('/getitem')}}/" + i1, function (data) {
            if (data.category === 1) {
                $('#item').text("Pilih fitur yang menurut anda paling " + data.item_left);
            } else {
                $('#item').text("Pilih fitur yang menurut anda paling " + data.item_right);
            }
            $('#myModal').modal('show')
        });
    }

    function q3checked(q3, i3) {
        $.get("{{url('/getitem')}}/" + i3, function (data) {
            if (data.category === 1) {
                $('#item').text("Pilih fitur yang menurut anda paling " + data.item_left);
            } else {
                $('#item').text("Pilih fitur yang menurut anda paling " + data.item_right);
            }
            $('#myModal').modal('show')
        });
    }

</script>
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
