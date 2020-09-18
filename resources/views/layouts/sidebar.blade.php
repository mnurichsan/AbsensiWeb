<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">Antama</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteNamed('home')  ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Absen
    </div>

    <li class="nav-item {{ Route::currentRouteNamed('absen.index')  ? 'active' : '' }}">
        <a class="nav-link" href="{{route('absen.index')}}">
            <i class="fas fa-fw fa-id-badge"></i>
            <span>Absensi</span>
        </a>
    </li>
    <li class="nav-item {{ Route::currentRouteNamed('darurat.index')  ? 'active' : '' }}">
        <a class="nav-link" href="{{route('darurat.index')}}">
            <i class="fas fa-business-time"></i>
            <span>Menu Darurat</span>
        </a>
    </li>
    <li class="nav-item {{ Route::currentRouteNamed('cuti.index')  ? 'active' : '' }}">
        <a class="nav-link" href="{{route('cuti.index')}}">
            <i class="fas fa-location-arrow"></i>
            <span>Menu Cuti</span>
        </a>
    </li>

    <li class="nav-item {{ Route::currentRouteNamed('absen.rekap')  ? 'active' : '' }}">
        <a class="nav-link" href="{{route('absen.rekap')}}">
            <i class="fas fa-book-open"></i>
            <span>Rekap Absensi</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Data Pegawai
    </div>

    <li class="nav-item {{ Route::currentRouteNamed('pegawai.index')  ? 'active' : '' }}">
        <a class="nav-link" href="{{route('pegawai.index')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Pegawai</span>
        </a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>