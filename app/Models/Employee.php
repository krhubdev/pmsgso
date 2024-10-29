<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'office',
    ];

    // Relationship to PropertyAcknowledgement
    public function propertyAcknowledgements()
    {
        return $this->hasMany(PropertyAcknowledgement::class, 'received_by');
    }
}

