<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('facultad', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facultad', true); 
            $table->string('nombre', 100);
            $table->string('decano', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('facultad');
    }
};
