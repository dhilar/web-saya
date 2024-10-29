<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

        .about-content {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-content img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .experience-box {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .experience-box h3 {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.topbar')

 
    
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content">
                    <img src="{{ asset('' . $about->image) }}" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>{{ $about->title }}</h2>
                    <p>{{ $about->description }}</p>
                    <div class="experience-box">
                        <h3>{{ $about->years_of_experience ?? 'N/A' }} Years of Experience</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

@include('layouts.script')

</html>
