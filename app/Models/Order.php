<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'trip_id',
        'trip_destination_id',
        'price',
        'seat_number',
        'is_valid',
        'is_paid',
        'due_datetime',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function trip(): BelongsTo
    {
        return $this->belongsTo(Trip::class, "trip_id", 'id');
    }

}
