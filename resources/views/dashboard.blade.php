@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid mt-2">
  <div class="row g-3">
    <!-- Info Boxes -->
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="info-box bg-gradient-info shadow-sm">
        <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Doctors</span>
          <span class="info-box-number">{{$doctorsCount}}</span>
          <div class="progress">
            <div class="progress-bar" style="width: 80%"></div>
          </div>
          <span class="progress-description">+5% this semester</span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="info-box bg-gradient-success shadow-sm">
        <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Students</span>
          <span class="info-box-number">{{$studentsCount}}</span>
          <div class="progress">
            <div class="progress-bar" style="width: 65%"></div>
          </div>
          <span class="progress-description">Stable this year</span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="info-box bg-gradient-warning shadow-sm">
        <span class="info-box-icon"><i class="fas fa-book"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Courses</span>
          <span class="info-box-number">{{$coursesCount}}</span>
          <div class="progress">
            <div class="progress-bar" style="width: 50%"></div>
          </div>
          <span class="progress-description">+12 new this year</span>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="info-box bg-gradient-danger shadow-sm">
        <span class="info-box-icon"><i class="fas fa-building"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Departments</span>
          <span class="info-box-number">{{$departmentsCount}}</span>
          <div class="progress">
            <div class="progress-bar" style="width: 40%"></div>
          </div>
          <span class="progress-description">New faculty added</span>
        </div>
      </div>
    </div>

  </div> <!-- /.row -->

  <!-- Welcome & Introduction Card -->
  <div class="card shadow-sm border-0 mt-3">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">🎓 Welcome to  Dashboard</h3>
    </div>
    <div class="card-body py-3">
      <p class="fs-6 text-dark mb-1">
        Arap Open University is a leading institution committed to academic excellence, innovation, and student success.
      </p>
      <p class="fs-6 mb-0">
        Use this portal to access academic resources, monitor your progress, and stay connected with university updates.
      </p>
    </div>
  </div>

  <!-- Quick Access Buttons -->
  <div class="card mt-4 shadow-sm">
    <div class="card-header bg-secondary text-white">
      <h5 class="card-title mb-0">⚡ Quick Access</h5>
    </div>
    <div class="card-body py-3">
      <div class="row text-center g-2">
        <div class="col-6 col-sm-3">
          <a href="/profile" class="btn btn-outline-primary w-100">
            <i class="fas fa-user-circle me-1"></i> My Profile
          </a>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/courses" class="btn btn-outline-success w-100">
            <i class="fas fa-book me-1"></i> Courses
          </a>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/grades" class="btn btn-outline-warning w-100">
            <i class="fas fa-chart-line me-1"></i> Grades
          </a>
        </div>
        <div class="col-6 col-sm-3">
          <a href="/support" class="btn btn-outline-danger w-100">
            <i class="fas fa-life-ring me-1"></i> Support
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Announcements -->
  <div class="card mt-4 shadow-sm">
    <div class="card-header bg-info text-white">
      <h5 class="card-title mb-0">🔔 Latest Announcements</h5>
    </div>
    <div class="card-body py-3">
      <ul class="list-unstyled mb-0">
        <li><i class="fas fa-bullhorn text-info me-2"></i> Fall Semester registration starts Sept 10.</li>
        <li><i class="fas fa-bullhorn text-info me-2"></i> Graduation applications are open until Oct 5.</li>
        <li><i class="fas fa-bullhorn text-info me-2"></i> New library resources added.</li>
      </ul>
      <a href="/announcements" class="btn btn-link mt-2 p-0">View All Announcements →</a>
    </div>
  </div>

  <!-- Stats Section (Summary Info Boxes) -->
  <div class="row mt-4 g-3">
    <div class="col-md-4 col-sm-6">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-primary"><i class="fas fa-user-graduate"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Enrolled Students</span>
          <span class="info-box-number">12,450</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="fas fa-book-open"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Active Courses</span>
          <span class="info-box-number">340</span>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-warning"><i class="fas fa-chalkboard-teacher"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Faculty Members</span>
          <span class="info-box-number">220</span>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
