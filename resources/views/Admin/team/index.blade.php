<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('Admin.layouts.headbar')
    <title>Dashboard Admin - Team</title>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <!-- Header Topbar -->
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

        <!-- Sidebar -->
        @include('Admin.layouts.sidebar')

        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Team</h1>
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            <a href="{{ route('admin.team.create') }}" class="btn btn-primary text-white">Tambah Team</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Image</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>{{ $team->nama }}</td>
                                    <td>{{ $team->jabatan }}</td>
                                    <td><img src="{{ asset($team->image) }}" alt="Image" width="50"></td>
                                    <td>{{ $team->facebook_link }}</td>
                                    <td>{{ $team->twitter_link }}</td>
                                    <td>{{ $team->instagram_link }}</td>
                                    <td>
                                        <a href="{{ route('admin.team.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.team.destroy', $team->id) }}" method="POST" style="display:inline;">
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

            <!-- Footer -->
            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
    </div>

    @include('Admin.layouts.script')
</body>

</html>
