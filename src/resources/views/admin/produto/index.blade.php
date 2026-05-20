@extends('layout.admin')

@section('title', 'Categoria | Confeitaria dashboard')

 
@section('content')



  <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

            <div  class="card mb-4">
                
                  <div class="card-header">
                    <h3 class="card-title">Gerenciamento de Produtos</h3>
                    
                                <div class="card-tools">
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalNovoProduto">
                            <i class="bi bi-plus-circle"></i> Novo Produto</button>

                    </div>        
               
   </div>

                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 40px">Ordem</th>
                          <th>Nome</th>
                          <th>Descrição</th>
                          <th>Status</th>
                          <th>Tamanho</th>
                          <th>Valor</th>
                          <th style="width: 200px">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($produtos as $linha)
                        <tr class="align-middle">
                          <td>{{ $linha->ordem_produto }}</td>
                          <td>{{ $linha->nome_produto }}</td>
                          <td>{{ $linha->descricao_produto }}</td>
                          <td>
                            @if($linha->status_produto === 'ATIVO')
                            <span  class="btn btn-success">Ativo</span>

                            @else
                            <span class="btn btn-danger">Inativo</span>

                            @endif

                              <td>{{ $linha->tamanho_produto }}</td>
                                <td>{{ $linha->valor_produto }}</td>

                          </td>
                          <td>
                                 
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" 
                                data-bs-target="#modalEditarCategoria{{ $linha->id_categoria }}" >
                                       <i class="bi bi-pencil"></i>
                                </button>


                                <button type="button" class="btn btn-danger" >
                                    <i class="bi bi-trash3"></i>
                                </button>



                          </td>
                        </tr>
                        @empty

                        <tr>
                            <td>Nenhum categoria cadastrada</td>
                        </tr>

                        @endforelse
                     
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->

               
              
                
            </div>

            </div>
            </div>
            </div>


@endsection