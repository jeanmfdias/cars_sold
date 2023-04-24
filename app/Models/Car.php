<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    const COLORS = [
        'red',
        'silver',
        'black',
        'blue',
        'gray',
        'white'
    ];

    protected $fillable = [
        'brand', 'model', 'price', 'motor', 'horse_power', 'color'
    ];
}
