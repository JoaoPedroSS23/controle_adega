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
        Schema::create('produto', function (Blueprint $table) {
            $table->id('prd_id');
            $table->string('prd_nome');
            $table->double('prd_valor');
            $table->foreignId('sta_id')->constrained()->on('status')->references('sta_id')->onDelete('cascade');
            $table->float('prd_percent_desconto', 2);
            $table->date('prd_validade_desconto');
            $table->foreignId('cla_id')->constrained()->on('classificacao')->references('cla_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
