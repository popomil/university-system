@extends('shared_navbar.master')

@section('title', 'Home')

@section('content')
<section class="hero-section text-center text-white d-flex align-items-center" 
         style="background: url('/images/images (9).jpeg') center/cover no-repeat; 
                height: 70vh; position: relative">
    <div style="background: rgba(0,0,0,0.5); position:absolute; inset:0;"></div>
    <div class="container position-relative">
        <h1 class="fw-bold display-4 mb-3">Welcome to System University 🎓</h1>
        <p class="lead mb-4">Empowering students with modern learning and digital solutions.</p>
        <a href="{{ url('/courses') }}" class="btn btn-primary btn-lg px-4 rounded-pill shadow">
            <i class="fas fa-book-open me-2"></i> Explore Courses
        </a>
    </div>
</section>
<!-- About Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Why Choose System University?</h2>
        <p class="lead text-muted mb-5">
            We provide innovative learning experiences with expert instructors, modern courses, 
            and a supportive community to help you achieve your academic goals.
        </p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 p-4">
                    <i class="fas fa-chalkboard-teacher fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Expert Instructors</h5>
                    <p class="text-muted">Learn from highly qualified professors and industry experts.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 p-4">
                    <i class="fas fa-laptop-code fa-3x text-success mb-3"></i>
                    <h5 class="fw-bold">Modern Learning</h5>
                    <p class="text-muted">Access cutting-edge digital platforms and learning tools.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100 p-4">
                    <i class="fas fa-users fa-3x text-warning mb-3"></i>
                    <h5 class="fw-bold">Student Community</h5>
                    <p class="text-muted">Join a diverse and vibrant community of learners.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection