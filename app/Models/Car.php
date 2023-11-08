<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function renter()
    {
        return $this->hasOne(Renter::class);
    }
    protected $table = 'cars';

    protected $fillable = [
        'brand',
        'model',
        'type',
        'license_plate',
        'VIN',
        'manufacture_date',
        'color',
        'fuel_type',
        'fuel_capacity',
        'mileage',
        'daily_cost',
        'status',
        'failed_at',
        'image_path',
    ];

    protected $dates = ['failed_at'];

    // Define the possible enum values for 'type' and 'status'
    protected $enums = [
        'type' => ['Sedan', 'SUV', 'Coupe', 'Convertible', 'Hatchback', 'Luxury', 'Electric', 'Sport'],
        'status' => ['unavailable', 'available', 'in maintenance'],
    ];

    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = in_array($value, $this->enums['type']) ? $value : null;
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = in_array($value, $this->enums['status']) ? $value : null;
    }
}
