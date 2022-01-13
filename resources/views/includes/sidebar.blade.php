        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fab fa-meetup"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Monkermart</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Barang
            </div>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item {{ (request()->is('admin/products')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('products')}}">
                    <i class="fas fa-fw fa-boxes"></i>
                    <span>Daftar Barang</span></a>
            </li>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item {{ (request()->is('admin/categories')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('categories')}}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kategori Barang</span></a>
            </li>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-people-carry"></i>
                    <span>Pesanan Barang</span></a>
            </li>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-hand-holding-heart"></i>
                    <span>Peminjaman Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Konsumen
            </div>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Daftar Konsumen</span></a>
            </li>

            <!-- Nav Item - Konsumen -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Piutang Konsumen</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->