<?php

namespace App\Livewire;

use App\GettersTrait;
use App\Models\ClassificacaoModel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductCreateClassification extends Component
{
    #[Validate('required|min:3', as: "Descrição")]
    public $cla_descricao = '';

    use GettersTrait;
    public function render()
    {
        return view('livewire.product-create-classification')->with([
            "classificacoes" => $this->getClassificacoes(),
        ]);
    }

    public function save()
    {
        $validated = $this->validate();
        try{
            ClassificacaoModel::create([
                'cla_descricao' => $validated['cla_descricao']
            ]);

            $this->dispatch("open-toast", messageToast: "Produto inserido com sucesso!");
            $this->redirect('/product');
        } catch(\Exception $e) {
            dd($e);
            $this->dispatch("open-toast", messageToast: "Algum erro inesperado aconteceu...");
        }
    }
}
