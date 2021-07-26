@extends('layouts.master')
@section('content')
    @include('layouts._nav')

    <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
         style="background-image: url(assets/images/header-hero.jpg)">
        <div class="container">
            <div class="row">
                <div class="card col-lg-12">
                    <div class="card-header">
                        <h4>Data Responden</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Responden</th>
                                @for($i = 1; $i<=26;$i++)
                                    <th scope="col">Q{{$i}}</th>
                                @endfor
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datum)
                                <tr>
                                    <th>{{$datum->name}}</th>
                                    <td>{{$datum->kuesioner->Q1}}</td>
                                    <td>{{$datum->kuesioner->Q2}}</td>
                                    <td>{{$datum->kuesioner->Q3}}</td>
                                    <td>{{$datum->kuesioner->Q4}}</td>
                                    <td>{{$datum->kuesioner->Q5}}</td>
                                    <td>{{$datum->kuesioner->Q6}}</td>
                                    <td>{{$datum->kuesioner->Q7}}</td>
                                    <td>{{$datum->kuesioner->Q8}}</td>
                                    <td>{{$datum->kuesioner->Q9}}</td>
                                    <td>{{$datum->kuesioner->Q10}}</td>
                                    <td>{{$datum->kuesioner->Q11}}</td>
                                    <td>{{$datum->kuesioner->Q12}}</td>
                                    <td>{{$datum->kuesioner->Q13}}</td>
                                    <td>{{$datum->kuesioner->Q14}}</td>
                                    <td>{{$datum->kuesioner->Q15}}</td>
                                    <td>{{$datum->kuesioner->Q16}}</td>
                                    <td>{{$datum->kuesioner->Q17}}</td>
                                    <td>{{$datum->kuesioner->Q18}}</td>
                                    <td>{{$datum->kuesioner->Q19}}</td>
                                    <td>{{$datum->kuesioner->Q20}}</td>
                                    <td>{{$datum->kuesioner->Q21}}</td>
                                    <td>{{$datum->kuesioner->Q22}}</td>
                                    <td>{{$datum->kuesioner->Q23}}</td>
                                    <td>{{$datum->kuesioner->Q24}}</td>
                                    <td>{{$datum->kuesioner->Q25}}</td>
                                    <td>{{$datum->kuesioner->Q26}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{$data->links()}}
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
@endsection
