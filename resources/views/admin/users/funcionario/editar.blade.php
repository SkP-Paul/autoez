@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ isset($funcionario) ? 'Editar Funcionario' : 'Criar Funcionario' }}</div>
                <div class="card-body">
                    <form action="#" class="form-control form p-3">
                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-4 px-2">
                                <label for="nome" class="form-label mb-0">Nome</label>
                                <input type="text" class="form-control form-text mt-1" id="nome" name="nome" value="{{ optional($funcionario)->name }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="email" class="form-label mb-0">Email</label>
                                <input type="text" class="form-control form-text mt-1" id="email" name="email" value="{{ optional($funcionario)->email }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="cpf" class="form-label mb-0">CPF</label>
                                <input type="text" class="form-control form-text mt-1" id="cpf" name="cpf" value="{{ optional($funcionario)->cpf }}" required>
                            </div>

                        </div>
                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-4 px-2">
                                <label for="cep" class="form-label mb-0">CEP</label>
                                <input type="text" class="form-control form-text mt-1" id="cep" value="{{ optional($funcionario)->estado }}" name="cep" class="cep">
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="rua" class="form-label mb-0">Logradouro</label>
                                <input type="text" class="form-control form-text mt-1" id="rua" value="{{ optional($funcionario)->rua }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="numero" class="form-label mb-0">Número</label>
                                <input type="text" class="form-control form-text mt-1" id="numero" value="{{ optional($funcionario)->numero }}" required>
                            </div>

                        </div>
                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-4 px-2">
                                <label for="complemento" class="form-label mb-0">Complemento</label>
                                <input type="text" class="form-control form-text mt-1 " id="complemento" value="{{ optional($funcionario)->complemento }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="bairro" class="form-label mb-0">Bairro</label>
                                <input type="text" class="form-control form-text mt-1" id="bairro" value="{{ optional($funcionario)->bairro }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="cidade" class="form-label mb-0">Cidade</label>
                                <input type="text" class="form-control form-text mt-1" id="cidade" value="{{ optional($funcionario)->cidade }}" required>
                            </div>

                        </div>

                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-4 px-2">
                                <label for="estado" class="form-label mb-0">Estado</label>
                                <input type="text" class="form-control form-text mt-1" id="estado" value="{{ optional($funcionario)->estado }}" required>
                            </div>
                            <div class="form-group col-md-4 px-2">
                                <label for="telefone" class="form-label mb-0">Telefone</label>
                                <input type="text" class="form-control form-text mt-1 " id="telefone" value="{{ optional($funcionario)->telefone }}" required>
                            </div>
                        </div>

                        <div class="form-group col-xs-12 px-2 py-3">
                            <button id="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @include('admin.util.userScripts')
@endsection
