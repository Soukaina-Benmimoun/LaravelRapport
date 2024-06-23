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
        Schema::create('terrains', function (Blueprint $table) {
            $table->string('numter')->primary();
            $table->enum('typeTerrain', ['Terrain agricole', 'terrain en lotissement']);
            $table->decimal('prixvente', 10, 2);
            $table->string('cinv');
            $table->foreign('cinv')->references('cinv')->on('vendeurs');
            $table->string('titre_foncier');
            $table->string('adresse');
            $table->string('ville');
            $table->decimal('superficie', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terrains');
    }
};
