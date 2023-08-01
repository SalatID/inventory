@extends('index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary">Tambah Pengguna</button>
        </div>
    </div>
    <div class="row">
        <div class="col card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Emai</th>
                            <th>Role</th>
                            <th>Tanggal Dibuat</th>
                            <th>Tanggal Diedit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mursalat</td>
                            <td>1234</td>
                            <td>mursalat@gmail.com</td>
                            <td>Admin</td>
                            <td>01 Jan 2023, 13:00:00</td>
                            <td>01 Jan 2023, 13:00:00</td>
                            <th>
                                <a href="#" class="btn btn-success">Detail</a>
                                <a href="#" class="btn btn-secondary">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection