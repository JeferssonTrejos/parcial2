<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddresses extends Model
{
    protected $fillable = [
        'addressee',
        'floor',
        'postal_code',
        'city',
        'country',
        'phone_number',
        'special_instructions',
        'payment_methods',
    ];
}
