@extends('layouts.admin.admin-layout')

@section('titulo', 'Categorias de Atletas')

@section('conteudo')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12">
                <h3>Categorias de Atletas</h3>
            </div>
        </div>
        <div class="col-12 col-md-12 d-flex float-left mt-2">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.atletas')}}">Atletas</a></li>
                    <li class="breadcrumb-item">Categorias de Atleta</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i> <strong>Atenção!</strong> Remover uma categoria interfere diretamente na disponibilidade em diversas áreas do Painel de Administração. <strong>Só remova uma categoria se for extremamente necessário</strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <p>Nesta página você pode gerenciar quais as categorias estão disponíveis no seu projeto, sejam elas para o masculino ou feminino.</p>
                <a href="#" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Adicionar Categoria</a>

                <hr>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome da Categoria</th>
                            <th scope="col">Classificação</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <th scope="row">{{$categoria->categoriaAtletaID}}</th>
                                <td>{{$categoria->categoriaNome}}</td>
                                <td>{{$categoria->categoriaDenominacao}}</td>
                                <td>{{genero($categoria->genero)}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Remover Atleta"><i class="fa-regular fa-trash-can"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categorias->onEachSide(2)->withQueryString()->links()}}
            </div>
        </div>
    </div>
@endsection