@extends('shared_navbar.master')

@section('title', 'About Us')

@section('content')
<section class="py-5">
<!-- Hero Section -->
<section class="hero-section text-center text-white d-flex align-items-center" 
         style="background: linear-gradient(135deg, #0d6efd, #6610f2); height: 40vh;">
    <div class="container">
        <h1 class="fw-bold display-5 mb-3">About System University 🎓</h1>
        <p class="lead">Discover our mission, vision, and values that empower students worldwide.</p>
    </div>
</section>

<!-- About Content -->
<section class="py-5">
    <div>
        <div class="row align-items-center">
            
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://img.freepik.com/free-vector/online-education-isometric-concept_1284-17968.jpg" 
                     alt="About Us" class="img-fluid rounded shadow">
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Who We Are?</h2>
                <p class="text-muted">
                    System University is a leading educational platform that combines 
                    academic excellence with digital innovation. 
                    We provide high-quality education programs, modern learning tools, 
                    and a supportive community that helps students achieve their full potential.
                </p>
                <ul class="list-unstyled mt-3">
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Accredited programs & certified courses</li>
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Experienced professors & instructors</li>
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Global community of learners</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-5 bg-light">
    <div class="text-center">
        <h2 class="fw-bold mb-4">Our Mission & Vision</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100 p-4">
                    <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Our Mission</h5>
                    <p class="text-muted">To empower students with knowledge, skills, and opportunities that transform their future.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100 p-4">
                    <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                    <h5 class="fw-bold">Our Vision</h5>
                    <p class="text-muted">To become a global leader in digital learning and academic innovation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<body class="py-5">
    <div class="text-center">
        <h2 class="fw-bold mb-4">Meet Our Team</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-4">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         class="rounded-circle mb-3 mx-auto" width="120" height="120">
                    <h5 class="fw-bold mb-0">Dr. Ahmed Ali</h5>
                    <p class="text-muted">Dean</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-4">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                         class="rounded-circle mb-3 mx-auto" width="120" height="120">
                    <h5 class="fw-bold mb-0">Dr. Sara Hassan</h5>
                    <p class="text-muted">Head of IT Department</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-4">
                    <img src="https://randomuser.me/api/portraits/men/76.jpg" 
                         class="rounded-circle mb-3 mx-auto" width="120" height="120">
                    <h5 class="fw-bold mb-0">Dr. Mohamed Youssef</h5>
                    <p class="text-muted">Professor of Business</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection