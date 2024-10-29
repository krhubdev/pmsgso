<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use HasFactory;

    protected $table = 'recipients';

    protected $fillable = [
        'name', 'position'
    ];

    public function inventorySlips()
    {
        return $this->hasMany(InventorySlip::class, 'recipient_id');
    }
}
