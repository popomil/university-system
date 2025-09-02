@extends('layouts.app')

@section('title', 'Add Course')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Add New Course</h4>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary btn-sm">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST" class="row g-3">
                @csrf

                <!-- Course Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label fw-bold">Course Name</label>
                    <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="Enter course name" required>
                </div>

                <!-- Course Code -->
                <div class="col-md-6">
                    <label for="code" class="form-label fw-bold">Course Code</label>
                    <input type="text" name="code" class="form-control rounded-3" id="code" placeholder="e.g. CS101" required>
                </div>

                <!-- Hours -->
                <div class="col-md-6">
                    <label for="hours" class="form-label fw-bold">Hours</label>
                    <input type="number" name="hours" class="form-control rounded-3" id="hours" placeholder="Enter hours" required>
                </div>

                <!-- Cost -->
                <div class="col-md-6">
                    <label for="cost" class="form-label fw-bold">Cost</label>
                    <input type="number" name="cost" class="form-control rounded-3" id="cost" placeholder="Enter cost">
                </div>

                <!-- Actions -->
                <div class="col-12 d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-success px-4">Save</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
