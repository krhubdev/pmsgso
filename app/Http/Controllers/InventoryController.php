<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    // Display the form
    public function index()
    {
        $records = Inventory::get();
        return view('pages.inventory.index', compact('records'));  // Ensure this view exists
    }

    // Store the form data
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'description' => 'required|string|max:255',
            'qty' => 'required|integer',
            'unit' => 'required|string|max:50',
            'unit_cost' => 'required|numeric',
            'total_cost' => 'required|numeric',
            'inventory_item_no' => 'required|string|max:100',
            'estimated_useful_life' => 'nullable|string|max:100',
            'ics_id' => 'nullable|integer',
        ]);

        // Create a new inventory record
        Inventory::create([
            'description' => $request->description,
            'qty' => $request->qty,
            'unit' => $request->unit,
            'unit_cost' => $request->unit_cost,
            'total_cost' => $request->total_cost,
            'inventory_item_no' => $request->inventory_item_no,
            'estimated_useful_life' => $request->estimated_useful_life,
            'ics_id' => $request->ics_id,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Inventory record has been saved successfully.');
    }
}

