@extends('dashboard')

@section('title')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PASIEN</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

    </div>
</div>
@endsection
@section('content')
<div class="card">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="card-header">
        <div class="text-left">
        <a class="btn btn-success" href="{{url('pasien/addview')}}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>No RM</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->no_rm}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->gender}}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Detail</i></a>
                            <a href="{{url('pasien/editview/'.$row->id)}}" class="btn btn-warning btn-sm">Edit</i></a>
                            <a href="{{url('pasien/delete/'.$row->id)}}" class="btn btn-danger btn-sm">Delete</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection