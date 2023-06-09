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
        'brand',
        'model',
        'price',
        'motor',
        'horse_power',
        'color',
        'sold_at',
        'sold_price'
    ];

    public $casts = [
        'sold_at' => 'datetime'
    ];

    public function isSold(): bool
    {
        return $this->sold_price !== null;
    }
}
