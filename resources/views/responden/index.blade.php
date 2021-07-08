@extends('layouts.master')
@section('content')
    @include('layouts._nav')

    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-danger">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-user"></i> Masukkan
                            <span>informasi personal anda.</span>
                        </h4>
                        <form id="contact-form" action="{{route('responden.update', $data->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-lg-8">
                                <div class="contact-form mt-45">
                                    <label>Email</label>
                                    <input class="border border-secondary" type="email" name="email"
                                           value="{{$data->email}}" readonly>
                                </div> <!-- contact-form -->
                                <div class="contact-form mt-45">
                                    <label>Masukkan Nama</label>
                                    <input class="border border-primary" type="text" autocomplete="off" name="name"
                                           placeholder="Nama lengkap">
                                </div> <!-- contact-form -->
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           id="gender1" value="l" required>
                                                    <label class="form-check-label" for="gender1">
                                                        <strong>Laki-laki</strong>
                                                    </label>
                                                </div> <!-- contact-form -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                           id="gender2" value="p" required>
                                                    <label class="form-check-label" for="gender2">
                                                        <strong>Perempuan</strong>
                                                    </label>
                                                </div> <!-- contact-form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Usia</label>
                                        <input class="border border-primary" type="number" autocomplete="off"
                                               name="age">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Asal Kendaraan</label>
                                        <input class="border border-primary" type="text" autocomplete="off"
                                               name="location">
                                    </div> <!-- contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
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
@endsection
