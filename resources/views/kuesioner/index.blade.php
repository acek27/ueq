@extends('layouts.master')
@section('content')
    @include('layouts._nav')

    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s"
                         data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-check-box"></i> Form
                            <span>Survei pengalaman pengguna.</span>
                        </h4>
                        <form id="contact-form" action="{{route('responden.update', $data->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="col-md-10">
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
                                                                   name="{{$datum->code}}"
                                                                   id="gender1" value="{{$i}}" required>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-left">
                                                <label>{{$datum->item_right}}</label>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                <div class="col-md-10 text-right">
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
