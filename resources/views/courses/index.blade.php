@extends('layouts.app')

@section('title', 'Courses')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-building mr-2"></i> Courses
                    </h3>
                    <a href="{{ route('courses.create') }}" class="btn btn-dark btn-sm ml-auto">
                        <i class="fas fa-plus "></i> Add Course
                    </a>
                </div>

                <div class="card-body">
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
                                    <td>{{ $course->department?->name ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-muted">No courses found.</td>
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
