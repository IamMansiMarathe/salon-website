<div class="container-fluid service py-5">
    <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="font-dancing-script text-primary">Our Services</h1>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>

        <div class="row g-4 g-md-0 text-center">
            @foreach($services as $index => $service)
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4
                        {{ $index < 3 ? 'border-bottom' : '' }}
                        {{ in_array($index, [0,3]) ? 'border-end' : '' }}
                        {{ $index == 1 ? 'border-lg-end' : '' }}
                        {{ $index == 2 ? 'border-end border-lg-end-0' : '' }}
                        {{ $index == 3 ? 'border-lg-bottom-0 border-lg-end' : '' }}
                        {{ $index == 4 ? 'border-end' : '' }}
                        wow fadeIn"
                        data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">

                        <img class="img-fluid"
                             src="{{ $service->icon ? asset('storage/'.$service->icon) : asset('img/default-service.png') }}"
                             alt="{{ $service->title }}">

                        <h3 class="mb-3">{{ $service->title }}</h3>

                        <p class="mb-3">
                            {{ $service->description }}
                        </p>

                        <a class="btn btn-sm btn-primary text-uppercase" href="#">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
