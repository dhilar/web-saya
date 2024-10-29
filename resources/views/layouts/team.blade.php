<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Team Members</h4>
            <h1 class="display-5 mb-4">Kami Adalah Tim Arsitektur Kreatif Untuk Rumah Impian Anda</h1>
        </div>
        <div class="row g-0 team-items">
            @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset($team->image) }}" alt="{{ $team->nama }}">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="{{ $team->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="{{ $team->twitter_link }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="{{ $team->instagram_link }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">{{ $team->nama }}</h3>
                            <span class="text-primary">{{ $team->jabatan }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>