@extends('index')

@section('content')
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Barang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Produk::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Gudang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Gudang::count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <label for="">Stok Barang</label>
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <td>Barang</td>
                                    <td>Stok</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stokBarang as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->stok_akhir }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <label for="">Kapasitas Gudang</label>
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <td>Gudang</td>
                                    <td>Kapasitas</td>
                                    <td>Terisi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kapasitasGudang as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->kapasitas }}</td>
                                        <td>{{ $item->terisi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
