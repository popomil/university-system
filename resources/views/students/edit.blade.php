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
                    <input type="text" value="{{ $student->name }}" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
            </div>

            {{-- Age --}}
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                    <input type="number"  value="{{ $student->age }}" class="form-control" id="age" name="age" placeholder="Enter age" required>
                </div>
            </div>

            {{-- Address --}}
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <input type="text" value="{{ $student->address }}" class="form-control" id="address" name="address" placeholder="Enter address" required>
                </div>
            </div>

            {{-- Gender --}}
            <div class="form-group mb-3">
                <label for="gender">Gender</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>

            {{-- Code --}}
            <div class="form-group mb-3">
                <label for="code">Student Code</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                    <input type="text" value="{{ $student->code }}" class="form-control" id="code" name="code" placeholder="Enter code" required>
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
                            <option value="{{ $doc->id }}" {{ $student->doctor_id == $doc->id ? 'selected' : '' }}>{{ $doc->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Save Student</button>
        </div>
    </form>
</div>
@endsection
