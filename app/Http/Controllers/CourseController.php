<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('department')->get(); 
        return view('courses.index', compact('courses'));
    }
    public function create()
    {
        $departments = Department::all();
        return view('courses.create', compact('departments'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code',
            'cost' => 'required|numeric|min:0',
            'hours' => 'required|integer|min:1',
            'department_id' => 'required|exists:departments,id',
        ]);

        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
    public function edit(Course $course)
    {
        $departments = Department::all();
        return view('courses.edit', compact('course', 'departments'));
    }
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:courses,code,'.$course->id,
            'cost' => 'required|numeric|min:0',
            'hours' => 'required|integer|min:1',
            'department_id' => 'required|exists:departments,id',
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
