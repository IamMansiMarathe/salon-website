<div class="container-fluid price px-0 py-5">
    <div class="row g-0">
        <!-- Promo Column -->
        <div class="col-md-6">
            <div class="d-flex align-items-center h-100 bg-primary p-5">
                <div class="wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="font-dancing-script text-white">Pricing</h1>
                        <h1 class="mb-0">Beauty Salon</h1>
                    @foreach($promos as $promo)
                        <div class="row g-4 align-items-center mb-4">
                            <div class="col-lg-6">
                                <div class="text-center bg-dark p-5">
                                    <h4 class="text-white">{{ $promo->small_heading }}</h4>
                                    <h1 class="display-1 font-work-sans text-white">{{ $promo->big_number }}%</h1>
                                    <p class="fs-2 text-white mb-0">{{ $promo->unit }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p>{{ $promo->description }}</p>
                                <a class="btn btn-dark" href="#">{{ $promo->button_text }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Price Column -->
        <div class="col-md-6">
            <div class="h-100 bg-dark p-5">
                @foreach($prices as $price)
                    <div class="price-item mb-3 wow fadeIn" data-wow-delay="0.1s">
                        @if($price->image)
                            <img class="img-fluid flex-shrink-0" src="{{ asset('storage/'.$price->image) }}" alt="">
                        @endif
                        <div class="text-end px-4">
                            <h6 class="text-uppercase text-primary">{{ $price->title }}</h6>
                            <h3 class="text-white font-work-sans mb-0">${{ $price->price }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
