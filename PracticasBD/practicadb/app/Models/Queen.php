<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Queen extends Model
{
    /** @use HasFactory<\Database\Factories\QueenFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'hive_id',
    ];

    public function hive():BelongsTo
    {
        return $this->belongsTo(Hive::class);
    }
}
