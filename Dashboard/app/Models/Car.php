<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table='cars';
    protected $fillable=[
        'brand_id',
        'models',
        'year',
        'color',
        'licence_plate',
        'mileage',
        'lat',
        'lng',
        'Is_premium',
        'rental_count',
        'daly_rate',
        'status'
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    
    
}
