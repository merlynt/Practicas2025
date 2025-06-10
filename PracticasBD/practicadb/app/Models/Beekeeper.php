<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductionCycle;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beekeeper extends Model
{
    /** @use HasFactory<\Database\Factories\BeekeeperFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 
        'lastName',
        'phone'
    ];

    public function productionCycles():HasMany
    {
        return $this->hasMany(ProductionCycle::class);
    }
}
