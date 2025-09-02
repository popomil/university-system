<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Student;
use App\Models\Course;
use App\Models\Department;

class DashboardController extends Controller
{
    public function index()
    {
        $doctorsCount = Doctor::count();
        $studentsCount = Student::count();
        $coursesCount = Course::count();
        $departmentsCount = Department::count();

        return view('dashboard.index', compact(
            'doctorsCount',
            'studentsCount',
            'coursesCount',
            'departmentsCount'
        ));
    }
}
