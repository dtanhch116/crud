<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;

    protected $fillable = [
        'Aircraft_ID',
        'Departure_Airport',
        'Arrival_Airport',
        'Departure_Time',
        'Arrival_Time',
        'Flight_Duration',
    ];
}
