<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_type_id',
        'train_name',
        'is_active',
    ];

    public function train_type(): BelongsTo
    {
        return $this->belongsTo(TrainType::class,'train_type_id', 'id');
    }
}
