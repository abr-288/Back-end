<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_type',
        'service_id',
        'status',
        'total_price',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'total_price' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date'
    ];
    // Relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->morphTo();
    }
    // Méthodes helper pour récupérer le service spécifique
    public function getServiceAttribute()
    {
        return match ($this->service_type) {
            'flight' => Flight::find($this->service_id),
            'hotel' => Hotel::find($this->service_id),
            'car' => Car::find($this->service_id),
            'tour' => Tour::find($this->service_id),
            'cruise' => Cruise::find($this->service_id),
            default => null
        };
    }
}
