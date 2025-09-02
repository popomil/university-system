@extends('shared_navbar.master')

@section('title', 'Courses')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center" 
         style="background: linear-gradient(135deg, #20c997, #0d6efd); height: 40vh;">
    <div class="container">
        <h1 class="fw-bold display-5 mb-3">Our Courses 📘</h1>
        <p class="lead">Browse our professional courses and start learning today.</p>
    </div>
</section>

<!-- Courses List -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Course 1 -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/web.jpeg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Web Development">
                    <div class="card-body">
                        <h5 class="fw-bold">Introduction to Web Development</h5>
                        <p class="text-muted">Learn HTML, CSS, JS and Bootstrap to build responsive websites.</p>
                        <ul class="list-unstyled mb-3">
                            <li><i class="fas fa-clock text-primary me-2"></i> 12 Weeks</li>
                            <li><i class="fas fa-user-graduate text-success me-2"></i> Beginner</li>
                        </ul>
                        <a href="{{ url('/courses/web-development') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Course 2 -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/larvel (2).jpeg') }}" class="card-img-top rounded-md" style="height: 200px; object-fit: cover;" alt="Laravel Development">
                    <div class="card-body">
                        <h5 class="fw-bold">Laravel for Beginners</h5>
                        <p class="text-muted">Master backend development with Laravel 10 and MySQL.</p>
                        <ul class="list-unstyled mb-3">
                            <li><i class="fas fa-clock text-primary me-2"></i> 10 Weeks</li>
                            <li><i class="fas fa-user-graduate text-success me-2"></i> Intermediate</li>
                        </ul>
                        <a href="{{ url('/courses/laravel') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Course 3 -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/react.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="React Development">
                    <div class="card-body">
                        <h5 class="fw-bold">React Frontend Development</h5>
                        <p class="text-muted">Build interactive SPAs using React, Hooks, and API integration.</p>
                        <ul class="list-unstyled mb-3">
                            <li><i class="fas fa-clock text-primary me-2"></i> 8 Weeks</li>
                            <li><i class="fas fa-user-graduate text-success me-2"></i> Intermediate</li>
                        </ul>
                        <a href="{{ url('/courses/react') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Course 4 -->
            <div class="col-lg-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="{{ asset('images/python.jpeg') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Python">
                    <div class="card-body">
                        <h5 class="fw-bold">Python Programming</h5>
                        <p class="text-muted">Learn Python fundamentals and backend automation skills.</p>
                        <ul class="list-unstyled mb-3">
                            <li><i class="fas fa-clock text-primary me-2"></i> 14 Weeks</li>
                            <li><i class="fas fa-user-graduate text-success me-2"></i> Beginner</li>
                        </ul>
                        <a href="{{ url('/courses/python') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- What You Will Learn -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold mb-4 text-center">What You Will Learn 📖</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="fas fa-code fa-2x text-primary mb-3"></i>
                        <h5 class="fw-bold">HTML & CSS Basics</h5>
                        <p class="text-muted">Learn how to build structured and styled web pages from scratch.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="fas fa-laptop-code fa-2x text-success mb-3"></i>
                        <h5 class="fw-bold">JavaScript Fundamentals</h5>
                        <p class="text-muted">Understand the basics of interactivity and dynamic web content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <i class="fas fa-layer-group fa-2x text-danger mb-3"></i>
                        <h5 class="fw-bold">Responsive Design</h5>
                        <p class="text-muted">Build mobile-friendly and responsive websites using Bootstrap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instructor Section -->
<section class="py-5">
    <div class="container text-center">
        <h3 class="fw-bold mb-4">Meet Your Instructor 👨‍🏫</h3>
        <div class="card shadow-sm border-0 mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <img src="https://source.unsplash.com/150x150/?teacher,person" 
                     class="rounded-circle mb-3" alt="Instructor">
                <h5 class="fw-bold">Dr. Islam Ramdan</h5>
                <p class="text-muted">Senior Web Developer & Lecturer</p>
                <p>With 10+ years of experience in web development, Dr. Islam has taught hundreds 
                   of students who are now working in top tech companies worldwide.</p>
            </div>
        </div>
    </div>
</section>
@endsection
