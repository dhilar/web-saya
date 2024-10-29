{{-- @include('layouts.navbar')
@include('layouts.topbar')

<div class="container-xxl advantage py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Keunggulan Kami</h4>
            <h1 class="display-5 mb-4">Mengapa Memilih Kami</h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    @foreach($advantages as $key => $advantage)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 @if($key == 0) active @endif" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $key }}" type="button">
                            <h3 class="m-0">{{ $key + 1 }}. {{ $advantage->title }}</h3>
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    @foreach($advantages as $key => $advantage)
                        <div class="tab-pane fade @if($key == 0) show active @endif" id="tab-pane-{{ $key }}">
                            <div class="row g-4">
                                <!-- Images Column -->
                                <div class="col-md-6">
                                    <div class="row">
                                        @if($advantage->image_1)
                                            <div class="col-md-6 mb-3">
                                                <img class="img-fluid" src="{{ asset($advantage->image_1) }}" alt="{{ $advantage->title }} - Image 1" style="object-fit: cover;">
                                            </div>
                                        @endif
                                        @if($advantage->image_2)
                                            <div class="col-md-6 mb-3">
                                                <img class="img-fluid" src="{{ asset($advantage->image_2) }}" alt="{{ $advantage->title }} - Image 2" style="object-fit: cover;">
                                            </div>
                                        @endif
                                        @if($advantage->image_3)
                                            <div class="col-md-6 mb-3">
                                                <img class="img-fluid" src="{{ asset($advantage->image_3) }}" alt="{{ $advantage->title }} - Image 3" style="object-fit: cover;">
                                            </div>
                                        @endif
                                        @if($advantage->image_4)
                                            <div class="col-md-6 mb-3">
                                                <img class="img-fluid" src="{{ asset($advantage->image_4) }}" alt="{{ $advantage->title }} - Image 4" style="object-fit: cover;">
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Text and Features Column -->
                                <div class="col-md-6">
                                    <h1 class="mb-3">{{ $advantage->title }}</h1>
                                    <p class="mb-4">{{ $advantage->description }}</p>

                                    <!-- Feature List -->
                                    @if($advantage->feature_1)
                                        <p><i class="fa fa-check text-primary me-3"></i>{{ $advantage->feature_1 }}</p>
                                    @endif
                                    @if($advantage->feature_2)
                                        <p><i class="fa fa-check text-primary me-3"></i>{{ $advantage->feature_2 }}</p>
                                    @endif
                                    @if($advantage->feature_3)
                                        <p><i class="fa fa-check text-primary me-3"></i>{{ $advantage->feature_3 }}</p>
                                    @endif
                                    @if($advantage->feature_4)
                                        <p><i class="fa fa-check text-primary me-3"></i>{{ $advantage->feature_4 }}</p>
                                    @endif

                                    <a href="#" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.script')
@include('layouts.footer') --}}
