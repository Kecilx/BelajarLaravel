@extends('MasterProject')
@section('title', '')
@section('content-title', '')
@section('content')
<div class="parent col-md-12 bg-light" id="content-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="mb-3"><h1>Master Transactions</h1></div>
                    <div class="card text-white shadow">
                        <div class="card-header bg-black">
                            <a class="btn btn-success mt-2 mb-2" href="">Tambah Data</a>
                        </div>
                        <div class="card-body bg-dark">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th class="th">No.</th>
                                        <th class="th">User_ID</th>
                                        <th class="th">Name</th>
                                        <th class="th">Address</th>
                                        <th class="th">Phone</th>
                                        <th class="th">Date</th>
                                        <th class="th">Court_ID</th>
                                        <th class="th">Starttime</th>
                                        <th class="th">Endtime</th>
                                        <th class="th">Paytotal</th>
                                        <th class="th">Action</th>
                                    </tr>
                                </thead>
                                @forelse($transactions as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->user->id }}</td> <!--Menampilkan Foreign key User-ID-->
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->Address }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->date}}</td>
                                        <td>{{ $data->courts->id}}</td> <!--Menampilkan Foreign key Court-ID-->
                                        <td>{{ $data->starttime }}</td>
                                        <td>{{ $data->endtime }}</td>
                                        <td>Rp. {{ $data->paytotal }}</td>
                                        <td>
                                            <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                @empty
                                @endforelse
                            </table>
                        </div>
                        <div class="card-footer bg-black"></div>
                    </div>
            </div>
            <div class="col-md-0 mt-3">

            </div>
        </div>
    </div>
</div>
@endsection
