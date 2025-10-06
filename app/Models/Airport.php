<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Airport extends Model
{
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'icao_code',
        'iata_code',
        'name',
        'city',
        'country',
        'country_code',
        'latitude',
        'longitude',
        'altitude',
        'timezone',
        'timezone_abbr',
        'dst',
        'tz_database_time_zone',
        'type',
        'source',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'altitude' => 'integer',
    ];

    /**
     * Relation avec les vols au départ de cet aéroport.
     */
    public function departingFlights(): HasMany
    {
        return $this->hasMany(Flight::class, 'origin_airport_id');
    }

    /**
     * Relation avec les vols à destination de cet aéroport.
     */
    public function arrivingFlights(): HasMany
    {
        return $this->hasMany(Flight::class, 'destination_airport_id');
    }

    /**
     * Récupère le nom complet de l'aéroport avec la ville et le pays.
     *
     * @return string
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->name} ({$this->iata_code}), {$this->city}, {$this->country}";
    }

    /**
     * Récupère les coordonnées GPS formatées.
     *
     * @return string
     */
    public function getCoordinatesAttribute(): string
    {
        return "{$this->latitude}, {$this->longitude}";
    }

    /**
     * Récupère l'URL Google Maps de l'emplacement de l'aéroport.
     *
     * @return string
     */
    public function getGoogleMapsUrlAttribute(): string
    {
        return "https://www.google.com/maps?q={$this->latitude},{$this->longitude}";
    }

    /**
     * Recherche les aéroports par nom, ville, code IATA ou code ICAO.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $search
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, string $search)
    {
        return $query->where('name', 'like', "%{$search}%")
            ->orWhere('city', 'like', "%{$search}%")
            ->orWhere('iata_code', 'like', "%{$search}%")
            ->orWhere('icao_code', 'like', "%{$search}%");
    }

    /**
     * Filtre les aéroports par pays.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $countryCode
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByCountry($query, string $countryCode)
    {
        return $query->where('country_code', $countryCode);
    }

    /**
     * Filtre les aéroports par type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByType($query, string $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Trie les aéroports par popularité (nombre de vols).
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePopular($query)
    {
        return $query->withCount(['departingFlights', 'arrivingFlights'])
            ->orderByRaw('(departing_flights_count + arriving_flights_count) DESC');
    }

    /**
     * Calcule la distance entre cet aéroport et des coordonnées GPS données.
     *
     * @param float $latitude
     * @param float $longitude
     * @param string $unit 'km' ou 'mi'
     * @return float
     */
    public function distanceTo(float $latitude, float $longitude, string $unit = 'km'): float
    {
        $theta = $this->longitude - $longitude;
        $dist = sin(deg2rad($this->latitude)) * sin(deg2rad($latitude)) + 
                cos(deg2rad($this->latitude)) * cos(deg2rad($latitude)) * cos(deg2rad($theta));
        
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        
        $unit = strtoupper($unit);
        
        if ($unit === 'KM') {
            return $miles * 1.609344;
        } elseif ($unit === 'MI') {
            return $miles;
        } else {
            return $miles * 1.609344; // Par défaut en kilomètres
        }
    }
}
