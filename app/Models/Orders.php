<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'date',
        'shipping_address',
        'billing_address',
        'payment_method',
        'unit_price',
        'discounts',
        'shipping_costs',
        'total_paid',
        'order_status',
    ];
}
