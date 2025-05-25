<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Product extends Component
{

    private $rows = [];
    
    public function render()
    {
        $this->getRows();
        return view('livewire.product')->with([
            'rows' => $this->rows
        ]);
    }

    private function getRows()
    {
        $results = DB::table('produto')
            ->join('status', 'produto.sta_id', '=', 'status.sta_id')
            ->join('classificacao', 'produto.cla_id', '=', 'classificacao.cla_id')
            ->get();
        foreach ($results as $result) {
            $result->prd_valor = "R$ " . str_replace(".", ",", number_format($result->prd_valor, 2));
            
            array_push($this->rows, $result);
        }
    }
}
