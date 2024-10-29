<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sertifikasi</title>
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

        .form-group label {
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
            background-color: #0056b3; /* Warna saat hover */
        }

        .btn-secondary {
            background-color: #6c757d; /* Warna tombol batal */
            border-color: #6c757d; /* Border tombol batal */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            cursor: pointer; /* Kursor tangan saat hover */
            transition: background-color 0.3s; /* Efek transisi */
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Warna saat hover tombol batal */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Sertifikasi</h1>

        <form action="{{ route('admin.sertifikasi.store') }}" method="POST"> <!-- Ganti dengan URL yang sesuai -->
            @csrf <!-- Token CSRF untuk keamanan -->
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.sertifikasi.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>
