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
    public function order()
    {
        return $this->belongsTo(Rentail::class, 'order_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
