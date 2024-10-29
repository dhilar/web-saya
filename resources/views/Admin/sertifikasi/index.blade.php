<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('Admin.layouts.headbar')
    <title>Dashboard Admin - Galeri Sertifikasi</title>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    @include('Admin.layouts.logo')
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="mdi mdi-magnify me-1"></i>
                                <span class="font-16">Search</span>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> Login</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @include('Admin.layouts.sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri Sertifikasi</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Galeri Sertifikasi</h1>
                    </div>
                    <div class="col-6">
                        {{-- <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/"
                                class="btn btn-primary text-white" target="_blank">Upgrade</a>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <a href="{{ route('admin.sertifikasi.create') }}" class="btn btn-primary mb-3">Tambah Sertifikasi</a>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Judul Sertifikasi</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sertifikasis as $sertifikasi)
                                <tr>
                                    <td>{{ $sertifikasi->id }}</td>
                                    <td>{{ $sertifikasi->title }}</td>
                                    <td>{{ $sertifikasi->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.sertifikasi.edit', $sertifikasi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.sertifikasi.destroy', $sertifikasi->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
    </div>

    @include('Admin.layouts.script')
</body>

</html>
