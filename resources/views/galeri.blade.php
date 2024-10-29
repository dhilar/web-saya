<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layouts.navbar')
    @include('layouts.topbar')

    <style>
        /* CSS untuk galeri dan modal */
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .gallery-item {
            position: relative;
            width: 300px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            width: 100%;
            text-align: center;
            padding: 10px;
            border-radius: 0 0 8px 8px;
            font-size: 1.1rem;
            display: none;
        }

        .gallery-item:hover .overlay {
            display: block;
        }

        .modal-body img {
            width: 100%;
            border-radius: 8px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Mengatur posisi video dalam galeri */
        .video-wrapper {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 30px; /* Tambahkan jarak antar video */
        }

        .video-wrapper iframe {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1 class="text-center mt-4">Galeri Produk</h1>
    
    <div class="container gallery-container mt-5">
        <!-- Render produk secara dinamis -->
        @foreach($products as $product)
        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id }}">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            <div class="overlay">{{ $product->name }}</div>
        </div>

        <!-- Modal untuk detail produk -->
        <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel{{ $product->id }}">{{ $product->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        <p class="mt-4"><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <p><strong>Spesifikasi:</strong> {{ $product->specification }}</p>
                        <p><strong>Keunggulan:</strong> {{ $product->advantages }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('layouts.footer')
@include('layouts.script')
</html>
