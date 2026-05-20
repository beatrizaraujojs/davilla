<?php

namespace App\Http\Controllers\Admin;
use App\Models\Produto;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index(){

        $produtos = Produto::orderBy('ordem_produto')->get();

        return view('admin.produto.index', compact('produtos'));
    }
    //
}
