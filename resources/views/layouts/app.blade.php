<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .header {
            text-align: center;
            padding: 50px 0;
            background-color: #777777;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
        }

        .home-content {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .home-content img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Tambahkan gaya untuk tombol WhatsApp mengambang */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .whatsapp-button a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-size: 30px;
        }

        .whatsapp-button a:hover {
            background-color: #1ebe57;
        }
    </style>
    @include('layouts.script')
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.topbar')

    <!-- Header Start -->
    <div class="header">
        <h1>Selamat Datang di website kami</h1>
        <p></p>
    </div>
    <!-- Header End -->

    <div class="container mt-5">
        <!-- Konten lainnya -->
        @include('layouts.hero')
        @include('layouts.whychooseus')
        <div class="section-title">
            <h2>Keunggulan project kami</h2>
        </div>
        <div class="home-content">
            @include('produk.project')
        </div>
        <div class="home-content">
            @include('layouts.team')
        </div>
        <div class="home-content">
            @include('layouts.contact')
        </div>
        <div class="home-content">
            @include('layouts.testimonial')
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Back to Top Button -->
    <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>-->

    <!-- Tombol WhatsApp Mengambang -->
    <div class="whatsapp-button">
        <a href="https://wa.me/+6285695070039" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    @include('layouts.script')

    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</body>
</html>
