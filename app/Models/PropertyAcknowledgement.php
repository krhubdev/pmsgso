<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAcknowledgement extends Model
{
    use HasFactory;

    protected $fillable = [
        'lgu',
        'fund',
        'office',
        'par_no',
        'quantity',
        'unit',
        'description',
        'property_number',
        'date_acquired',
        'amount',
        'received_by',
        'issued_by',
    ];

    // Relationship with Custodian
    public function custodian()
    {
        return $this->belongsTo(Custodian::class, 'issued_by');
    }

    // Relationship with Employee (Received By)
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'received_by');
    }
}
