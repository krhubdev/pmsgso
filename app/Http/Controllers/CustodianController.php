<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custodian;

class CustodianController extends Controller
{
    // Display the form
    public function index()
    {
        $records = Custodian::get();
        return view('pages.custodian.index', compact('records'));  // Ensure this view exists
    }

    // Store the form data
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:100',
            'office' => 'required|string|max:255',
        ]);

        // Create a new custodian record
        Custodian::create([
            'name' => $request->name,
            'position' => $request->position,
            'office' => $request->office,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Custodian record has been saved successfully.');
    }
}
