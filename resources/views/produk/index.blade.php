@include('layouts.navbar')
@include('layouts.topbar')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Produk</title>
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

        .product-list {
            list-style-type: none;
            padding-left: 0;
        }

        .product-list li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s;
        }

        .product-list li:hover {
            background-color: #f1f1f1;
        }

        .footer {
            text-align: center;
            padding: 30px 0;
            background-color: #7f848a;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Daftar Produk Kami</h1>
        <p>Temukan produk terbaik dengan harga dan spesifikasi yang sesuai kebutuhan Anda!</p>
    </div>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Produk</h2>
        <ul class="product-list">
            @foreach ($products as $product)
            <li>
                <h5>{{ $product->name }}</h5>
                <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                <p><strong>Spesifikasi:</strong> {{ $product->specification }}</p>
                {{-- <a href="{{ route('order', $product->id) }}" class="btn btn-primary">Order Sekarang</a> --}}
            </li>
            @endforeach
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include('layouts.script')

@include('layouts.footer')