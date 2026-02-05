<!-- Team Start -->
<div class="container-fluid overflow-hidden py-5">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.2s">
            <h1 class="font-dancing-script text-primary">
                {{ $teamSection->title ?? 'Team Members' }}
            </h1>
            <h1 class="mb-5">
                {{ $teamSection->subtitle ?? 'Our Experienced Specialists' }}
            </h1>
        </div>

        <div class="row g-4 team">
            @foreach($teams as $index => $team)
                <div class="col-md-6 col-lg-3 wow fadeIn"
                     data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">

                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100"
                             src="{{ asset('storage/'.$team->image) }}"
                             alt="{{ $team->name }}">

                        <div class="team-overlay">
                            <p class="text-primary mb-1">
                                {{ $team->designation }}
                            </p>

                            <h4>{{ $team->name }}</h4>
                            <div class="d-flex justify-content-center">
    @if(!empty($team->facebook))
        <a class="btn btn-dark btn-sm-square border-2 me-3" href="{{ $team->facebook }}" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
    @endif

    @if(!empty($team->instagram))
        <a class="btn btn-dark btn-sm-square border-2 me-3" href="{{ $team->instagram }}" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    @endif

    @if(!empty($team->twitter))
        <a class="btn btn-dark btn-sm-square border-2" href="{{ $team->twitter }}" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
    @endif
</div>

                            
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
