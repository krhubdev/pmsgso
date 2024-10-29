<?php

namespace App\Http\Controllers;

use App\Models\ArticleItem;
use Illuminate\Http\Request;

class ArticleItemController extends Controller
{
    public function dashboard()
    {
        $records = ArticleItem::get();
        return view('pages.dashboard', compact('records'));  // Ensure this view exists
    }

    public function index()
    {
        $records = ArticleItem::get();
        return view('pages.articles.index', compact('records'));  // Ensure this view exists
    }

    public function reports()
    {
        $records = ArticleItem::get();
        return view('pages.articles.reports', compact('records'));  // Ensure this view exists
    }

    public function print_reports()
    {
        $records = ArticleItem::get();
        return view('pages.printables.inventory', compact('records'));  // Ensure this view exists
    }

    public function ics_sticker()
    {
        $records = ArticleItem::get();
        return view('pages.articles.stickers', compact('records'));  // Ensure this view exists
    }

    public function ics_sticker_details($id)
    {
        $records = ArticleItem::get();
        return view('pages.articles.sticker-details', compact('records'));  // Ensure this view exists
    }

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'article' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'acquisition_date' => 'nullable|date',
            'property_number_x' => 'nullable|string|max:255',
            'property_number_y' => 'nullable|string|max:255',
            'unit_measure' => 'required|string|max:50',
            'unit_value' => 'required|numeric',
            'quantity_per_property_card' => 'nullable|integer',
            'quantity_per_physical_count' => 'nullable|integer',
            'location' => 'required|string|max:255',
            'condition' => 'required|string|max:50',
            'accountable_officer' => 'required|string|max:255',
        ]);

        // Create a new ArticleItem record
        ArticleItem::create([
            'article' => $request->article,
            'description' => $request->description,
            'acquisition_date' => $request->acquisition_date,
            'property_number_x' => $request->property_number_x,
            'property_number_y' => $request->property_number_y,
            'unit_measure' => $request->unit_measure,
            'unit_value' => $request->unit_value,
            'quantity_per_property_card' => $request->quantity_per_property_card,
            'quantity_per_physical_count' => $request->quantity_per_physical_count,
            'location' => $request->location,
            'condition' => $request->condition,
            'accountable_officer' => $request->accountable_officer,
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Article Item has been saved successfully.');
    }
}
