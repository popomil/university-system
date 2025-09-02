<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
         $employees   = Employee::all();
        $managers = Employee::all();
        return view('employees.create', compact('departments', 'managers','employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'phone'         => 'nullable|string|max:20',
            'role'          => 'required|string',
            'manager_id'    => 'nullable|exists:employees,id',
            'department_id' => 'required|exists:departments,id',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        $managers = Employee::where('id', '!=', $employee->id)->get();
        return view('employees.edit', compact('employee', 'departments', 'managers'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'phone'         => 'nullable|string|max:20',
            'role'          => 'required|string',
            'manager_id'    => 'nullable|exists:employees,id',
            'department_id' => 'required|exists:departments,id',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
