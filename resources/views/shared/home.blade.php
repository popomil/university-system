@extends('shared.home')

@section('title', 'Dashboard')

@section("content")
 <h5 class="mt-4 mb-2">University Dashboard</h5>
 <div class="row">
   <!-- Students -->
   <div class="col-md-3 col-sm-6 col-12">
     <div class="info-box bg-gradient-info">
       <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>
       <div class="info-box-content">
         <span class="info-box-text">Students</span>
         <span class="info-box-number">12,340</span>
         <div class="progress">
           <div class="progress-bar" style="width: 80%"></div>
         </div>
         <span class="progress-description">
           +5% this semester
         </span>
       </div>
     </div>
   </div>

   <!-- Professors -->
   <div class="col-md-3 col-sm-6 col-12">
     <div class="info-box bg-gradient-success">
       <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
       <div class="info-box-content">
         <span class="info-box-text">Professors</span>
         <span class="info-box-number">420</span>
         <div class="progress">
           <div class="progress-bar" style="width: 65%"></div>
         </div>
         <span class="progress-description">
           Stable this year
         </span>
       </div>
     </div>
   </div>

   <!-- Courses -->
   <div class="col-md-3 col-sm-6 col-12">
     <div class="info-box bg-gradient-warning">
       <span class="info-box-icon"><i class="fas fa-book"></i></span>
       <div class="info-box-content">
         <span class="info-box-text">Courses</span>
         <span class="info-box-number">320</span>
         <div class="progress">
           <div class="progress-bar" style="width: 50%"></div>
         </div>
         <span class="progress-description">
           +12 new this year
         </span>
       </div>
     </div>
   </div>

   <!-- Departments -->
   <div class="col-md-3 col-sm-6 col-12">
     <div class="info-box bg-gradient-danger">
       <span class="info-box-icon"><i class="fas fa-building"></i></span>
       <div class="info-box-content">
         <span class="info-box-text">Departments</span>
         <span class="info-box-number">15</span>
         <div class="progress">
           <div class="progress-bar" style="width: 40%"></div>
         </div>
         <span class="progress-description">
           New faculty added
         </span>
       </div>
     </div>
   </div>
 </div>
@endsection
