<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
        .form-control:focus { border-color: #007bff; outline: none; }
        .btn { display: inline-block; padding: 10px 15px; color: #fff; background-color: #007bff; border: none; border-radius: 4px; text-decoration: none; }
        .btn:hover { background-color: #0056b3; }
        footer { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
        .breadcrumb { padding: 10px 0; background: none; border-bottom: 1px solid #ddd; }
        .breadcrumb-item { display: inline; }
        .breadcrumb-item + .breadcrumb-item:before { content: " / "; padding: 0 5px; color: #777; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
    </style>
</head>

<body>
    <div class="container">
        <div class="breadcrumb">
            <span class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></span>
            <span class="breadcrumb-item">Create Project</span>
        </div>
        <h1>Create New Project</h1>
        
        <!-- Notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn">Save Project</button>
        </form>
    </div>

    
</body>
</html>
