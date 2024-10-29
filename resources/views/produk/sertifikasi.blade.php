<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    @include('layouts.navbar')
    @include('layouts.topbar')

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
            padding-top: 80px; /* Sesuaikan dengan tinggi navbar/topbar */
            padding-bottom: 50px; /* Sesuaikan dengan tinggi footer */
        }
        /* .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        } */
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
        .certification {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .certification:hover {
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .certification h2 {
            color: #0056b3;
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .certification p {
            line-height: 1.6;
            margin: 5px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
        .icon {
            color: #007bff;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Sertifikasi Produk</h1>
        @foreach ($sertifikasis as $sertifikasi)
            <div class="certification">
                <h2><i class="fas fa-certificate icon"></i>{{ $sertifikasi->title }}</h2>
                <p>{{ $sertifikasi->description }}</p>
            </div>
        @endforeach
    </div>
    
    <div class="container mt-4">
        <h2 class="text-center">Video Produk</h2>
        <div class="row justify-content-center">
            <!-- Render video secara dinamis di luar modal -->
            @foreach($products as $product)
                @if($product->video_url)
                    <div class="col-md-6 mt-4">
                        <div class="video-wrapper">
                            <iframe src="{{ $product->video_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.script')
</body>
</html>
