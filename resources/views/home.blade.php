@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
@endpush
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
                        <table id="responden" class="table table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Responden</th>
                                @for($i = 1; $i<=26;$i++)
                                    <th scope="col">Q{{$i}}</th>
                                @endfor
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header hero -->
@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script !src="">
        $(document).ready(function () {
            var dt = $('#responden').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('responden.data')}}',
                columns: [
                    {data: 'name', name: 'name'},
                    @for($q=1;$q<=26;$q++)
                    {data: 'kuesioner.Q{{$q}}', name: 'kuesioner.Q1', orderable: false, searchable: false, align: 'center'},
                    @endfor
                    // {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ],
            });
        });
    </script>
@endpush
