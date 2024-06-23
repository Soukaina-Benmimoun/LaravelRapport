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
        Schema::create('notaires', function (Blueprint $table) {
            $table->string('num')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('age');
            $table->string('tel');
            $table->string('email');
            $table->string('id_cab');
            $table->foreign('id_cab')->references('id_cab')->on('cabinets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notaires');
    }
};
