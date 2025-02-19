@extends('MasterProject')
@section('title', 'Master Courts')
@section('content-title', 'Master Courts')
@section('content')
    <div class="col-md-8">
        <a href="" class="btn btn-success">Tambah Data</a>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Court Type</th>
                <th>Court Name</th>
                <th>Action</th>
            </tr>

            @forelse($courts as $court)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Type {{ $court->court_type_id }}</td>
                    {{-- <td>{{$court->type->name}}</td> --}}
                    <td>{{ $court->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="">Edit</a>
                        <a class="btn btn-sm btn-danger" href="">Hapus</a>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">
                    Belum Ada Data
                </div>
            @endforelse
        </table>
    </div>

    <div class="col-md-4">
    </div>
@endsection
