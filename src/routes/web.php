<?php
 
// site
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\CardapioController;
use App\Http\Controllers\Site\PedidosController;
use App\Http\Controllers\Site\RegiaoController;
use App\Http\Controllers\Site\ContatoController;
use Illuminate\Support\Facades\Route;

// admin
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProdutoController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio.index');
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');


Route::get('/Cardapio/Produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');



Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/regiao', [RegiaoController::class, 'regiao'])->name('regiao.index');

Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');

Route::get('/home/produto/{slug}', [HomeController::class, 'linkProduto'])->name('banner');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');


Route::prefix('admin')->name('admin.')->group(function(){
   
    Route::get('/', [DashController::class, 'index'])->name('dash');

    // 
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::post('/categorias', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::patch('/categorias/{id}', [CategoriaController::class, 'desativar'])->name('categoria.desativar');
    Route::patch('/categorias/{id}', [CategoriaController::class, 'ativar'])->name('categoria.ativar');
   
    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');

   


});