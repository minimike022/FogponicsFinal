<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorsData extends Model
{
    use HasFactory;

    public $table = "sensorData";
    public $timestamps = false;

    protected $fillable = [
        "lightIntensity", "humidity", "waterLevel", "waterTemperature"
    ];
}
