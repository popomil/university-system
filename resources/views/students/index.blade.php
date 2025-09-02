@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title"><i class="fas fa-users me-2"></i> Students List</h3>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end  ml-auto">
            <i class="fas fa-plus me-1"></i> Add Student
        </a>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Code</th>
                    <th>Supervisor</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->address }}</td>
                        <td>
                            @if($student->gender == 'Male')
                                <span class="badge bg-primary">Male</span>
                            @else
                                <span class="badge bg-pink">Female</span>
                            @endif
                        </td>
                        <td>{{ $student->code }}</td>
                        <td>
                          <span class="badge bg-info">
    {{ $student->doctor ? $student->doctor->name : '-' }}
</span>

                        </td>
                        <td>
                            {{-- مثال على status ثابت: Active --}}
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}"  style="display:inline;">
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
