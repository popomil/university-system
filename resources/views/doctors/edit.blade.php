@extends('layouts.app')

@section('title', 'Edit Doctor')

@section('content')
<div class="container py-5">
<div class="card-header bg-dark text-white">
    <div class="d-flex w-100 align-items-center">
        <h4 class="mb-0 flex-grow-1">Edit Doctors</h4>
        <a href="{{ route('doctors.create') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
        <div class="card-body">
            <form action="{{route('doctors.update',$doctor->id)}} }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input type="text" id="name" name="name" class="form-control rounded-3"
                            value="{{ old('name', $doctor->name) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label for="age" class="form-label fw-bold">Age</label>
                        <input type="number" id="age" name="age" class="form-control rounded-3"
                            value="{{ old('age', $doctor->age) }}" required>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="gender" class="form-label fw-bold d-block">Gender</label>
                        <select id="gender" name="gender" class="form-select rounded-3 pr-3" required>
                            <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="col-md-12">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" id="address" name="address" class="form-control"
                               value="{{ old('address', $doctor->address) }}" required>
                    </div>

                    <!-- Salary -->
                    <div class="col-md-6">
                        <label for="salary" class="form-label fw-bold">Salary</label>
                        <input type="number" id="salary" name="salary" class="form-control"
                               value="{{ old('salary', $doctor->salary) }}" required>
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-end gap-2 ">
                    <button type="submit" class="btn btn-success px-4 mr-3">
                        <i class="fas fa-save"></i> Update
                    </button>
                    <a href="{{ route('doctors.index') }}" class="btn btn-outline-secondary px-4">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
