<?php

use App\Models\Beekeeper;
use App\Models\Hive;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('production_cycles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hive::class)->constrained();
            $table->foreignIdFor(Beekeeper::class)->constrained();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_cycles');
    }
};
