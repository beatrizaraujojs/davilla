<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

// AQUI ESTÁ IDENTIFICANDO O QUE PODE/ O QUE NÃO PODE / E O QUE É PARA ATUALIZAR SOZINHO E OU PREENCHER 
class Categoria extends Model
{
    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';

    public $timestamps = true;

    const CREATED_AT = 'criado_em_categoria';
    const UPDATED_AT = 'atualizado_em_categoria';

    protected $fillable = [
        'nome_categoria',
        'descricao_categoria',
        'ordem_categoria',
        'status_categoria',
    ];

    public function ProdutosCategoria() {

        return $this->hasMany(Produto::class, 'id_categoria', 'id_categoria');
    }
}
