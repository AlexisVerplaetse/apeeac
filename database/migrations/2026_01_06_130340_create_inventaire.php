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
        Schema::create('inventaire', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('quantite');
            $table->string('auteur');
            $table->string('titre');
            $table->string('instrument');
            $table->string('edition');
            $table->string('etat');
            $table->integer('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaire');
    }
};
