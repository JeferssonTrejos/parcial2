<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipmentTracking extends Model
{
    protected $fillable = [
        'shipping_company',
        'tracking_number',
        'departure_date',
        'estimated_delivery_date',
        'current_status',
        'package_location',
    ];

    public function shipment()
    {
        return $this->belongsTo(Orders::class);
    }
    
}
