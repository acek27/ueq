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
                            <div class="row justify-content-center mt-20">
                                <div class="col-lg-6">
                                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s"
                                         data-wow-delay="0.2s">
                                        <h6 class="sub-title">TERIMAKASIH ORANG BAIK!</h6>
                                        <h4 class="title">Hallo, Saya Baitsu Putri Hidayah</h4>
                                    </div> <!-- section title -->
                                </div>
                            </div> <!-- row -->
                            <div class="text-center mr-20 ml-20">
                                <p style="font-size: larger">Mahasiswa tingkat akhir Fakultas Ilmu Komputer Universitas
                                    Jember.
                                    Terimakasih sudah meluangkan waktunya untuk mengisi Kuesioner untuk keperluan tugas
                                    akhir saya.
                                    Akan ada 5 Orang yang beruntung akan saya hubungi lewat email,
                                    semoga kamu beruntung!</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp"
                                     data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="contact-info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                </div> <!-- single contact info -->
                            </div>
                            <div class="row justify-content-center mb-20">
                                <p class="text"><strong>baitsuputri@gmail.com</strong></p>
                            </div>
                        </div> <!-- contact wrapper form -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->

@endsection
