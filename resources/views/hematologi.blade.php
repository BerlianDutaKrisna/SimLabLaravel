@extends('dashboard')

@section('title')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">HEMATOLOGI</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

    </div>
</div>
@endsection
@section('content')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>NO</th>
            <th>No RM</th>
            <th>NAMA</th>
            <th>PEMERIKSAAN</th>
            <th>AKSI</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>abc</td>
            <td>DL</td>
            <td>
                <button> cek </button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
@endsection