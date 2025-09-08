<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'duration_days',
        'price',
        'seats',
        'image'
    ];
    protected $casts = [
        'price' => 'decimal:2'
    ];
    // Relations
    public function bookings()
    {
        return $this->morphMany(Booking::class, 'service');
    }
}
