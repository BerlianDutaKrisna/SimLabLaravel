@extends('main')

@section('title')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">EDIT PASIEN</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

    </div>
</div>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="text-left">
            <a class="btn btn-secondary" href="{{url('pasien')}}">Kembali</a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{url('pasien/edit/'.$data->no_rm)}}" method="post">
        @method('GET')
        @csrf
            <div class="form-group row">
                <label for="inputRm" class="col-sm-2 col-form-label">No RM</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputRm" name="no_rm" value="{{$data->no_rm}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="nama_pasien" value="{{$data->nama_pasien}}">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Jenis Kelamin</label>
                    <select id="inputGender" class="form-control" name="gender">
                        <option selected disabled value="{{$data->gender}}">{{$data->gender}}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">perempuan</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="inputAge">Usia</label>
                    <input type="text" class="form-control" id="inputAge" name="usia" value="{{$data->usia}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="inputBirth">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="inputBirth" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Edit Data</button>
        </form>
    </div>
</div>
@endsection