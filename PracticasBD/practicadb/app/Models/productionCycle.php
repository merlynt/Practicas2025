<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Hive;
use App\Models\Beekeeper;
class productionCycle extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionCycleFactory> */
    use HasFactory;

    protected  $fillable = [
        'hive_id',      
        'beekeeper_id',   
        'start_date',     
        'end_date',       
        'status',
    ];

    public function hive():BelongsTo
    {
        return $this->belongsTo(Hive::class);
    }

    public function beekeeper():BelongsTo
    {
        return $this->belongsTo(Beekeeper::class);
    }
}
