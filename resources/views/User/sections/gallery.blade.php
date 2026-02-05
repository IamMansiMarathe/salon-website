@if($galleries->count())
<div class="container-fluid gallery py-5">
    <div class="container">

        <!-- TITLE (NO CHANGE) -->
        <div class="text-center wow fadeIn" data-wow-delay="0.2s">
            <h1 class="font-dancing-script text-primary">Gallery</h1>
            <h1 class="mb-5">Explore Our Gallery</h1>
        </div>

        <!-- IMAGES -->
        <div class="row g-0">

            @foreach($galleries as $index => $gallery)

                @php
                    $colClass = match($index) {
                        0, 5 => 'col-md-6',
                        default => 'col-md-3'
                    };
                @endphp

                <div class="{{ $colClass }} wow fadeIn" data-wow-delay="0.{{ $index+2 }}s">
                    <div class="gallery-item h-100">
                        <img src="{{ asset('storage/'.$gallery->image) }}"
                             class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="{{ asset('storage/'.$gallery->image) }}"
                               class="btn btn-primary btn-lg-square"
                               data-lightbox="gallery">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
@endif
