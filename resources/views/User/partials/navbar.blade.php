<div class="container-fluid bg-light sticky-top p-0">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a href="{{ route('home') }}" class="navbar-brand bg-primary py-4 px-5 me-0">
            <h1 class="mb-0"><i class="bi bi-scissors"></i>Salone</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Service</a>
                <a href="{{ route('price') }}" class="nav-item nav-link {{ request()->is('price') ? 'active' : '' }}">Price</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light mt-2">
                        <a href="{{ route('gallery') }}" class="dropdown-item">Photo Gallery</a>
                        <a href="{{ route('blog') }}" class="dropdown-item">Beauty Blog</a>
                        <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-flex">
                <a class="btn btn-primary btn-sm-square me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-sm-square me-3" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-primary btn-sm-square" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </nav>
</div>
