<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RentalCar;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function rental()
    // {
    //     return $this->belongsTo(RentalCar::class, 'car_id');
    // }
}
