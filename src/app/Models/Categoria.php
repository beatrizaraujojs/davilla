<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// AQUI ESTÁ IDENTIFICANDO O QUE PODE/ O QUE NÃO PODE / E O QUE É PARA ATUALIZAR SOZINHO E OU PREENCHER 
class Categoria extends Model
{
    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';

    public $timestamps = true;

    const CREATED_AT = 'criado_em_categoria';
    const UPDATE_AT = 'atualizado_em_categoria';

    protected $fillable = [
        'nome_categoria',
        'descricao_categoria'
    ];
}
