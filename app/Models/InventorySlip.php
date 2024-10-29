<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventorySlip extends Model
{
    use HasFactory;

    protected $table = 'inventory_slips'; // If your table name is different from model name
    
    protected $fillable = [
        'lgu', 'fund', 'office', 'date_acquired', 'custodian_id', 'recipient_id'
    ];

    public function custodian()
    {
        return $this->belongsTo(Custodian::class, 'custodian_id');
    }

    public function recipient()
    {
        return $this->belongsTo(Recipient::class, 'recipient_id');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'ics_id');
    }
}

