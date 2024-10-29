<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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
        <h1>Tambah Produk</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" id="category" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Kode Produk</label>
                <input type="text" name="code" class="form-control" id="code" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" class="form-control" id="price" required>
            </div>
            <div class="mb-3">
                <label for="specification" class="form-label">Spesifikasi</label>
                <textarea name="specification" class="form-control" id="specification" required></textarea>
            </div>
            <div class="mb-3">
                <label for="advantages" class="form-label">Keunggulan</label>
                <textarea name="advantages" class="form-control" id="advantages" required></textarea>
            </div>
            <div class="mb-3">
                <label for="video_url" class="form-label">URL Video (Opsional)</label>
                <input type="url" name="video_url" class="form-control" id="video_url">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Produk</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
