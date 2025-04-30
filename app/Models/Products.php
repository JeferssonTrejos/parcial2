<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'SKU',
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


    public function categories()
    {
        return $this->belongsTo(ProductCategories::class);
    }

    public function productsImages()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReviews::class);
    }

    public function suppliers()
    {
        return $this->belongsTo(Suppliers::class);
    }

    //Relacion, un producto puede pernecer a muchas ordenes  
    public function productsOrder()
    {
        return $this->hasMany(ProductsOrders::class);
    }

}
