@extends('layouts.app')

@section('title', 'Doctors')

@section('content')
<div class="container-fluid">
    <div class="card shadow-lg border-0 rounded-4">
        <!-- Header -->
<div class="card-header bg-dark text-white">
    <div class="d-flex w-100 align-items-center">
        <h4 class="mb-0 flex-grow-1">Doctors</h4>
         @if (auth()->check() && auth()->user()->role == 'admin')
        <a href="{{ route('doctors.create') }}" class="btn btn-success btn-sm">
            <i class="fas fa-plus-circle"></i> Add New
        </a>
        @endif
    </div>
</div>


        <!-- Body -->
        <div class="card-body col-12">
            @if($doctors->count() > 0)
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
             @endif
            <table class="table table-hover table-bordered align-middle text-center mb-0">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Salary</th>
                        <th width="200">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->age }}</td>
                        <td>{{ $doctor->address }}</td>
                        <td>
                            <span class="badge p-2 {{ $doctor->gender == 'male' ? 'bg-primary' : 'bg-pink' }}">
                                {{ $doctor->gender }}
                            </span>
                        </td>
                        <td>${{ number_format($doctor->salary, 2) }}</td>
                        <td class="d-flex justify-content-center">
                            <!-- Edit -->
                      @if (auth()->check() && auth()->user()->role == 'admin')
                        <a href="{{ route('doctors.edit', $doctor->id) }}" 
                        class="btn btn-outline-primary btn-sm me-2 mr-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this doctor?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                        </form>
                        @else
                                <span class="text-warning fw-bold">
                                    Access Denied: Only Admin Can Edit/Delete
                                </span>
                        @endif    
                            <!-- Delete -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <div class="alert alert-info text-center mb-0">
                    No doctors found. <a href="{{ route('doctors.create') }}">Add one?</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
