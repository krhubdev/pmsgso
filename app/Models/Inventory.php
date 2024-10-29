<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'description', 'qty', 'unit', 'unit_cost', 'total_cost', 'inventory_item_no', 'estimated_useful_life', 'ics_id'
    ];

    public function inventorySlip()
    {
        return $this->belongsTo(InventorySlip::class, 'ics_id');
    }
}
