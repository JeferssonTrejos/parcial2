<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReviewImages extends Model
{
    protected $fillable = [
        'image_url',
    ];

    // relacion, una imagen pertenece a una reseña
    public function productReview()
    {
        return $this->belongsTo(ProductReviews::class);
    }
}
