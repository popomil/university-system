@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-book mr-2"></i> Courses
                    </h3>
                     @if (auth()->check() && auth()->user()->role == 'admin')
                        <a href="{{ route('courses.create') }}" class="btn btn-dark btn-sm ml-auto">
                            <i class="fas fa-plus"></i> Add Course
                        </a>
                     @endif
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered table-hover table-striped text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Code</th>
                                <th>Cost</th>
                                <th>Hours</th>
                                <th>Department</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $index => $course)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->code }}</td>
                                    <td>{{ $course->cost }}</td>
                                    <td>{{ $course->hours }}</td>
                                    <td>
                                        <span class="badge bg-info">
                                            {{ $course->department?->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>
                                        @if (auth()->check() && auth()->user()->role == 'admin')
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('courses.edit', $course->id) }}" 
                                                   class="btn btn-outline-primary btn-sm mr-3">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('courses.destroy', $course->id) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Are you sure you want to delete this course?')">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        @else
                                            <span class="text-muted">No Actions</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <span class="text-warning fw-bold">
                                        Access Denied: Only Admin Can Edit/Delete
                                    </span>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
