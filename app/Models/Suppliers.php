<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = [
        'tax_identifier',
        'commercial_name',
        'contact_person',
        'address',
        'email_address',
        'payment_terms',
        'average_replenishment_time',
        'reliability_assessment'
    ];
}
