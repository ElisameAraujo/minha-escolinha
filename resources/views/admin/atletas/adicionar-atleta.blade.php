@extends('layouts.admin.admin-layout')

@section('titulo', 'Adicionar Atleta')

@section('conteudo')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12">
                <h3>Novo Atleta</h3>
            </div>
        </div>
        <div class="col-12 col-md-12 d-flex float-left mt-2">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.atletas')}}">Atletas</a></li>
                    <li class="breadcrumb-item">Novo Atleta</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <p>Nesta página você poderá adicionar um novo atleta ao seu projeto.</p>
                <p>Fique atento que certos campos obrigatórios, então preenchê-los é um requisito antes de você adicionar um novo atleta.</p>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-4 upload-foto">
                            <!-- Enviar Foto do Atleta -->
                            <div class="preview">
                                <div class="text" id="text">Pré-visualização</div>
                                <img id="file-preview">
                            </div>
                            <label for="foto" id="foto-label" class="btn btn-outline-success"><i class="fa-solid fa-cloud-arrow-up"></i> Enviar Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <div class="col-md-8">
                            <div class="titulo-grupo">Informações Básicas</div>
                            <!-- Nome Completo -->
                            <div class="form-group">
                                <label for="nomeAtleta" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nomeAtleta" name="nomeAtleta" value="{{ old('nomeAtleta') }}">
                            </div>

                            <!-- Data de Nascimento -->
                            <div class="form-group">
                                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="{{ old('dataNascimento') }}">
                            </div>

                            <!-- Endereço -->
                            <div class="form-group">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ old('endereco') }}">
                            </div>

                            <!-- Documento -->
                            <div class="form-group">
                                <label for="documento" class="form-label">Documento de Identificação <i class="fa-solid fa-circle-question" data-bs-tooltip="tooltip" data-bs-placement="right" title="Digite aqui o número de um documento de identificação do atleta, como um RG ou CPF."></i></label>
                                <input type="text" class="form-control" id="documento" name="documento" value="{{ old('documento') }}">
                            </div>

                            <!-- Gênero -->
                            <div class="form-group">
                                <label for="genero" class="form-label">Gênero</label>
                                <select name="genero" id="genero" class="form-select">
                                    <option value="" disabled selected>-- Selecione uma Opção --</option>
                                    <option value="m">Masculino</option>
                                    <option value="f">Feminino</option>
                                </select>
                            </div>

                            <!-- Posição -->
                            <div class="form-group">
                                <label for="posicaoID" class="form-label">Posição <i class="fa-solid fa-circle-question" data-bs-tooltip="tooltip" data-bs-placement="right" title="Qual a posição atual que o atleta desempenha. Esse campo serve como uma referência na hora da filtragem de atletas de posições semelhantes."></i></label>
                                <select name="posicaoID" id="posicaoID" class="form-select">
                                    <option value="" disabled selected>-- Selecione uma Posição --</option>
                                </select>
                            </div>

                            <div class="titulo-grupo">Informações de Contato</div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            </div>

                            <!-- Telefone -->
                            <div class="form-group">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" placeholder="(xx) xxxxx-xxxx">
                            </div>

                            <div class="titulo-grupo">Extras</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Gerar Carterinha -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="carteirinha" id="carteirinha">
                                        <label class="form-check-label" for="carteirinha">
                                            Gerar Carteirinha <i class="fa-solid fa-circle-question" data-bs-tooltip="tooltip" data-bs-placement="top" title="Marcando essa opção, o próprio sistema irá gerar uma carterinha para o atleta ao salvá-lo. Se você pretende gerar posteriormente, basta deixar essa opção desmarcada."></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Adicionar Responsável -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="responsável" id="responsável">
                                        <label class="form-check-label" for="responsável">
                                            Adicionar Responsável <i class="fa-solid fa-circle-question" data-bs-tooltip="tooltip" data-bs-placement="top" title="Marcando essa opção, você será redirecionado para a página de 'Adicionar Responsável' onde poderá adicionar um responsável por este atleta. Se este atleta não necessita de um, basta deixar essa opção desmarcada."></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="btn btn-outline-success w-25" type="submit"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                            <button class="btn btn-outline-secondary w-25" type="reset"><i class="fa-solid fa-eraser"></i> Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('upload-foto-atleta')
    <script>
        let uploadButton = document.getElementById('foto')
        uploadButton.addEventListener('change', (e)=>{
            const currFiles = e.target.files
            const text = document.getElementById('text');

            if(document.getElementById('text')){
                text.remove();
            }

            if(currFiles.length > 0){
                let src = URL.createObjectURL(currFiles[0])
                let imagePreview = document.getElementById('file-preview')
                imagePreview.src = src
                imagePreview.style.display = 'block'
            }
        })
    </script>
@endpush