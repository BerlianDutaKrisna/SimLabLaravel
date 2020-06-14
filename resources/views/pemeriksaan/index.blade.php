@extends('main')

@section('title')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PMERIKSAAN</h1>
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
        <a class="btn btn-success" href="{{url('pemeriksaan/addview')}}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>No RM</th>
                    <th>NAMA</th>
                    <th>Ruangan</th>
                    <th>Pemeriksaan</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection