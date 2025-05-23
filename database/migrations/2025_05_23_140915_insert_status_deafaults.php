<?php

use App\Models\Status;
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
        Status::insert([
            ['sta_id' => '1', 'sta_tipo' => "Ativo"],
            ['sta_id' => '2', 'sta_tipo' => "Inativo"],
            ['sta_id' => '3', 'sta_tipo' => "Pré-cadastrado (pendente de aprovação)"]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Status::destroy(1,2,3);
    }
};
