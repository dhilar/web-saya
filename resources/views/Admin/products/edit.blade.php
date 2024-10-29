<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Latar belakang yang lebih netral */
        }

        .container {
            background: #ffffff; /* Latar belakang kontainer putih */
            padding: 30px;
            border-radius: 10px; /* Membuat sudut lebih melengkung */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
            margin-top: 50px; /* Margin atas untuk memberi ruang */
            max-width: 600px; /* Lebar maksimal kontainer */
            margin-left: auto; /* Rata tengah */
            margin-right: auto; /* Rata tengah */
        }

        h1 {
            font-size: 24px; /* Ukuran font judul */
            color: #333; /* Warna judul */
            margin-bottom: 20px; /* Ruang bawah judul */
            text-align: center; /* Rata tengah */
        }

        .form-label {
            font-weight: bold; /* Membuat label lebih tebal */
            color: #495057; /* Warna label */
        }

        .form-control {
            border: 1px solid #ced4da; /* Border input */
            border-radius: 5px; /* Sudut melengkung pada input */
            padding: 10px; /* Padding dalam input */
            width: 100%; /* Lebar penuh */
            box-sizing: border-box; /* Termasuk padding dan border dalam lebar */
            margin-bottom: 20px; /* Ruang bawah input */
        }

        .btn-primary {
            background-color: #007bff; /* Warna tombol simpan */
            border-color: #007bff; /* Border tombol simpan */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            cursor: pointer; /* Kursor tangan saat hover */
            transition: background-color 0.3s; /* Efek transisi */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna saat hover tombol simpan */
        }

        .btn-secondary {
            background-color: #6c757d; /* Warna tombol kembali */
            border-color: #6c757d; /* Border tombol kembali */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            cursor: pointer; /* Kursor tangan saat hover */
            transition: background-color 0.3s; /* Efek transisi */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Warna saat hover tombol kembali */
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1>Edit Produk</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" id="category" value="{{ $product->category }}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Kode Produk</label>
                <input type="text" name="code" class="form-control" id="code" value="{{ $product->code }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk (Kosongkan jika tidak ingin mengubah)</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="specification" class="form-label">Spesifikasi</label>
                <textarea name="specification" class="form-control" id="specification" required>{{ $product->specification }}</textarea>
            </div>
            <div class="mb-3">
                <label for="advantages" class="form-label">Keunggulan</label>
                <textarea name="advantages" class="form-control" id="advantages" required>{{ $product->advantages }}</textarea>
            </div>
            <div class="mb-3">
                <label for="video_url" class="form-label">URL Video (Opsional)</label>
                <input type="url" name="video_url" class="form-control" id="video_url" value="{{ $product->video_url }}">
            </div>

            <!-- Display the YouTube video if the URL exists -->
            @if ($product->video_url)
                <div class="mb-3">
                    <label class="form-label">Video YouTube</label>
                    <div class="embed-responsive" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe class="embed-responsive-item" src="{{ $product->video_url }}" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
                    </div>
                </div>
            @endif
            
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
