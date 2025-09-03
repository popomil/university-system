@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title"><i class="fas fa-users me-2"></i> Students List</h3>
         @if (auth()->check() && auth()->user()->role == 'admin')
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm ml-auto">
            <i class="fas fa-plus me-1"></i> Add Student
        </a>
         @endif
    </div>

    <div class="card-body table-responsive">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Code</th>
                    <th>Doctor</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $index => $student)
                    <tr>
                        <td>{{ $students->firstItem() + $index }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td><span class="badge bg-info">{{ $student->gender }}</span></td>
                        <td><span class="badge bg-secondary">{{ $student->code }}</span></td>
                        <td>{{ $student->doctor ? $student->doctor->name : '-' }}</td>
                        <td class="d-flex gap-2">
                            @if (auth()->check() && auth()->user()->role == 'admin')
                                <a href="{{ route('students.edit', $student->id) }}" 
                                   class="btn btn-outline-primary btn-sm mr-3">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this student?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                                 @else
                                <span class="text-warning fw-bold">
                                    Access Denied: Only Admin Can Edit/Delete
                                </span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3">
            {{ $students->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
