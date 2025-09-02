@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class=" py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Edit Course</h4>
            <a href="{{ route('courses.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('courses.update', $course->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <!-- Course Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label fw-bold">Course Name</label>
                    <input type="text" name="name" class="form-control rounded-3" id="name" 
                           value="{{ old('name', $course->name) }}" placeholder="Enter course name" required>
                </div>

                <!-- Course Code -->
                <div class="col-md-6">
                    <label for="code" class="form-label fw-bold">Course Code</label>
                    <input type="text" name="code" class="form-control rounded-3" id="code" 
                           value="{{ old('code', $course->code) }}" placeholder="e.g. CS101" required>
                </div>

                <!-- Hours -->
                <div class="col-md-6">
                    <label for="hours" class="form-label fw-bold">Hours</label>
                    <input type="number" name="hours" class="form-control rounded-3" id="hours" 
                           value="{{ old('hours', $course->hours) }}" placeholder="Enter hours" required>
                </div>

                <!-- Cost -->
                <div class="col-md-6">
                    <label for="cost" class="form-label fw-bold">Cost</label>
                    <input type="number" name="cost" class="form-control rounded-3" id="cost" 
                           value="{{ old('cost', $course->cost) }}" placeholder="Enter cost">
                </div>

                <!-- Department -->
                <div class="col-md-12">
                    <label for="department_id" class="form-label fw-bold">Department</label>
                    <select name="department_id" id="department_id" class="form-control rounded-3" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}" 
                                {{ old('department_id', $course->department_id) == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Actions -->
                <div class="col-12 d-flex justify-content-between gap-2 mt-3">
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-success px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
