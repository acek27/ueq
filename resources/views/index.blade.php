@extends('layouts.master')

@section('content')
    @include('layouts._nav')
    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">
           <div class="col-lg-6">
               @if(session()->has('message'))
                   <div class="alert alert-danger">
                       {{ session()->get('message') }}
                   </div>
               @endif
               @if ($errors->any())
                   <div class="alert alert-danger">
                       {!! $errors->first('email', '<p style="color:red">Maaf! Anda sudah melakukan kuesioner ini.</p>') !!}
                   </div>

               @endif
           </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-hero-content">
                        <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            <b>Survei</b><br> <span>Pengalaman Pengguna</span>
                            Aplikasi <b>E-Smart Samsat Jatim</b></h1>
                        <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            Mohon kesediannya untuk mengisi kuesioner berikut. Diharapkan untuk mengisi data dengan
                            valid karena akan ada hadiah untuk 4 (empat) orang yang beruntung. Terima kasih telah meluangkan
                            waktunya. Semoga bahagia dan sehat selalu!
                        </p>
                        <div class="wow fadeInUp mt-3" data-wow-duration="1s" data-wow-delay="0.8s">
                            <a href="#information" class="main-btn"> Mulai <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div> <!-- header hero content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s"
             data-wow-delay="1.1s">
            <div class="image">
                <img src="{{asset('assets/images/index.png')}}" alt="Hero Image">
            </div>
        </div> <!-- header hero image -->
    </div> <!-- header hero -->


    <!--====== ABOUT PART START ======-->

    <section id="information" class="about-area pt-115 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="mb-15 about-title text-center wow fadeInUp" data-wow-duration="1s"
                         data-wow-delay="0.3s">
                        <h6 class="welcome">Selamat Datang</h6>
                        <h3 class="title">Sebelum anda mengisi kuesioner, apakah anda selalu menggunakan aplikasi
                            E-Smart Samsat untuk keperluan sesuai hak akses yang diberikan?</h3>
                    </div>
                    <form id="contact-form" action="{{route('responden.store')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check float-right">
                                        <input class="form-check-input" type="radio" name="confirm"
                                               id="confirm1" value="1" required>
                                        <label class="form-check-label" for="confirm1">
                                            <strong>Ya</strong>
                                        </label>
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="confirm"
                                               id="confirm2" value="0" required>
                                        <label class="form-check-label" for="confirm2">
                                            <strong>Tidak</strong>
                                        </label>
                                    </div> <!-- contact-form -->
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="contact-form mt-10">
                                    <label>Masukkan Email Anda</label>
                                    <input autocomplete="off" class="form-control border border-danger text-center"
                                           type="email" name="email" required>
                                </div> <!-- contact-form -->
                            </div>
                        </div> <!-- row -->
                        <div class="row mt-20">
                            <div class="col text-center">
                                <button class="main-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-200 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <h6 class="sub-title">TERIMAKASIH ORANG BAIK!</h6>
                        <h4 class="title">Hallo, Saya Baitsu Putri Hidayah</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <p style="font-size: larger">Mahasiswa tingkat akhir Fakultas Ilmu Komputer Universitas Jember.
                Terimakasih sudah meluangkan waktunya untuk mengisi Kuesioner untuk keperluan tugas akhir saya.
                Akan ada 5 Orang yang beruntung akan saya hubungi lewat email,
                semoga kamu beruntung!</p>
            <div class="row justify-content-center">
                <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp"
                     data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="contact-info-icon">
                        <i class="lni-envelope"></i>
                    </div>
                </div> <!-- single contact info -->
            </div>
            <div class="row justify-content-center">
                <p class="text"><strong>baitsuputri@gmail.com</strong></p>
            </div>
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

@endsection
