@extends('index')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPenggunaModal">Tambah Pengguna</button>
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
    <!-- Modal -->
    <div class="modal fade" id="tambahPenggunaModal" tabindex="-1" role="dialog"
        aria-labelledby="tambahPenggunaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahPenggunaModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                                @if($errors->has("nama"))
                                <span class="text-danger">{{$errors->first("nama")}}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">NIP</label>
                                <input type="text" name="nip" class="form-control" required>
                                @if($errors->has("nip"))
                                <span class="text-danger">{{$errors->first("nip")}}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                                @if($errors->has("email"))
                                <span class="text-danger">{{$errors->first("email")}}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="">Pilih Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Staf">Staf</option>
                                </select>
                                @if($errors->has("role"))
                                <span class="text-danger">{{$errors->first("role")}}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                                @if($errors->has("password"))
                                <span class="text-danger">{{$errors->first("password")}}</span>
                                @endif
                            </div>
                            <div class="row">
                                <label for="">Retype Password</label>
                                <input type="password" name="retype_password" class="form-control" required>
                                @if($errors->has("retype_password"))
                                <span class="text-danger">{{$errors->first("retype_password")}}</span>
                                @endif
                            </div>
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
