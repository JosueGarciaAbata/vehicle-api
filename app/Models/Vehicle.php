<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 * 
 * Represents a vehicle in the system.
 *
 * @package App\Models
 */
class Vehicle extends Model
{
    protected $fillable = [
        'id',
        'brand',
        'model',
        "license_plate",
        "chassis",
        "year",
        "color"
    ];
}
