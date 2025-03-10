<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Colonne ID auto-incrémentée
            $table->string('name'); // Nom du produit
            $table->text('description')->nullable(); // Description (optionnelle)
            $table->decimal('price', 8, 2); // Prix avec 8 chiffres au total et 2 décimales
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Supprime la table si la migration est annulée
    }
}