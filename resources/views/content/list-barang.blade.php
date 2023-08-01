@extends('index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary">Tambah Barang</button>
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
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Tanggal Expired</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Dibuat</th>
                            <th>Tanggal Diedit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sabun</td>
                            <td>Perlengkapan Mandi</td>
                            <td>Rp 2.000</td>
                            <td>12 Desember 2023</td>
                            <td>Sabum merek nuvo</td>
                            <td>01 Jan 2023, 13:00:00</td>
                            <td>01 Jan 2023, 13:00:00</td>
                            <th>
                                <a href="#" class="btn btn-sm btn-success">Detail</a>
                                <a href="#" class="btn btn-sm btn-secondary">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection