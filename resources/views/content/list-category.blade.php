@extends('index')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKategoriModal">Tambah
                    Kategori</button>
            </div>
        </div>
        <div class="row">
            <div class="col card">
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Dibuat Oleh</th>
                                <th>Diubah Oleh</th>
                                <th>Tanggal Dibuat</th>
                                <th>Tanggal Diedit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($data as $val)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$val->nama}}</td>
                                <td>{{$val->created_user}}</td>
                                <td>{{$val->updated_user}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{$val->updated_at}}</td>
                                <th>
                                    <a href="{{route('kategori.detail',[$val->id])}}" class="btn btn-sm btn-success">Detail</a>
                                    <a href="{{route('kategori.edit',[$val->id])}}" class="btn btn-sm btn-secondary">Edit</a>
                                    <a href="#" onclick="deleteData(this)" data-src="{{route('kategori.hapus',[$val->id])}}" class="btn btn-sm btn-danger">Hapus</a>
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
    <div class="modal fade" id="tambahKategoriModal" tabindex="-1" role="dialog"
        aria-labelledby="tambahKategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('kategori.tambah')}}" method="POST">
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
