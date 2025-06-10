<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthTreatment extends Model
{
    /** @use HasFactory<\Database\Factories\HealthTreatmentFactory> */
    use HasFactory;
    protected $fillable = [
        'treatment', 
        'type', 
        'instructions',
        'hive_id'
    ];

    public function hive():BelongsTo
    {
        return $this->belongsTo(Hive::class);
    }

}
