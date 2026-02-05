@if($about)
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                @if($about->image)
                    <img class="img-fluid mb-3" src="{{ asset('storage/'.$about->image) }}" alt="">
                @endif
                <div class="d-flex align-items-center bg-light">
                    <div class="btn-square flex-shrink-0 bg-primary" style="width: 100px; height: 100px;">
                        <i class="fa fa-phone fa-2x text-dark"></i>
                    </div>
                    <div class="px-3">
                        <h3>{{ $about->phone }}</h3>
                        <span>Call us direct 24/7 for get a free consultation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="font-dancing-script text-primary">{{ $about->small_title }}</h1>
                <h1 class="mb-5">{{ $about->subtitle }}</h1>
                <p class="mb-4">{{ $about->description }}</p>
                <div class="row g-3 mb-5">
                    <div class="col-sm-6">
                        <div class="bg-light text-center p-4">
                            <i class="fas fa-calendar-alt fa-4x text-primary"></i>
                            <h1 class="display-5">{{ $about->years_experience }}</h1>
                            <p class="text-dark text-uppercase mb-0">Years experience</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-light text-center p-4">
                            <i class="fas fa-users fa-4x text-primary"></i>
                            <h1 class="display-5">{{ $about->happy_customers }}</h1>
                            <p class="text-dark text-uppercase mb-0">Happy Customers</p>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary text-uppercase px-5 py-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
@endif
