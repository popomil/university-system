@extends('layouts.app')

@section('title', 'Add Doctor')

@section('content')
<form method="POST" action="{{ route('doctors.store') }}" 
      class="mt-4 p-4 shadow rounded bg-light">
   @csrf
  <h4 class="mb-4 text-center  bg-primary text-white p-3">
      <i class="fas fa-user-md"></i> Doctors Form
  </h4>

  <!-- Name -->
  <div class="mb-3">
      <label for="name" class="form-label fw-bold">Name</label>
      <div class="input-group">
          <span class="input-group-text">
              <i class="fas fa-user"></i>
          </span>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter doctor's name" required>
      </div>
  </div>

  <!-- Age -->
  <div class="mb-3">
      <label for="age" class="form-label fw-bold">Age</label>
      <div class="input-group">
          <span class="input-group-text">
              <i class="fas fa-calendar"></i>
          </span>
          <input type="number" id="age" name="age" class="form-control" placeholder="Enter age" required>
      </div>
  </div>

  <!-- Address -->
  <div class="mb-3">
      <label for="address" class="form-label fw-bold">Address</label>
      <div class="input-group">
          <span class="input-group-text">
              <i class="fas fa-map-marker-alt"></i>
          </span>
          <input type="text" id="address" name="address" class="form-control" placeholder="Enter address" required>
      </div>
  </div>

  <!-- Gender -->
  <div class="mb-3">
      <label for="gender" class="form-label fw-bold">Gender</label>
      <div class="input-group">
          <span class="input-group-text">
              <i class="fas fa-venus-mars"></i>
          </span>
          <select id="gender" name="gender" class="form-select flex-grow-1 p-2" required>
              <option value="">Select gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
          </select>
      </div>
  </div>

  <!-- Salary -->
  <div class="mb-3">
      <label for="salary" class="form-label fw-bold">Salary</label>
      <div class="input-group">
          <span class="input-group-text">
              <i class="fas fa-dollar-sign"></i>
          </span>
          <input type="number" id="salary" name="salary" class="form-control" placeholder="Enter salary" required>
      </div>
  </div>

  <!-- Actions -->
  <div class="d-flex justify-content-between mt-4">
      <button type="reset" class="btn btn-outline-secondary">
          <i class="fas fa-undo"></i> Reset
      </button>
      <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Submit
      </button>
  </div>
</form>
@endsection
