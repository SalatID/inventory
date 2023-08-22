@extends('index')
@section('content')
    <div class="container">
        <div class="row">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$data->nama}}" disabled>
        </div>
        <div class="row">
            <label for="">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{$data->nip}}" disabled>
        </div>
        <div class="row">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="{{$data->email}}" disabled>
        </div>
        <div class="row">
            <label for="">Role</label>
            <input type="text" name="role" class="form-control" value="{{$data->role}}" disabled>
        </div>
        <div class="row">
            <label for="">Dibuat Oleh</label>
            <input type="text" name="created_user" class="form-control" value="{{$data->created_user}}" disabled>
        </div>
        <div class="row">
            <label for="">Tanggal Dibuat</label>
            <input type="text" name="created_at" class="form-control" value="{{$data->created_at}}" disabled>
        </div>
        <div class="row">
            <label for="">Diubah Oleh</label>
            <input type="text" name="updated_user" class="form-control" value="{{$data->updated_user}}" disabled>
        </div>
        <div class="row">
            <label for="">Tanggal Diubah</label>
            <input type="text" name="updated_at" class="form-control" value="{{$data->updated_at}}" disabled>
        </div>
    </div>
@endsection