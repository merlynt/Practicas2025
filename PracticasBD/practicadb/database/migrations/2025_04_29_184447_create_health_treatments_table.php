<?php

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
        Schema::create('health_treatments', function (Blueprint $table) {
            $table->id();
            $table->string('treatment', 75);
            $table->string('type', 75);
            $table->string('instructions', 100);
            $table->foreignIdFor(Hive::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_treatments');
    }
};
