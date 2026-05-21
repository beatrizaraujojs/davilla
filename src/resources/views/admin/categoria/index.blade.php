@extends('layout.admin')

@section('title', 'Categoria | Confeitaria dashboard')


@section('pg-titulo', 'Categoria teste')
@section('link-topo', 'Categoria')

@section('content')

<!--begin::App Content-->
<div class="app-content">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }} 
      </div>
      @endif

      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <strong>Atenção!</strong> Verifique os campos do formulário.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="card mb-4">
        <h3 class="card-title">Gerenciamento de Categorias</h3>




        <div class="card-header">

          <div class="card-tools">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalNovaCategoria">
              <i class="bi bi-plus-circle"></i> Nova Categoria</button>

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
                <th style="width: 200px">Ações</th>
              </tr>
            </thead>
            <tbody>
              @forelse($categorias as $linha)
              <tr class="align-middle">
                <td>{{ $linha->ordem_categoria }}</td>
                <td>{{ $linha->nome_categoria }}</td>
                <td>{{ $linha->descricao_categoria }}</td>
                <td>
                  @if($linha->status_categoria === 'ATIVO')
                  <span class="btn btn-success">Ativo</span>

                  @else
                  <span class="btn btn-danger">Inativo</span>



                  @endif
                </td>
                <td>

                  <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#modalEditarCategoria{{ $linha->id_categoria }}">
                    <i class="bi bi-pencil"></i>
                  </button>


                  @if ($linha->id_categoria === 'ATIVO')

                  
                  <form action="{{ route('admin.categoria.desativar', $linha->id_categoria) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">
                      <i class="bi bi-trash3"></i>
                    </button>

                  </form>

                  @else

                  <form action="{{ route('admin.categoria.ativar', $linha->id_categoria) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">
                      <i class="bi bi-trash3"></i>
                    </button>

                  </form>

                  
                  @endif




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


@include('admin.categoria.modal.criar')

@endsection