<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Headbar -->
    @include('Admin.layouts.headbar')
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <!-- Topbar -->
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> login</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> log out</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Sidebar -->
        @include('Admin.layouts.sidebar')

        <!-- Page wrapper -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item">
                                    <a href="index.html" class="link">
                                        <i class="mdi mdi-home-outline fs-4"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Edit About Us</h1>
                    </div>
                    <div class="col-6">
                        {{-- <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" class="btn btn-primary text-white" target="_blank">Upgrade</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            <!-- Container fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('admin.updateAbout') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Title -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                            </div>
                            
                            <!-- Description -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control">{{ $about->description }}</textarea>
                            </div>
                            
                            <!-- Years of Experience -->
                            <div class="form-group">
                                <label for="years_of_experience">Years of Experience</label>
                                <input type="number" name="years_of_experience" class="form-control" value="{{ $about->years_of_experience }}">
                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($about->image) }}" alt="Image Preview" width="100">
                            </div>
                
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by 
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    @include('Admin.layouts.script')
</body>

</html>
