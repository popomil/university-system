@extends('layouts.app')

@section('title', 'Edit Doctor')

@section('content')
<div class="py-5">
    <div class="card shadow-lg rounded-3">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-user-md me-2"></i> Edit Doctor</h4>
            <a href="{{ route('doctors.index') }}" class="btn btn-outline-light btn-sm">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <!-- Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input type="text" id="name" name="name" class="form-control rounded-3"
                            value="{{ old('name', $doctor->name) }}" required>
                    </div>

                    <!-- Age -->
                    <div class="col-md-6">
                        <label for="age" class="form-label fw-bold">Age</label>
                        <input type="number" id="age" name="age" class="form-control rounded-3"
                            value="{{ old('age', $doctor->age) }}" required>
                    </div>

                  <!-- Gender -->
                    <div class="col-md-6">
                        <label for="gender" class="form-label fw-bold">Gender</label>
                        <select id="gender" name="gender" class="form-control rounded-3" required>
                            <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>


                    <!-- Address -->
                    <div class="col-md-6">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" id="address" name="address" class="form-control rounded-3"
                               value="{{ old('address', $doctor->address) }}" required>
                    </div>

                    <!-- Salary -->
                    <div class="col-md-12">
                        <label for="salary" class="form-label fw-bold">Salary</label>
                        <input type="number" id="salary" name="salary" class="form-control rounded-3"
                               value="{{ old('salary', $doctor->salary) }}" required>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-between gap-2">
                    <a href="{{ route('doctors.index') }}" class="btn btn-outline-secondary px-4">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-save me-1"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
