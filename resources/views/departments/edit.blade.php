@extends('layouts.app')

@section('title', 'Edit Department')

@section('content')
<div class=" mt-4">
    <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white text-center">
            <h4>Edit Department</h4>
        </div>
        <div class="card-body p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('departments.update', $department->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Department Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Department Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg"
                           value="{{ old('name', $department->name) }}" required>
                    <small class="text-muted">Enter the name of the department, e.g., "Computer Science".</small>
                </div>

                <!-- Department Code -->
                <div class="mb-3">
                    <label for="code" class="form-label fw-bold">Department Code</label>
                    <input type="text" name="code" id="code" class="form-control form-control-lg"
                           value="{{ old('code', $department->code) }}" required>
                    <small class="text-muted">Unique code for the department, e.g., "CS01".</small>
                </div>

                <!-- Department Description -->
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Department Description</label>
                    <textarea name="description" id="description" class="form-control form-control-lg"
                              rows="4">{{ old('description', $department->description) }}</textarea>
                    <small class="text-muted">Optional: A brief description of the department.</small>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('departments.index') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-success btn-lg px-5">
                        <i class="fas fa-save"></i> Update Department
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
