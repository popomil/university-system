@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title"><i class="fas fa-briefcase me-2"></i> Employees List</h3>
        <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-plus me-1"></i> Add Employee
        </a>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Manager</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $index => $employee)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $employee->name }}</td>
                        <td><span class="badge bg-info">{{ $employee->role }}</span></td>
                        <td>{{ $employee->phone ?? '-' }}</td>
                        <td>
                            <span class="badge bg-primary">
                                {{ $employee->department ? $employee->department->name : '-' }}
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $employee->manager ? $employee->manager->name : '-' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
