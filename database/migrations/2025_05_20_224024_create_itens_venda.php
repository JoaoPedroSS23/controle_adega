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
        Schema::create('itens_venda', function (Blueprint $table) {
            $table->foreignId('vd_id')->constrained()->on('venda')->references('vd_id')->onDelete('cascade');
            $table->foreignId('prd_id')->constrained()->on('produto')->references('prd_id')->onDelete('cascade');
            $table->double('vdt_qtd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_venda');
    }
};
