<!-- Blog Start -->
<div class="container-fluid blog p-0 mt-5">
    <div class="row g-0">
        @if(isset($blogs[0]))
        <!-- First Blog Text -->
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                <p class="mb-2">
                    <i class="fa fa-calendar-alt text-dark me-1"></i>{{ \Carbon\Carbon::parse($blogs[0]->created_at)->format('M d, Y') }} | 
                    <i class="fa fa-folder-open text-dark me-1"></i>{{ $blogs[0]->category ?? 'Hair Salon' }}
                </p>
                <h3 class="mb-3">{{ $blogs[0]->title }}</h3>
                <p>{{ $blogs[0]->description }}</p>
                <a class="btn btn-dark align-self-start text-uppercase" href="{{ route('admin.blogs.index', $blogs[0]->id) }}">
                    Read More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- First Blog Image -->
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="h-100">
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/'.$blogs[0]->image) }}" alt="" style="object-fit: cover;">
            </div>
        </div>
        @endif

        @if(isset($blogs[1]))
        <!-- Second Blog Text -->
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 d-flex flex-column justify-content-center bg-primary py-5 px-4">
                <p class="mb-2">
                    <i class="fa fa-calendar-alt text-dark me-1"></i>{{ \Carbon\Carbon::parse($blogs[1]->created_at)->format('M d, Y') }} | 
                    <i class="fa fa-folder-open text-dark me-1"></i>{{ $blogs[1]->category ?? 'Hair Salon' }}
                </p>
                <h3 class="mb-3">{{ $blogs[1]->title }}</h3>
                <p>{{ $blogs[1]->description }}</p>
                <a class="btn btn-dark align-self-start text-uppercase" href="{{ route('admin.blogs.index', $blogs[1]->id) }}">
                    Read More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Second Blog Image -->
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="h-100">
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/'.$blogs[1]->image) }}" alt="" style="object-fit: cover;">
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Blog End -->
