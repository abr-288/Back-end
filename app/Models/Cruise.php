<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'itinerary',
        'duration_days',
        'price_per_person',
        'available'
    ];
    protected $casts = [
        'price_per_person' => 'decimal:2',
        'available' => 'boolean'
    ];
    // Relations
    public function bookings()
    {
        return $this->morphMany(Booking::class, 'service');
    }// Polymorphic relation with Booking
}
