<?php

namespace App;

use App\Models\ClassificacaoModel;

trait GettersTrait
{
    public function getClassificacoes()
    {
        return ClassificacaoModel::where("cla_id", '>', '0')->get();
    }
}
