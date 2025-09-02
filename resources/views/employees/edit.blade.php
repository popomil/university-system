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

   {{-- Role --}}
{{-- Role --}}
<div class="form-group mb-3">
    <label for="role">Role</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
            <select class="form-control" id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="doctor" {{ $employee->role == 'doctor' ? 'selected' : '' }}>Doctor</option>
                <option value="teacher" {{ $employee->role == 'teacher' ? 'selected' : '' }}>Teacher</option>
                <option value="admin_staff" {{ $employee->role == 'admin_staff' ? 'selected' : '' }}>Admin Staff</option>
            </select>
    </div>
</div>


{{-- Manager --}}
<div class="form-group mb-3">
    <label for="manager_id">Manager</label>
    <div class="input-group">
        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
        <select class="form-control" id="manager_id" name="manager_id">
            <option value="">Select Manager</option>
            @foreach($managers as $mgr)
                <option value="{{ $mgr->id }}" {{ $employee->manager_id == $mgr->id ? 'selected' : '' }}>
                    {{ $mgr->name }}
                </option>
            @endforeach
        </select>
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
