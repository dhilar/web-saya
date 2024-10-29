<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota Tim</title>
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

        .btn-success {
            background-color: #28a745; /* Warna tombol simpan */
            border-color: #28a745; /* Border tombol simpan */
            color: white; /* Warna teks tombol */
            padding: 10px 20px; /* Padding dalam tombol */
            border: none; /* Tanpa border */
            border-radius: 5px; /* Sudut melengkung pada tombol */
            cursor: pointer; /* Kursor tangan saat hover */
            transition: background-color 0.3s; /* Efek transisi */
        }

        .btn-success:hover {
            background-color: #218838; /* Warna saat hover tombol simpan */
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

        .mb-3 {
            margin-bottom: 1rem; /* Menambahkan margin bawah pada setiap grup form */
        }

        .current-image {
            margin-top: 10px; /* Ruang atas untuk gambar yang sedang ditampilkan */
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h1>Edit Anggota Tim</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $team->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $team->jabatan }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*">
                <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->nama }}" width="100" class="current-image">
            </div>
            <div class="mb-3">
                <label for="facebook_link" class="form-label">Link Facebook</label>
                <input type="url" name="facebook_link" class="form-control" id="facebook_link" value="{{ $team->facebook_link }}">
            </div>
            <div class="mb-3">
                <label for="twitter_link" class="form-label">Link Twitter</label>
                <input type="url" name="twitter_link" class="form-control" id="twitter_link" value="{{ $team->twitter_link }}">
            </div>
            <div class="mb-3">
                <label for="instagram_link" class="form-label">Link Instagram</label>
                <input type="url" name="instagram_link" class="form-control" id="instagram_link" value="{{ $team->instagram_link }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.team.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
