<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'technical_specifications',
        'brand',
        'base_price',
        'applicable_taxes',
        'active_descounts',
        'stock_availiable',
        'estimated_shipping_time ',
    ];
}
