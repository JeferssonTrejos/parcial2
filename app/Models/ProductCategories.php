<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    protected $fillable = [
        'categorie_name',
    ];

    //relacion, una categoria tiene muchos productos
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
