<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class honeyBatche extends Model
{
    /** @use HasFactory<\Database\Factories\HoneyBatcheFactory> */
    use HasFactory;

    protected $fillable = [
        'production_cycle_id',
        'grams',
        'container',
    ];
}
