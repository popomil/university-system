<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('doctor')->latest()->paginate(10); // Pagination بدل get()
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        return view('students.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        // ✅ Validate before insert
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'age'        => 'required|integer|min:10|max:100',
            'address'    => 'required|string|max:255',
            'gender'     => 'required|in:Male,Female',
            'code'       => 'required|string|max:50|unique:students,code',
            'doctor_id'  => 'nullable|exists:doctors,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        $doctors = Doctor::all();
        return view('students.edit', compact('student', 'doctors'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        // ✅ Validate before update
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'age'        => 'required|integer|min:10|max:100',
            'address'    => 'required|string|max:255',
            'gender'     => 'required|in:Male,Female',
            'code'       => 'required|string|max:50|unique:students,code,' . $student->id,
            'doctor_id'  => 'nullable|exists:doctors,id',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
