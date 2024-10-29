<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keunggulan Produk</title>
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
    </style>
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.topbar')
    
    <div class="header">
        <h1>Keunggulan Produk Kami</h1>
        <p>Temukan keunggulan produk yang kami tawarkan untuk memenuhi kebutuhan Anda.</p>
    </div>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Keunggulan Produk</h2>
        @include('produk.project')

        <h2 class="text-center mb-4">Daftar Produk dan Harga</h2>
        <ul class="product-list">
            @foreach ($products as $product)
            <li>
                <h5>{{ $product->name }}</h5>
                <p><strong>Keunggulan:</strong> {{ $product->advantages }}</p>
                <p><strong>Harga:</strong> {{ $product->price }}</p>
            </li>
            @endforeach
        </ul>
    </div>


    @include('layouts.footer')

</body>

@include('layouts.script')

</html>
