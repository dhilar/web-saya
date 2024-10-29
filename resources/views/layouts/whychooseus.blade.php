{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-1 text-white">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Why Choose Us Section Start -->
    
    <!-- Why Choose Us Section End -->


    <!-- Team Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5">Our Team</h1>
            <div class="row g-5">
                @foreach($teamMembers as $member)
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                        <div class="team-text">
                            <h3>{{ $member['name'] }}</h3>
                            <p>{{ $member['position'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team Section End -->

</body>

</html> --}}
