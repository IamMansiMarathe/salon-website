<div id="contact" class="container-fluid contact py-5">
    <div class="container text-center">

        <h2>
            {{ $section->content['title'] ?? 'Contact Us' }}
        </h2>

        <h4 class="text-primary mb-3">
            {{ $section->content['subtitle'] ?? 'Get in Touch' }}
        </h4>

        <p class="mb-4">
            {{ $section->content['description'] ?? 'Reach out to us for appointments and queries.' }}
        </p>

        {{-- Contact Form --}}
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

                    <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>

                    <input type="text" name="subject" class="form-control mb-3" placeholder="Subject">

                    <textarea name="message" class="form-control mb-3" rows="4" placeholder="Message" required></textarea>

                    <button class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>

    </div>
</div>
