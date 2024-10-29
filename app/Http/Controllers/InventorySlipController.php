<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventorySlip;
use App\Models\Custodian;
use App\Models\Recipient;

class InventorySlipController extends Controller
{
    // Display the form
    public function index()
    {
        $records = InventorySlip::join('custodians', 'custodians.custodian_id', 'inventory_slips.custodian_id')
        ->join('recipients', 'recipients.recipient_id', 'inventory_slips.recipient_id')
        ->select('inventory_slips.*', 'recipients.name as rName', 'custodians.name as cName')->get();
        $custodian = Custodian::get();
        $recipient = Recipient::get();
        return view('pages.inventory_slip.index', compact('records', 'custodian', 'recipient'));  // Ensure this view exists
    }

    // Store the form data
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'lgu' => 'required|string|max:255',
            'fund' => 'required|string|max:100',
            'office' => 'required|string|max:255',
            'date_acquired' => 'required|date',
            'custodian_id' => 'required|integer|exists:custodians,custodian_id',
            'recipient_id' => 'required|integer|exists:recipients,recipient_id',
        ]);

        // Create a new inventory slip record
        InventorySlip::create([
            'lgu' => $request->lgu,
            'fund' => $request->fund,
            'office' => $request->office,
            'date_acquired' => $request->date_acquired,
            'custodian_id' => $request->custodian_id,
            'recipient_id' => $request->recipient_id,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Inventory Slip has been saved successfully.');
    }
}
