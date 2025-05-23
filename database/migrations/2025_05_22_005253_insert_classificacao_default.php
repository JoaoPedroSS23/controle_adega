<?php

use App\Models\ClassificacaoModel;
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
        ClassificacaoModel::insert([
            ['cla_descricao' => "Outros"]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        ClassificacaoModel::destroy(1);
    }
};
