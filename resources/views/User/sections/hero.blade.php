@if($hero)
    <div class="container-fluid p-0 hero-header bg-light mb-5">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 hero-header-text py-5">
                    <div class="py-5 px-3 ps-lg-0">
                        <h1 class="font-dancing-script text-primary animated slideInLeft">{{ $hero->small_title }}</h1>
                        <h1 class="display-1 mb-4 animated slideInLeft">{{ $hero->main_title }}</h1>
                        <div class="row g-4 animated slideInLeft">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-phone text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Call Us</h5>
                                        <p class="fs-5 text-dark mb-0">{{ $hero->phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square btn btn-primary flex-shrink-0">
                                        <i class="fa fa-envelope text-dark"></i>
                                    </div>
                                    <div class="px-3">
                                        <h5 class="text-primary mb-0">Mail Us</h5>
                                        <p class="fs-5 text-dark mb-0">{{ $hero->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        @if($hero->image_1)<img class="img-fluid" src="{{ asset('storage/' . $hero->image_1) }}" alt="">@endif
                        @if($hero->image_2)<img class="img-fluid" src="{{ asset('storage/' . $hero->image_2) }}" alt="">@endif
                        @if($hero->image_3)<img class="img-fluid" src="{{ asset('storage/' . $hero->image_3) }}" alt="">@endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-warning text-center">Hero section content not available.</div>
@endif
