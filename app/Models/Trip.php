<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_station_id',
        'end_station_id',
        'start_datetime',
        'end_datetime',
        'train_id',
    ];

    public function start_station(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'start_station_id', 'id');
    }

    public function end_station(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'end_station_id', 'id');
    }

    public function train(): BelongsTo
    {
        return $this->belongsTo(Train::class, 'train_id', 'id');
    }

    public function stations(): BelongsToMany
    {
        return $this->belongsToMany(Station::class, 'trip_stations', 'station_id', 'trip_id');
    }
}
