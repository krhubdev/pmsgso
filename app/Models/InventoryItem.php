<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $table = 't_inventory_items';

    protected $fillable = [
        'article_item',
        'description',
        'date_acquisition',
        'old_property_no',
        'old_property_no_2020',
        'new_property_no_2021',
        'unit_of_measures',
        'unit_value',
        'quantity_per_property_card',
        'quantity_per_physical_card',
        'location_whereabouts',
        'condition',
        'remarks_accountable_officer',
    ];
}
