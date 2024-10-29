<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('Admin.layouts.headbar')
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    
    {{-- @include('Admin.layouts.header') --}}
    @include('Admin.layouts.sidebar')
    @include('Admin.layouts.logo')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Keunggulan Project atau produk</h1> 
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('admin.project.create') }}" class="btn btn-primary text-white">Add New Project</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Project List</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($projects as $project)
                                                <tr>
                                                    <td>{{ $project->title }}</td>
                                                    <td>{{ $project->description }}</td>
                                                    <td><img src="{{ asset($project->image) }}" width="100"></td>
                                                    <td>
                                                        <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                        <form action="{{ route('admin.project.delete', $project->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE') <!-- Menyatakan bahwa ini adalah permintaan DELETE -->
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus proyek ini?');">Delete</button>
                                                        </form>                                                        
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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