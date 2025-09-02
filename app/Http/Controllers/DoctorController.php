<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function create()
    {
        return view('doctors.create');
    }
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }
    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:1',
        'address' => 'required|string|max:255',
        'gender' => 'required|in:male,female',
        'salary' => 'required|numeric|min:0',
    ]);

    $doctor = Doctor::create($validated);
     return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');
    }
       public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully!');
    }
    public function edit($id){
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }
    public function update(Request $request, $id)
{
    $doctor = Doctor::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:20|max:100',
        'gender' => 'required|in:male,female',
        'address' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
    ]);

    $doctor->update($validated);

    return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully!');
}


}
