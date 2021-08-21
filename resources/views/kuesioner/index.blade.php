<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="_token" content="{{ csrf_token() }}">
{{--    <meta name="viewport" content="initial-scale=0.1">--}}
    <!--====== Title ======-->
    <title>Survei Kepuasan Pengguna - Kuesioner</title>
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
    <link rel="stylesheet" href="{{asset('assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

    <link href="{{asset('asetsba2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('asetsba2/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <style>
        .container-non-responsive {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
            width: 1165px;
        }
    </style>
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
        <div class="container-non-responsive">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
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
                        <h4 class="contact-title"><i class="lni-check-box"></i> Form
                            <span>Survei pengalaman pengguna.</span>
                        </h4>

                        <form id="contact-form"
                              action="{{route('kuesioner.update', $data->id)}}"
                              method="post">
                            @csrf
                            @method('PUT')
                            <div class="tab-content">
                                @php($tab = 1)
                                @php($temp = 0)
                                @foreach($kuesioner->chunk(7) as $putri)
                                    <div role="tabpanel" class="tab-pane fade {{$tab == 1 ? 'in active show':''}}"
                                         id="q-tab{{$tab}}">
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 col-sm-12 mb-4">
                                                <!-- Project Card Example -->
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Kuesioner
{{--                                                            <span class="text-muted font-italic"> (test</span>--}}
                                                        </h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4 class="font-weight-bold">Setelah anda menggunakan Aplikasi E-Smart Samsat
                                                        Jatim, bagaimana impresi anda terkait keseluruhan tampilan aplikasi tersebut?</h4>
                                                        <div class="col-md-12 col-12 col-sm-12 bg-light">
                                                            @php($q = 1+$temp)
                                                            @foreach($putri as $datum)
                                                                <div class="mt-45">
                                                                    <div class="row alert-success">
                                                                        <div class="col-sm-3 col-3 d-flex justify-content-end">
                                                                            <label
                                                                                style="font-size: larger"><strong>{{$datum->item_left}}</strong></label>
                                                                        </div>
                                                                        <div class="col-sm-6 col-6 text-center justify-content-center d-flex">
                                                                            <div class="row">
                                                                                @for($i = 1; $i<=7;$i++)
                                                                                    <div class="form-check ml-4">
                                                                                        <input class="form-check-input"
                                                                                               type="radio"
                                                                                               name="Q{{$q}}"
                                                                                               data-id="{{$q}}"
                                                                                               onclick="q{{$q}}checked({{$i}}, {{$q}})"
                                                                                               value="{{$i}}"
                                                                                               required>
                                                                                        <label>{{$i}}</label>
                                                                                    </div>
                                                                                @endfor
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 col-3 d-flex justify-content-start">
                                                                            <label
                                                                                style="font-size: larger"><strong>{{$datum->item_right}}</strong></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @php($q++)
                                                                @php($temp++)
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        {{--                                                    @if($tab > 1)--}}
                                                        {{--                                                        <a class="btn btn-primary" href="#q-tab{{$tab - 1}}"--}}
                                                        {{--                                                           role="tab"--}}
                                                        {{--                                                           data-toggle="tab"><i--}}
                                                        {{--                                                                class="fa fa-arrow-left"></i></a>--}}
                                                        {{--                                                    @endif--}}
                                                        @if($tab < 4)
                                                            <a class="btn btn-primary" id="next{{$tab}}"
                                                               href="#q-tab{{$tab+1}}"
                                                               role="tab" style="float: right"
                                                               data-toggle="tab">Selanjutnya <i
                                                                    class="fa fa-arrow-right"></i></a>
                                                        @endif
                                                        @if($tab == 4)
                                                            <button class="btn btn-primary" type="submit"
                                                                    style="float: right"><i class="fa fa-upload"></i>
                                                                Submit
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php($tab++)
                                @endforeach
                            </div>
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="item" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="item"></h6>
                    {{--                    <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>--}}
                </div>
                <form id="contact-form">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-12 text-center">
                            <select id="fitur" name="fitur" class="form-control border border-primary text-center">
                                <option value="1">Informasi</option>
                                <option value="2">Besaran Pajak</option>
                                <option value="3">Informasi Pengesahan</option>
                            </select>
                        </div>
                        <input type="hidden" id="item_id" name="item_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="ajaxSubmit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="notif">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Petunjuk Pengisian Kuesioner UEQ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td>
                                Penilaian metode UEQ merupakan penilaian secara keseluruhan pada aplikasi E-Smart
                                Samsat Jatim.
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>
                                Berikan penilaian pada poin yang mendekati sesuai dengan impresi anda.
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>
                                Poin paling kiri tidak selalu bernilai buruk dan poin paling kanan tidak selalu bernilai
                                baik.
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>
                                Pada setiap item pertanyaan merupakan kondisi yang berlawanan.
                            </td>
                        </tr>
                        {{--                        <tr>--}}
                        {{--                            <td>5.</td>--}}
                        {{--                            <td>--}}
                        {{--                                Jika anda memilih impresi negatif, akan ada pertanyaan tambahan mengenai pilihan fitur--}}
                        {{--                                yang--}}
                        {{--                                harus anda pilih.--}}
                        {{--                            </td>--}}
                        {{--                        </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</header>

<!--====== HEADER PART ENDS ======-->

<footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
    <div class="container">
        <div class="footer-copyright text-center">
            <p class="text">© 2021 Created by Gembelz All Rights Reserved.</p>
        </div>
    </div> <!-- container -->
</footer>

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

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

<script src="{{asset('assets/js/main.js')}}"></script>
<!--====== Main js ======-->

<script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('asetsba2/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('asetsba2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('asetsba2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('asetsba2/js/sb-admin-2.min.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#notif').modal('show');
    });
</script>
<script>
    function hapus(i) { //fungsi untuk menghapus fitur
        $.ajax({
            url: "{{route('feature.delete')}}",
            method: 'post',
            data: {
                item_id: i,
                responden_id: {{$data->id}},
            },
            success: function (result) {
                console.log(result.message)
            }
        });
    }

    function logic(q, i, data, left, right) { //fungsi logika untuk tampil popup
        if (data === 1) {
            $('#item').text("Pilih fitur yang menurut anda paling " + left);
            if (q <= 4) {
                $('#myModal').modal('show')
            } else {
                hapus(i)
            }
        } else {
            $('#item').text("Pilih fitur yang menurut anda paling " + right);
            if (q >= 4) {
                $('#myModal').modal('show')
            } else {
                hapus(i)
            }
        }
    }

    function q1checked(q, i) { //fungsi untuk mengambil data ketika radio dicek
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q2checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q3checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q4checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q5checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q6checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q7checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q8checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q9checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q10checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q11checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q12checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q13checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q14checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q15checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q16checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q17checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q18checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q19checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q20checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q21checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q22checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q23checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q24checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q25checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

    function q26checked(q, i) {
        $.get("{{url('/getitem')}}/" + i, function (data) {
            logic(q, i, data.category, data.item_left, data.item_right)
            $('#item_id').val(i)
        });
    }

</script>
<script>
    $(document).ready(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-start',
            showConfirmButton: false,
            timer: 3000
        });

        $('#ajaxSubmit').click(function (e) { //syntax untuk menyimpan hasil kuesioner
            e.preventDefault();
            $.ajax({
                url: "{{route('feature.submit')}}",
                method: 'POST',
                data: {
                    item_id: $('#item_id').val(),
                    responden_id: {{$data->id}},
                    fitur: $('#fitur').val(),
                },
                success: function (result) {
                    $('#myModal').modal('hide')
                    Toast.fire({
                        type: 'success',
                        title: 'Berhasil disimpan.'
                    })
                }
            });
        });
    });
</script>
</body>

</html>
