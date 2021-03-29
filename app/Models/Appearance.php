<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_id',
        'gender',
        'race',
        'height',
        'weight',
        'eye_color',
        'hair_color',
    ];

    protected $casts = [
        'height' => 'array',
        'weight' => 'array',
    ];
}
