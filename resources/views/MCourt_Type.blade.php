@extends('MasterProject')
@section('title', 'Master Court_Type')
@section('content-title', 'Master Court_Type')
@section('content')
<div class="col-md-8">
    <a class="btn btn-success" href="">Tambah Data</a>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @forelse ($types as $type)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$type->id}}</td>
            <td>{{$type->name}}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="">Edit</a>
                <a class="btn btn-sm btn-danger" href="">Hapus</a>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">Belum ada data</div>
        @endforelse
    </table>
</div>
@endsection
