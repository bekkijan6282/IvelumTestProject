<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TripCarriageDestinationPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'trip_id',
        'carriage_id',
        'start_station_id',
        'end_station_id',
        'price',
    ];

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }

    public function carriage(): BelongsTo {
        return $this->belongsTo(TrainCarriage::class, 'carriage_id', 'id');
    }

    public function start_station(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'start_station_id', 'id');
    }

    public function end_station(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'end_station_id', 'id');
    }
}
