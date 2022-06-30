<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TrainCarriage extends Model
{
    use HasFactory;

    protected $fillable = [
        'carriage_type_id',
        'carriage_id',
        'train_type_id',
        'train_id',
        'seats_count',
        'is_active',
    ];

    public function carriage_type(): BelongsTo
    {
        return $this->belongsTo(TrainCarriageType::class, 'carriage_type_id', 'id');
    }

    public function train_type(): BelongsTo
    {
        return $this->belongsTo(TrainType::class, 'train_type_id', 'id');
    }

    public function train(): BelongsTo
    {
        return $this->belongsTo(Train::class, 'train_id', 'id');
    }
}
