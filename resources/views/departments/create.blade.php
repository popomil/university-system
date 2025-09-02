@extends('layouts.app') {{-- If you have a main layout --}}

@section('title', 'Add Department')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12"> {{-- Wide form --}}
            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Add New Department</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('departments.store') }}" method="POST">
                        @csrf
                        {{-- Department Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Department Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Enter department name" required>
                        </div>

                        {{-- Department Code --}}
                        <div class="mb-3">
                            <label for="code" class="form-label fw-bold">Department Code</label>
                            <input type="text" name="code" id="code" class="form-control form-control-lg" placeholder="e.g., CS01" required>
                        </div>

                        {{-- Department Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Department Description</label>
                            <textarea name="description" id="description" 
                                      class="form-control form-control-lg" 
                                      rows="4" placeholder="Enter a short description about the department..."></textarea>
                        </div>
                        {{-- Buttons --}}
                        <div class="d-flex justify-content-between mt-4">
                          <a href="{{ route('departments.index') }}" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-arrow-left"></i> Back
                        </a>
                            <button type="submit" class="btn btn-success btn-lg px-5">
                                <i class="fas fa-save"></i> Save Department
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
