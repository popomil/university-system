<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Doctor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
        public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
}
