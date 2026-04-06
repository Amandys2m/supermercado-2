<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutosController extends Controller
{
    function listar(){
        $produtos = Produto::all();


        return view('produtos_listar', ['produtos' => $produtos]);
    }
}
