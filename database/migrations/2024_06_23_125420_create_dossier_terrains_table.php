<?php

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
        Schema::create('dossier_terrains', function (Blueprint $table) {
            $table->string('iddossier')->primary();
            $table->date('date_ouverture');
            $table->date('date_cloture');
            $table->string('numter');
            $table->foreign('numter')->references('numter')->on('terrains');
            $table->string('numnotaire');
            $table->foreign('numnotaire')->references('num')->on('notaires');
            $table->enum('etat', ['traité', 'nontraité']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_terrains');
    }
};
