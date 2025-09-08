<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'airline_id',
        'departure_city',
        'arrival_city',
        'departure_time',
        'arrival_time',
        'seats',
        'price'
    ];

    protected $casts = [
        'departure_time' => 'datetime',
        'arrival_time' => 'datetime',
        'price' => 'decimal:2'
    ];

    // Relations
    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function bookings()
    {
        return $this->morphMany(Booking::class, 'service');
    }
}
