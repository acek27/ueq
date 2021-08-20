@extends('layouts.master')

@section('content')
    @include('layouts._nav')
    <div id="home" class="bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
                        <div class="card">
                            <div class="row ml-20 mt-20">
                                <div class="">
                                    <div class="section-title text-left pb-20 wow fadeInUp" data-wow-duration="1s"
                                         data-wow-delay="0.2s">
                                        <h4 class="title">Contoh Pengisian Kuesioner UEQ</h4>
                                    </div> <!-- section title -->
                                    <div class="text-left mr-20 ml-20 pb-25">
                                        <p style="font-size: larger">1. Terdapat 2 impresi berlawanan. Pilih sesuai
                                            dengan
                                            impresi anda.</p>
                                        <br>
                                        <img src="{{asset('assets/images/contoh/contoh1.png')}}" alt="Logo">
                                        <hr>
                                    </div>
                                    <div class="text-left mr-20 ml-20 pb-25">
                                        <p style="font-size: larger">2. Penilaian dapat dilakukan dengan cara memilih
                                            salah satu lingkaran yang mewakili impresi anda.</p>
                                        <br>
                                        <img src="{{asset('assets/images/contoh/contoh2.png')}}" alt="Logo">
                                        <hr>
                                    </div>
                                    <div class="text-left mr-20 ml-20 pb-25">
                                        <p style="font-size: larger">3. Penilaian netral hingga negatif akan muncul
                                            kolom untuk memilih fitur yang mendukung impresi anda. Anda
                                            <span class="font-weight-bold">wajib</span> memilih
                                            salah satu fitur.</p>
                                        <br>
                                        <img style="width: 75%" src="{{asset('assets/images/contoh/contoh3.png')}}" alt="Logo">
                                        <hr>
                                    </div>
                                    <div class="text-left mr-20 ml-20 pb-25">
                                        <p style="font-size: larger">4. Setelah penilaian form sudah lengkap, klik
                                            <span class="font-weight-bold">‘submit’</span> pada pojok kanan bawah untuk
                                            mengirimkan penilaian anda.</p>
                                        <br>
                                        <img src="{{asset('assets/images/contoh/contoh4.png')}}" alt="Logo">
                                        <hr>
                                    </div>
                                    <div class="text-left mr-20 ml-20 pb-25">
                                        <p style="font-size: larger">5. Harap diperhatikan bahwa poin paling kiri tidak
                                            selalu memberikan penilaian buruk dan poin paling kanan tidak selalu
                                            memberikan penilaian baik.</p>
                                        <br>
                                        <img src="{{asset('assets/images/contoh/contoh5.png')}}" alt="Logo">
                                        <hr>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div> <!-- contact wrapper form -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->

@endsection
