<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;

 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {


         // Buscar CATEGORIA para montar a lista de filtros
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();


         $listaProduto = Produto::with('CategoriaProduto')
            ->where('status_produto', 'ATIVO')
            ->orderBy('ordem_produto')
            ->get();

        
 
        //  dd($filtroCategoria);

        return view('site.home.home', compact('filtroCategoria','listaProduto'));
    }
}