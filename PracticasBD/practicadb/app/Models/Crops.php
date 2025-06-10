<?php

namespace App\Models;
use App\Models\Hive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Crops extends Model
{
    /** @use HasFactory<\Database\Factories\CropsFactory> */
    use HasFactory;

    protected $fillable = [
        'crop',
        'pollination_date',
        'conditions'
    ];

    public function Hives(){
        return $this->BelongsToMany(Hive::class);
    }

}
