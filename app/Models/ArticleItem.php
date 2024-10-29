<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'article',
        'description',
        'acquisition_date',
        'property_number_x',
        'property_number_y',
        'unit_measure',
        'unit_value',
        'quantity_per_property_card',
        'quantity_per_physical_count',
        'location',
        'condition',
        'accountable_officer',
    ];
}

