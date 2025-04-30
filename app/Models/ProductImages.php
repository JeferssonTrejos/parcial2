<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable = [
        'image_url',
    ];

    // relacion, una imagen pertenece a un producto
    public function Products()
    {
        return $this->belongsTo(Products::class);
    }

}
