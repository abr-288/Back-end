<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'type',
        'capacity',
        'price_per_night',
        'available'
    ];

    protected $casts = [
        'price_per_night' => 'decimal:2',
        'available' => 'boolean'
    ];

    // Relations
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
