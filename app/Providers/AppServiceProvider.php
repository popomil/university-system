<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Doctor;
use App\Models\Student;
use App\Models\Course;
use App\Models\Department;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('dashboard', function ($view) {
            $view->with([
                'doctorsCount' => Doctor::count(),
                'studentsCount' => Student::count(),
                'coursesCount' => Course::count(),
                'departmentsCount' => Department::count(),
            ]);
        });
    }
}
