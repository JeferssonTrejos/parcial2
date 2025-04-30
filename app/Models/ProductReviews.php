<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    protected $fillable = [
        'review',
    ];


    // relacion, una reseña pertenece a un producto
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    //relacion una reseña tiene muchas imagenes
    public function images()
    {
        return $this->hasMany(ProductReviewImages::class);
    }

}

