@extends('main')

@section('title')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">DASHBOARD</h1>
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
            
        </div>
    </div>
    <div class="card-body">
        <div class="card text-white bg-success mb-3 text-center" style="max-width: 18rem;">
            <div class="card-body">
            <a class="btn btn-outline-light" href="{{url('pemeriksaan')}}">
                    <h5 class="card-title">Buat Pemeriksaan baru</h5>
                </a>
            </div>
        </div>
    </div>

@endsection