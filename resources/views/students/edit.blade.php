@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user-graduate me-2"></i> Edit Student</h3>
    </div>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">

            {{-- Name --}}
            <div class="form-group mb-3">
                <label for="name">Student Name</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="name"
                           value="{{ old('name', $student->name) }}" required>
                </div>
            </div>

            {{-- Age --}}
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                    <input type="number" class="form-control" id="age" name="age"
                           value="{{ old('age', $student->age) }}" required>
                </div>
            </div>

            {{-- Address --}}
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" class="form-control" id="address" name="address"
                           value="{{ old('address', $student->address) }}" required>
                </div>
            </div>

            {{-- Gender --}}
            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>

            {{-- Code --}}
            <div class="form-group mb-3">
                <label for="code">Student Code</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    <input type="text" class="form-control" id="code" name="code"
                           value="{{ old('code', $student->code) }}" required>
                </div>
            </div>

            {{-- Doctor --}}
            <div class="form-group mb-3">
                <label for="doctor_id">Supervisor Doctor</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                    <select class="form-control" id="doctor_id" name="doctor_id">
                        <option value="">Select Doctor</option>
                        @foreach($doctors as $doc)
                            <option value="{{ $doc->id }}" {{ old('doctor_id', $student->doctor_id) == $doc->id ? 'selected' : '' }}>
                                {{ $doc->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>

        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-1"></i> Update Student
            </button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back
            </a>
        </div>
    </form>
</div>
@endsection
