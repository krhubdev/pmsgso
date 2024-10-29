<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipient;

class RecipientController extends Controller
{
    // Display the form
    public function index()
    {
        $records = Recipient::get();
        return view('pages.recipient.index', compact('records'));  // Ensure this view exists
    }

    // Store the form data
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:100',
        ]);

        // Create a new recipient record
        Recipient::create([
            'name' => $request->name,
            'position' => $request->position,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Recipient record has been saved successfully.');
    }
}

