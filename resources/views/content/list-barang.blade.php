@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarangModal">Tambah Barang</button>
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
    <!-- Modal -->
    <div class="modal fade" id="tambahBarangModal" tabindex="-1" role="dialog" aria-labelledby="tambahBarangModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                                @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                </select>
                                @if ($errors->has('kategori'))
                                    <span class="text-danger">{{ $errors->first('kategori') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Harga</label>
                                <input type="number" name="harga" class="form-control" required>
                                @if ($errors->has('harga'))
                                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Tanggal Expired</label>
                                <input type="date" name="expired_at" class="form-control" required>
                                @if ($errors->has('expired_at'))
                                    <span class="text-danger">{{ $errors->first('expired_at') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control" accept=".jpg,.jpeg,.png">
                                @if ($errors->has('foto'))
                                    <span class="text-danger">{{ $errors->first('foto') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
