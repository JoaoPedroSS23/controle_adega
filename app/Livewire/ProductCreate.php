<?php

namespace App\Livewire;

use App\Http\Controllers\ProductController;
use App\Models\ClassificacaoModel;
use App\Models\Status;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductCreate extends Component
{

    #[Validate('required|min:5', as: "Descrição do produto")]
    public $prd_nome;

    #[Validate('required|min:3', as: "Valor do produto")]
    public $prd_valor;

    #[Validate('required', as: "Status")]
    public $sta_id;

    #[Validate('required|min:1', as: "Classificação")]
    public $cla_id;

    private function getClassificacoes()
    {
        return ClassificacaoModel::where("cla_id", '>', '0')->get();
    }

    public function save()
    {
        $validated = $this->validate();
        try{
            $this->saveProd($validated);
            $this->dispatch("open-toast", messageToast: "Produto inserido com sucesso!");
            $this->redirect('/product');
            $this->resetFields();
        } catch (\Exception $e) {
            $this->dispatch("open-toast", messageToast: "Algum erro inesperado aconteceu...");
        }

    }

    public function render()
    {
        return view('livewire.product-create')->with([
            "classificacoes" => $this->getClassificacoes(),
            'status' => Status::where('sta_id', '>', '0')->get()
        ]);
    }


    private function saveProd($data)
    {
        try{
            $ctr = new ProductController();
            $ctr->store($data);
        } catch(\Exception $e) {
            $this->dispatch("open-toast", messageToast: $e->getMessage());
        }
    }
}
