<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    function listar(){
        $fornecedores = Fornecedor::all();

        return view('fornecedores_listar', ['fornecedores' => $fornecedores]);
    }

    function inserir(Request $req){
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $req->nome;
        $fornecedor->razao= $req->razao;
        $fornecedor->cnpj=$req->cnpj;

        $fornecedor->save();
    }

    function editar(Request $req, $id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $req->nome;
        $fornecedor->razao= $req->razao;
        $fornecedor->cnpj=$req->cnpj;

        $fornecedor->save();
    }
}
