<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sewa Mobil</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading mt-3">
        Dashboard
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Manajemen Mobil -->
    <li class="nav-item {{ Request::is('manajemen-mobil*') ? 'active' : '' }}">
        <a class="nav-link" href="/manajemen-mobil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Manajemen Mobil</span></a>
    </li>

    <!-- Nav Item - Peminjaman Mobil -->
    <li class="nav-item {{ Request::is('rent-car*') ? 'active' : '' }}">
        <a class="nav-link" href="/rent-car">
            <i class="fas fa-fw fa-table"></i>
            <span>Peminjaman Mobil</span></a>
    </li>

    <!-- Nav Item - Pengembalian Mobil -->
    <li class="nav-item {{ Request::is('return-car*') ? 'active' : '' }}">
        <a class="nav-link" href="/return-car">
            <i class="fas fa-fw fa-table"></i>
            <span>Pengembalian Mobil</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <p class="text-center mb-2">Login sebagai: <strong>
            @if (auth()->user()->role_id === 1)
                Administrator
            @else
                User
            @endif
            </strong></p>
    </div>

</ul>