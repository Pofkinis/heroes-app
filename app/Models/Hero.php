<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereNameLike(string $query)
 */
class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'api_id',
        'name',
        'image',
        'user_id'
    ];

    public function powerStats()
    {
        return $this->hasOne(PowerStat::class);
    }

    public function biography()
    {
        return $this->hasOne(Biography::class);
    }

    public function aliases()
    {
        return $this->hasMany(Alias::class);
    }

    public function appearance()
    {
        return $this->hasOne(Appearance::class);
    }

    public function work()
    {
        return $this->hasOne(Work::class);
    }

    public function connections()
    {
        return $this->hasOne(Connection::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function scopeWhereNameLike(Builder $builder, $key)
    {
        return $builder->where('name', 'LIKE', "%$key%");
    }
}
