@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-tie me-2"></i> Add Employee</h3>
    </div>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="card-body">

            {{-- Name --}}
            <div class="form-group mb-3">
                <label for="name">Employee Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
            </div>

            {{-- Phone --}}
            <div class="form-group mb-3">
                <label for="phone">Phone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                </div>
            </div>

            {{-- Role --}}
            <div class="form-group mb-3">
                <label for="role">Role</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                    <select class="form-control" id="role" name="role" required>
                        <option value="">Select Role</option>
                        <option value="doctor">Doctor</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin_staff">Admin Staff</option>
                    </select>
                </div>
       {{-- Manager --}}
            <div class="form-group mb-3">
                <label for="manager_id">Manager</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                    <select class="form-control" id="manager_id" name="manager_id">
                        <option value="">No Manager</option>
                        @foreach($employees as $manager)
                            <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Department --}}
            <div class="form-group mb-3">
                <label for="department_id">Department</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                    <select class="form-control" id="department_id" name="department_id" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-1"></i> Save Employee
            </button>
        </div>
    </form>
</div>
@endsection
