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
                                <th>Dibuat Oleh</th>
                                <th>Tanggal Dibuat</th>
                                <th>Diubah Oleh</th>
                                <th>Tanggal Diedit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($data as $val)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$val->nama}}</td>
                                <td>{{$val->data_kategori->nama}}</td>
                                <td>Rp {{number_format($val->harga)}}</td>
                                <td>{{$val->expired_at}}</td>
                                <td>{{$val->deskripsi}}</td>
                                <td>{{$val->created_user}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{$val->updated_user}}</td>
                                <td>{{$val->updated_at}}</td>
                                <th>
                                    <a href="{{route('barang.detail',[$val->id])}}" class="btn btn-sm btn-success">Detail</a>
                                    <a href="{{route('barang.edit',[$val->id])}}" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </th>
                            </tr>
                            @endforeach
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
                <form action="{{route('barang.tambah')}}" method="POST" enctype="multipart/form-data">
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
                                <select name="kategori_id" class="form-control" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach(\App\Models\Kategori::all() as $val)
                                        <option value="{{$val->id}}">{{$val->nama}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategori_id'))
                                    <span class="text-danger">{{ $errors->first('kategori_id') }}</span>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
