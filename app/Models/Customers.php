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
}
