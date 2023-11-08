<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    public function renter()
    {
        return $this->hasOne(Renter::class);
    }
    protected $table = 'bikes';

    protected $fillable = [
        'brand',
        'model',
        'type',
        'license_plate',
        'VIN',
        'manufacture_date',
        'color',
        'transmission',
        'fuel_type',
        'fuel_capacity',
        'mileage',
        'daily_cost',
        'status',
        'failed_at',
        'image_path',
    ];

    protected $dates = ['failed_at'];

    // Define the possible enum values for 'type', 'transmission', and 'status'
    protected $enums = [
        'type' => ['Sport', 'Cruiser', 'Touring', 'ADV', 'Naked', 'Dual-Sport', 'Dirt', 'Cafe Racer', 'Electric', 'Scooter', 'Moped', 'Classic'],
        'transmission' => ['manual', 'automatic'],
        'status' => ['unavailable', 'available', 'in maintenance'],
    ];

    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = in_array($value, $this->enums['type']) ? $value : null;
    }

    public function setTransmissionAttribute($value)
    {
        $this->attributes['transmission'] = in_array($value, $this->enums['transmission']) ? $value : null;
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = in_array($value, $this->enums['status']) ? $value : null;
    }
}
