<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Display the form
    public function index()
    {
        $records = Employee::get();
        return view('pages.employee.index', compact('records'));  // Ensure this view exists
    }

    // Store the form data
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'position' => 'required|string|max:100',
            'office' => 'required|string|max:100',
        ]);

        // Create a new employee record
        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'office' => $request->office,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Employee record has been saved successfully.');
    }
}

