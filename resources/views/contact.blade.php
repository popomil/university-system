@extends('shared_navbar.master')

@section('title', 'Contact Us')

@section('content')

<!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center" 
         style="background: linear-gradient(135deg, #0d6efd, #6610f2); height: 40vh;">
    <div class="container">
        <h1 class="fw-bold display-5 mb-3">Get in Touch 📩</h1>
        <p class="lead">We’d love to hear from you! Reach out to us anytime.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Contact Info -->
            <div class="col-lg-5">
                <h2 class="fw-bold mb-4">Contact Information</h2>
                <p class="text-muted mb-4">Feel free to contact us via phone, email, or visit our campus.</p>

                <div class="d-flex align-items-start mb-3">
                    <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Address</h6>
                        <p class="text-muted">123 University Street, Cairo, Egypt</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <i class="fas fa-phone fa-2x text-success me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Phone</h6>
                        <p class="text-muted">+20 109 792 7518</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <i class="fas fa-envelope fa-2x text-danger me-3"></i>
                    <div>
                        <h6 class="fw-bold mb-0">Email</h6>
                        <p class="text-muted">abanwbamyl0@gmail.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4">Send us a Message</h3>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="5" class="form-control" placeholder="Write your message..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="pb-5">
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-body p-0">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.092295069823!2d31.2357!3d30.0444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c0f4e9e7f7%3A0x9dcbcb7dc4aefc3a!2sCairo%20University!5e0!3m2!1sen!2seg!4v1670000000000!5m2!1sen!2seg" 
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection
