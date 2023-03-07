<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">{{config('app.name')}}</div>
    </a>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        MASTER
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('kategori.index')}}">
            <i class="fas fa-cubes"></i>
            <span>Kategori</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('produk.index')}}">
            <i class="fas fa-cube"></i>
            <span>Produk</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('member.index')}}">
            <i class="fas fa-users"></i>
            <span>Member</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('supplier.index')}}">
            <i class="fas fa-truck"></i>
            <span>Supplier</span></a>
    </li>
    <div class="sidebar-heading">
        TRANSAKSI
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('pengeluaran.index')}}">
            <i class="fas fa-money-bill"></i>
            <span>Pengeluaran</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('pembelian.index')}}">
            <i class="fas fa-cart-arrow-down"></i>
            <span>Pembelian</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-coins"></i>
            <span>Penjualan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas  fa-book"></i>
            <span>Transaksi Lama</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas  fa-book"></i>
            <span>Transaksi Baru</span></a>
    </li>
    <div class="sidebar-heading">
        REPORT
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fa fa-file-pdf"></i>
            <span>Laporan</span></a>
    </li>
</ul>
