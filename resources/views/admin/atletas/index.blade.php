@extends('layouts.admin.admin-layout')

@section('titulo', 'Atletas')

@section('conteudo')
    <div class="page-heading">
        <h3>Atletas</h3>
    </div>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <p>Nesta página você poderá gerenciar todos os atletas que estão cadastrados no seu projeto. Você também
                    pode organizar os atletas de acordo com as suas necessidades, além de usar o botão <em>"+ Adicionar Novo Atleta"</em> abaixo para adicionar um novo atleta.</p>
                <a class="btn btn-outline-success" href="{{route('admin.atletas.adicionar-atleta')}}"><i class="fa-solid fa-plus"></i> Adicionar Novo Atleta</a>
                <hr>
                <p>Utilize os filtros abaixo para encontrar um grupo de atletas, ou caixa de pesquisa para encontrar um atleta em específico.</p>
                <div class="row">
                    <form method="GET">
                        
                        <!-- Caixa de Pesquisa [início] -->
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="search" class="form-control" name="pesquisar" placeholder="Pesquisar por um atleta...">
                                <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            @if(isset($_GET['pesquisar'])) 
                                <p>Você pesquisou por: <strong>{{$_GET['pesquisar']}}</strong></p>
                            @endif
                        </div>
                        <!-- Caixa de Pesquisa [fim] -->
                        
                        <!-- Filtragem e Ordenação [início] -->
                        <div class="row">
                            
                            <!-- Filtros [início] -->
                            <div class="col-md-6">
                                <strong>Filtrar por:</strong><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="categoria">Categoria</label><br>
                                        <div class="form-group mb-3">
                                            <select name="categoria" id="categoria" class="form-select select2">
                                                <option value="">-- Selecione uma Categoria --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="genero">Gênero</label><br>
                                        <div class="form-group mb-3">
                                            <select name="genero" id="genero" class="form-select">
                                                <option value="">-- Selecione um Gênero --</option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Feminino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="ano">Ano de Nascimento</label><br>
                                        <div class="form-group mb-3">
                                            <select name="ano" id="ano" class="form-select select2">
                                                <option value="">-- Selecione um Ano --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="posicao">Posição</label><br>
                                        <div class="form-group mb-3">
                                            <select name="posicao" id="posicao" class="form-select select2">
                                                <option value="">-- Selecione uma Posição --</option>
                                            </select>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                            <!-- Filtros [fim] -->
                            
                            <!-- Ordenação [início] -->
                            <div class="col-md-6">
                                <strong>Ordernar por:</strong><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label" for="ordernarPor">Tipo</label><br>
                                        <select name="ordernarPor" id="ordernarPor" class="form-select">
                                            @if (isset($_GET["ordernarPor"]))
                                                <option value="atletaID" {{ $_GET['ordernarPor'] == 'atletaID' ? 'selected' : '' }}>ID</option>
                                                <option value="nomeAtleta" {{ $_GET['ordernarPor'] == 'nomeAtleta' ? 'selected' : '' }}>Nome</option>
                                                <option value="dataNascimento" {{ $_GET['ordernarPor'] == 'dataNascimento' ? 'selected' : '' }}>Data de Nascimento</option>
                                                <option value="matricula" {{ $_GET['ordernarPor'] == 'matricula' ? 'selected' : '' }}>Matrícula</option>
                                                <option value="categoriaID" {{ $_GET['ordernarPor'] == 'categoriaID' ? 'selected' : '' }}>Categoria</option>
                                            @else
                                                <option value="atletaID">ID</option>
                                                <option value="nomeAtleta">Nome</option>
                                                <option value="dataNascimento">Data de Nascimento</option>
                                                <option value="matricula">Matrícula</option>
                                                <option value="categoriaID">Categoria</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="direcao">Direção</label><br>
                                        <div class="form-group mb-3">
                                            <select name="direcao" id="direcao" class="form-select">
                                                @if (isset($_GET['direcao']))
                                                <option value="asc" {{ $_GET['direcao'] == 'asc' ? 'selected' : '' }}>Crescente</option>
                                                <option value="desc" {{ $_GET['direcao'] == 'desc' ? 'selected' : '' }}>Decrescente</option>
                                            @else
                                                <option value="asc">Crescente</option>
                                                <option value="desc" selected>Decrescente</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Ordenação [fim] -->
                            
                        </div>
                        <!-- Filtragem e Ordenação [fim] -->
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-success">Aplicar</button>
                            <a href="{{route('admin.atletas')}}"><button type="button" class="btn btn-outline-secondary">Limpar</button></a>
                        </div>
                    </form>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Carterinha</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>15/08/1992</td>
                            <td>{{rand(10000000000, 99999999999)}}</td>
                            <td>Sub-15</td>
                            <td><i class="fa-solid fa-circle-check text-success" data-bs-tooltip="tooltip" data-bs-placement="top" title="Gerada"></i></td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-outline-danger btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Remover Atleta"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>15/08/1992</td>
                            <td>{{rand(10000000000, 99999999999)}}</td>
                            <td>Sub-15</td>
                            <td><i class="fa-solid fa-circle-check text-success" data-bs-tooltip="tooltip" data-bs-placement="top" title="Gerada"></i></td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-outline-danger btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Remover Atleta"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>15/08/1992</td>
                            <td>{{rand(10000000000, 99999999999)}}</td>
                            <td>Sub-15</td>
                            <td><i class="fa-solid fa-circle-xmark text-danger" data-bs-tooltip="tooltip" data-bs-placement="top" title="Não Gerada"></i></td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-outline-primary btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Gerar Carterinha"><i class="fa-solid fa-id-card"></i></a>
                                    <a href="#" class="btn btn-outline-danger btn-sm" data-bs-tooltip="tooltip" data-bs-placement="top" title="Remover Atleta"><i class="fa-regular fa-trash-can"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
