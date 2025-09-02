<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Public pages
Route::view('/', 'welcome');
Route::view('/about', 'about')->middleware(['auth', 'verified']);
Route::view('/courseInfo', 'courseInfo')->middleware(['auth', 'verified']);
Route::view('/contact', 'contact')->middleware(['auth', 'verified']);
Route::view('/dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Registration
Route::get('/register', [UserController::class, 'create'])->name('register.form');
Route::post('/newregister', [UserController::class, 'store'])->name('newregister');

// Resources
Route::resource('doctors', DoctorController::class);
Route::resource('courses', CourseController::class);
Route::resource('employees', EmployeeController::class);

// Departments
Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/store', [DepartmentController::class, 'store'])->name('departments.store');
});

// Students
Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});

// Auth routes
require __DIR__.'/auth.php';
