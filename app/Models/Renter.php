<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;
    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function bikes()
    {
        return $this->hasMany(Bike::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;

    protected $table = 'renters';

    protected $fillable = [
        'user_id',
        'no_ktp',
        'phone',
    ];
}
