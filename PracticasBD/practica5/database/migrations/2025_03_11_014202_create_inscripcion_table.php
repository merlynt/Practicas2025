<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->unsignedBigInteger('id_inscripcion', true);
            $table->unsignedBigInteger('id_estudiante')->nullable();
            $table->foreign('id_estudiante')->references('id_estudiante')->on('estudiante')->onDelete('cascade');
            $table->unsignedBigInteger('id_curso')->nullable();
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');
            $table->date('fecha_inscripcion');
            $table->float('calificacion')->nullable();
            $table->timestamps();
            $table->unique(['id_estudiante', 'id_curso']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
};
