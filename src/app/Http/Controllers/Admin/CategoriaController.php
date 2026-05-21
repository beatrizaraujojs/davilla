<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categoria;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index(){

        $categorias = Categoria::orderBy('ordem_categoria')
        // ->where('status_categoria', 'ATIVO')
        ->get();

        return view('admin.categoria.index', compact('categorias'));
    }



    // Campo do formulario da pagina cadastro de categoria ADMIN
    public function store(Request $request){
        $request->validate([

            'nome_categoria' => "required|string|max:30",
            'descricao_categoria' => "required|string",
            'ordem_categoria' => "required|integer",
            'status_categoria' => "required|in:ATIVO,INATIVO",


        ]);


        Categoria::create([
            'nome_categoria' => $request->nome_categoria,
             'descricao_categoria' => $request->descricao_categoria,
              'ordem_categoria' => $request->ordem_categoria,
               'status_categoria' => $request->status_categoria,
        ]);

         return redirect()
         ->route('admin.categoria.index')
         ->with('success', 'Categoria cadastrada com sucesso');
    }
    //

    public function desativar($id){

        // dd($id);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'status_categoria' => 'INATIVO'
        ]);


        return redirect()
        ->route('admin.categoria.index')
        ->with('success', 'Categoria desativada com sucesso');
    }

        public function ativar($id){

        // dd($id);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'status_categoria' => 'ATIVO'
        ]);


        return redirect()
        ->route('admin.categoria.index')
        ->with('success', 'Categoria ativada com sucesso');
    }
}
