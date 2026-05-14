<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categoria;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index(){

        $categorias = Categoria::orderBy('ordem_categoria')->get();

        return view('admin.categoria.index', compact('categorias'));
    }
    //
}
