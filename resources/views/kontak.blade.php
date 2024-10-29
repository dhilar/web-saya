<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    @include('layouts.script')
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <style>
        /* Style untuk halaman kontak tetap sama */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; margin-top: 20px; }
        .contact-section { display: flex; justify-content: space-between; flex-wrap: wrap; margin-top: 40px; }
        .map-container { flex: 1; margin-right: 20px; }
        #map { height: 500px; width: 100%; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .form-container { flex: 1; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 500px; }
        .form-container h3 { margin-top: 0; }
        .form-container input, .form-container textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .form-container button { padding: 10px 20px; background-color: #007BFF; border: none; color: white; border-radius: 4px; cursor: pointer; width: 100%; }
        .form-container button:hover { background-color: #0056b3; }
        .contact-info { margin-top: 40px; display: flex; justify-content: space-around; flex-wrap: wrap; }
        .contact-item { background-color: #fff; padding: 20px; margin: 10px; width: 300px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .contact-item h3 { margin-top: 0; color: #333; }
        .contact-item a { text-decoration: none; color: #007BFF; }
    </style>
</head>
@include('layouts.navbar')
@include('layouts.topbar')
<body>
    <div class="container">
        <h1>Kontak Kami</h1>
        <div class="contact-section">
            <!-- Peta -->
            <div class="map-container">
                <div id="map"></div>
            </div>

            <!-- Formulir Kontak -->
            <div class="form-container">
                <h3>Kirim Pesan</h3>
                <form action="/send-message" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nama" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" rows="5" placeholder="Isi Pesan" required></textarea>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
        
        <!-- Informasi Kontak di Bawah -->
        <div class="contact-info">
            <!-- Alamat -->
            <div class="contact-item">
                <h3>Alamat PT</h3>
                <p>{{ $appSettings->nama_perusahaan ?? 'PT. Panca Karya Unggul' }}</p>
                <p>{{ $appSettings->alamat ?? 'Jl. Raya Cileungsi No.123, Bogor, Jawa Barat' }}</p>
            </div>
            <!-- WhatsApp -->
            <div class="contact-item">
                <h3>WhatsApp</h3>
                <p><a href="https://wa.me/{{ $appSettings->whatsapp ?? '6281234567890' }}" target="_blank">+{{ $appSettings->whatsapp ?? '62 812-3456-7890' }}</a></p>
            </div>
            <!-- Instagram -->
                     @php
                $instagramUsername = $appSettings->instagram ? basename(parse_url($appSettings->instagram, PHP_URL_PATH)) : 'nama_akun_ig';
            @endphp

            <div class="contact-item">
                <h3>Instagram</h3>
                <p>
                    <a href="https://instagram.com/{{ $instagramUsername }}" target="_blank" rel="noopener noreferrer">
                        Link instagram
                    </a>
                </p>
            </div>

            <!-- Email -->
            <div class="contact-item">
                <h3>Email</h3>
                <p><a href="mailto:{{ $appSettings->email ?? 'info@namadomain.com' }}">{{ $appSettings->email ?? 'info@namadomain.com' }}</a></p>
            </div>
            <!-- Tokopedia -->
            <div class="contact-item">
                <h3>Tokopedia</h3>
                <p><a href="{{ $appSettings->tokopedia ?? 'https://www.tokopedia.com/nama-toko' }}" target="_blank">Toko Kami di Tokopedia</a></p>
            </div>
        </div>
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta menggunakan Leaflet
        var map = L.map('map').setView([{{ $appSettings->latitude ?? '-6.34754' }}, {{ $appSettings->longitude ?? '106.91980' }}], 15);

        // Menambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Menambahkan marker untuk lokasi PT
        L.marker([{{ $appSettings->latitude ?? '-6.34754' }}, {{ $appSettings->longitude ?? '106.91980' }}]).addTo(map)
            .bindPopup('{{ $appSettings->nama_perusahaan ?? 'Lokasi PT' }}')
            .openPopup();
    </script>
</body>
@include('layouts.footer')
</html>
