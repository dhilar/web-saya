<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('Admin.layouts.headbar')
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('Admin.layouts.header')

        @include('Admin.layouts.sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : '../assets/images/users/default.png' }}" class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                                    <h6 class="card-subtitle">{{ $user->role }}</h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted">Email address</small>
                                <h6>{{ $user->email }}</h6>
                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{ $user->phone }}</h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{ $user->address }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.profile.update') }}" method="POST" class="form-horizontal form-material mx-2">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password (Opsional)</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No. Handphone</label>
                                        <div class="col-md-12">
                                            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
