<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="{{route('pengguna.list')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Pengguna</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('barang.list')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Barang</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Gudang</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('kategori.list')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Manajemen Kategori</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Scan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>