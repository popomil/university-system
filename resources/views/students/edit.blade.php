@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-tie me-2"></i> Edit Employee</h3>
    </div>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">

            {{-- Name --}}
            <div class="form-group mb-3">
                <label for="name">Employee Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" value="{{ $employee->name }}" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
            </div>

            {{-- Age --}}
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                    <input type="number" value="{{ $employee->age }}" class="form-control" id="age" name="age" placeholder="Enter age" required>
                </div>
            </div>

            {{-- Address --}}
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" value="{{ $employee->address }}" class="form-control" id="address" name="address" placeholder="Enter address" required>
                </div>
            </div>

            {{-- Gender --}}
            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>

            {{-- Employee Code --}}
            <div class="form-group mb-3">
                <label for="code">Employee Code</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    <input type="text" value="{{ $employee->code }}" class="form-control" id="code" name="code" placeholder="Enter employee code" required>
                </div>
            </div>

            {{-- Department --}}
            <div class="form-group mb-3">
                <label for="department_id">Department</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                    <select class="form-control" id="department_id" name="department_id">
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ $employee->department_id == $dept->id ? 'selected' : '' }}>{{ $dept->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Save Employee</button>
        </div>
    </form>
</div>
@endsection
