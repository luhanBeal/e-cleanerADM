<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value_min',
        'hours_min',
        'percent',
        'value_bedroom',
        'hours_bedroom',
        'value_living_room',
        'hours_living_room',
        'value_bathroom',
        'hours_bathroom',
        'value_kitchen',
        'hours_kitchen',
        'value_yard',
        'hours_yard',
        'value_others',
        'hours_others',
        'icon',
        'position'
    ];
}
