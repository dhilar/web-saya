<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sertifikasi</title>
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
            background-color: #007bff; /* Warna tombol perbarui */
            border-color: #007bff; /* Border tombol perbarui */
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
        <h1>Edit Sertifikasi</h1>

        <form action="{{ route('admin.sertifikasi.update', $sertifikasi->id) }}" method="POST"> <!-- Ganti dengan URL yang sesuai -->
            @csrf <!-- Tambahkan token CSRF jika diperlukan -->
            @method('PUT') <!-- Menyisipkan metode PUT -->
            
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $sertifikasi->title }}" required> <!-- Ganti dengan judul saat ini -->
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" required>{{ $sertifikasi->description }}</textarea> <!-- Ganti dengan deskripsi saat ini -->
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('admin.sertifikasi.index') }}" class="btn btn-secondary">Batal</a> <!-- Tombol Batal mengarah ke route index -->
        </form>
    </div>
</body>

</html>
