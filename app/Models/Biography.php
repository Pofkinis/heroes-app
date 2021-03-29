<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_id',
        'full_name',
        'alter_egos',
        'place_of_birth',
        'first_appearance',
        'publisher',
        'alignment',
    ];


}
