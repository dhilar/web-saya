{{-- @include('layouts.navbar') --}}
{{-- @include('layouts.topbar') --}}

<div class="container-xxl project py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Keunggulan Proyek Arsitektur Kami</h4>
            <h1 class="display-5 mb-4"></h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                    @foreach($projects as $key => $project)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 @if($key == 0) active @endif" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $key }}" type="button">
                            <h3 class="m-0">{{ $key + 1 }}. {{ $project->title }}</h3>
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    @foreach($projects as $key => $project)
                        <div class="tab-pane fade @if($key == 0) show active @endif" id="tab-pane-{{ $key }}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset($project->image) }}" style="object-fit: cover;" alt="{{ $project->title }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">{{ $project->title }}</h1>
                                    <p class="mb-4">{{ $project->description }}</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
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
{{-- @include('layouts.footer') --}}