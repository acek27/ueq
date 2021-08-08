@extends('layouts.master')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

@endpush
@section('content')
    @include('layouts._nav')

    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
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
                                           placeholder="Nama lengkap" required>
                                </div> <!-- contact-form -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form mt-45">
                                            <label>Jenis Kelamin</label>
                                        </div>
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
                                    <div class="col-md-6">
                                        <div class="contact-form mt-45">
                                            <label>Usia</label>
                                            <input class="border border-primary" type="number" autocomplete="off"
                                                   name="age" required>
                                        </div> <!-- contact-form -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Asal Wilayah Kendaraan</label>
                                        <select class="form-control select2" name="location"
                                                id="location" required>
                                            <option value="">--pilih wilayah--</option>
                                            <option value="bangkalan">Kabupaten Bangkalan</option>
                                            <option value="banyuwangi">Kabupaten Banyuwangi</option>
                                            <option value="blitar">Kabupaten Blitar</option>
                                            <option value="bojonegoro">Kabupaten Bojonegoro</option>
                                            <option value="bondowoso">Kabupaten Bondowoso</option>
                                            <option value="batu">Kabupaten Batu</option>
                                            <option value="blitar">Kabupaten Blitar</option>
                                            <option value="gresik">Kabupaten Gresik</option>
                                            <option value="jember">Kabupaten Jember</option>
                                            <option value="jombang">Kabupaten Jombang</option>
                                            <option value="kediri">Kabupaten Kediri</option>
                                            <option value="lamongan">Kabupaten Lamongan</option>
                                            <option value="lumajang">Kabupaten Lumajang</option>
                                            <option value="madiun">Kabupaten Madiun</option>
                                            <option value="magetan">Kabupaten Magetan</option>
                                            <option value="malang">Kabupaten Malang</option>
                                            <option value="mojokerto">Kabupaten Mojokerto</option>
                                            <option value="nganjuk">Kabupaten Nganjuk</option>
                                            <option value="ngawi">Kabupaten Ngawi</option>
                                            <option value="pacitan">Kabupaten Pacitan</option>
                                            <option value="pamekasan">Kabupaten Pamekasan</option>
                                            <option value="pasuruan">Kabupaten Pasuruan</option>
                                            <option value="ponorogo">Kabupaten Ponorogo</option>
                                            <option value="probolinggo">Kabupaten Probolinggo</option>
                                            <option value="sampang">Kabupaten Sampang</option>
                                            <option value="sidoarjo">Kabupaten Sidoarjo</option>
                                            <option value="situbondo">Kabupaten Situbondo</option>
                                            <option value="sumenep">Kabupaten Sumenep</option>
                                            <option value="trenggalek">Kabupaten Trenggalek</option>
                                            <option value="tuban">Kabupaten Tuban</option>
                                            <option value="tulungagung">Kabupaten Tulungagung</option>
                                            <option value="kota batu">Kota Batu</option>
                                            <option value="kota blitar">Kota Blitar</option>
                                            <option value="kota kediri">Kota Kediri</option>
                                            <option value="kota madiun">Kota Madiun</option>
                                            <option value="kota malang">Kota Malang</option>
                                            <option value="kota mojokerto">Kota Mojokerto</option>
                                            <option value="kota pasuruan">Kota Pasuruan</option>
                                            <option value="kota probolinggo">Kota Probolinggo</option>
                                            <option value="kota surabaya">Kota Surabaya</option>
                                        </select>
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
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endpush
