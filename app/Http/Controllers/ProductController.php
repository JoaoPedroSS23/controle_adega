<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store($data, $id = null): bool
    {
        try{

            if(!empty($id)) {
                $produto = Produto::find($id);
                if(!($produto instanceof Produto) ) {
                    throw new \Exception("Produto não encontrado!");
                }

                $produto->prd_nome = $data['prd_nome'];
                $produto->prd_valor = doubleval($data['prd_valor']);
                $produto->sta_id = $data['sta_id'];
                $produto->cla_id = $data['cla_id'];
            } else {
                $produto = Produto::create([
                    "prd_nome" => $data['prd_nome'],
                    "prd_valor" => doubleval($data['prd_valor']),
                    "sta_id" => intval($data['sta_id']),
                    "cla_id" => intval($data['cla_id']),
                ]);
            }

            $produto->save();

            return true;
        } catch(\Exception $e) {
            dd($e);
            throw new \Exception("Não foi possível cadastrar ou atualizar o produto!");
        }
    }
}
