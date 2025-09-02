@extends('layouts.app')

@section('title', 'Add Course')

@section('content')
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="fas fa-book"></i> Add New Course</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('courses.store') }}" method="POST">
                        @csrf

                        {{-- Course Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold"><i class="fas fa-file-alt"></i> Course Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Enter course name" required>
                        </div>

                        {{-- Course Code --}}
                        <div class="mb-3">
                            <label for="code" class="form-label fw-bold"><i class="fas fa-barcode"></i> Course Code</label>
                            <input type="text" name="code" id="code" class="form-control form-control-lg" placeholder="e.g., CS01" required>
                        </div>

                        {{-- Cost --}}
                        <div class="mb-3">
                            <label for="cost" class="form-label fw-bold"><i class="fas fa-dollar-sign"></i> Cost</label>
                            <input type="number" name="cost" id="cost" class="form-control form-control-lg" placeholder="Enter course cost" required>
                        </div>

                        {{-- Hours --}}
                        <div class="mb-3">
                            <label for="hours" class="form-label fw-bold"><i class="fas fa-clock"></i> Hours</label>
                            <input type="number" name="hours" id="hours" class="form-control form-control-lg" placeholder="Enter course hours" required>
                        </div>

                        {{-- Department --}}
                       <select name="department_id" id="department_id" class="form-control" required>
                            <option value="">Select Department</option>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('department_id')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror



                        {{-- Buttons --}}
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                <i class="fas fa-save"></i> Save Course
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
