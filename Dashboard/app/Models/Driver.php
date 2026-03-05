<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'drivers';
    protected $fillable = [
        'order_id',
        'user_id',
        'licence_number',
        'img',
    ];
}
