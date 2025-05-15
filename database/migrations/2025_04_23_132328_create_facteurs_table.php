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
        Schema::create('facteurs', function (Blueprint $table) {
            $table->id();
            $table->string('num_facteur');
            $table->text('note')->nullable();
            $table->string('montant_total');
            $table->string('devise')->default("MAD");
            $table->enum('status_paiement',['en_attente', 'payée', 'annulée'])->default("en_attente");
            $table->string('date_paiement');
            $table->unsignedBigInteger("demande_id");
            $table->foreign('demande_id')->references('id')->on('demandes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facteur');
    }
};
