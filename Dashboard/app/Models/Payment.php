<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'rental_id',
        'amount',
        'payment_date',
        'payment_method',
        'status',
    ];
    public function rental()
    {
        return $this->belongsTo(Rentail::class);
    }
}
