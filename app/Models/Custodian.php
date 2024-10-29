<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custodian extends Model
{
    use HasFactory;

    protected $table = 'custodians';

    protected $fillable = [
        'name', 'position', 'office'
    ];

    public function inventorySlips()
    {
        return $this->hasMany(InventorySlip::class, 'custodian_id');
    }
}
