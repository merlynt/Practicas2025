<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\HealthTreatment;
use App\Models\Crops;

class Hive extends Model
{
    /** @use HasFactory<\Database\Factories\HiveFactory> */
    use HasFactory;

    protected $fillable = [
        'hive',
        'location_id'
    ];

    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function healthTreatments():HasMany
    {
        return $this->hasMany(HealthTreatment::class);
    }

    public function queens():HasMany
    {
        return $this->hasMany(Queen::class);
    }

    public function crops()
    {
        return $this->belongsToMany(Crops::class)
            ->withPivot('hive_id', 'crops_id');
    }

    public function productionCycles():HasMany
    {
        return $this->hasMany(ProductionCycle::class);
    }
}
