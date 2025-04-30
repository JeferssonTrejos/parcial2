<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'full_name',
        'email_address',
        'password',
        'phone_number',
        'birthdate',
        'communication_preferences',
    ];

    // Relacion, un cliente puede tener muchas direcciones de envio
    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddresses::class);
    }

    // Relacion, un cliente puede tener muchas ordenes
    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
