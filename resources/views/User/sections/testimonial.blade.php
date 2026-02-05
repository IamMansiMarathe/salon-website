<div class="container-fluid py-5 px-0">
    <div class="container">
        <!-- TITLE -->
        <div class="text-center wow fadeIn" data-wow-delay="0.2s">
            <h1 class="font-dancing-script text-primary">Testimonial</h1>
            <h1 class="mb-5">What Clients Say!</h1>
        </div>
    </div>


<div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
@foreach($testimonials as $testimonial)
    <div class="text-center bg-light p-4">
        <i class="fa fa-quote-left fa-3x mb-3"></i>
        <p>{{ $testimonial->message }}</p>

        @if($testimonial->image)
        <img class="img-fluid mx-auto border p-1 mb-3"
             src="{{ asset('storage/'.$testimonial->image) }}">
        @endif

        <h4 class="mb-1">{{ $testimonial->name }}</h4>
        <span>{{ $testimonial->profession }}</span>
    </div>
@endforeach
</div>
