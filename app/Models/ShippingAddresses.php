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

    //Relacion , una direccion de envio pertenece a un cliente
    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

}
