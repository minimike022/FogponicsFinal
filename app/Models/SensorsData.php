<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorsData extends Model
{
    use HasFactory;

    public $table = 'sensors_data';

    public $timestamps = false;

    private $fillable = [
        'water_temperature', 'light_intensity', 'humidity'
    ];
}
