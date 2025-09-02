<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // جلب الطلاب مع الدكتور المرتبط
        $students = Student::with('doctor')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        return view('students.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());

        // مش محتاج attach، لأن العمود doctor_id موجود في جدول students
        // كل طالب مرتبط بدكتور واحد فقط

        return redirect()->route('students.index')->with('success', 'Student added successfully');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $student = Student::find($id);
        $doctors = Doctor::all();
        return view('students.edit', compact('student', 'doctors'));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

}


