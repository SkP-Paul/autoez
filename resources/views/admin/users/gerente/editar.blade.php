@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ $edicao ? 'Editar Gerente' : 'Criar Gerente' }}</div>

                <div class="card-body">
                    <form action="{{ $edicao ? route('saveEditGerente') : route('saveCreateGerente')}}" method="post" class="form-control form p-3">
                        @csrf
                        @if($gerente != null)
                            <input type="hidden" id="id" name="id" value="{{ optional($gerente)->id }}">
                        @endif

                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-3 px-2">
                                <label for="nome" class="form-label mb-0">Nome</label>
                                <input type="text" class="form-control form-text mt-1" placeholder="Nome" id="name" name="name" value="{{ optional($gerente)->name }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="email" class="form-label mb-0">Email</label>
                                <input type="text" class="form-control form-text mt-1" autocomplete="off" placeholder="E-mail" id="email" name="email" value="{{ optional($gerente)->email }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="cpf" class="form-label mb-0">CPF</label>
                                <input type="text" class="form-control form-text mt-1" id="cpf" placeholder="000.000.000-00" name="cpf" value="{{ optional($gerente)->cpf }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="telefone" class="form-label mb-0">Data de Nascimento</label>
                                <input type="date" class="form-control form-text mt-1 " id="data_nascimento"  name="data_nascimento" value="{{ optional($gerente)->data_nascimento }}" required>
                            </div>

                        </div>
                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-3 px-2">
                                <label for="cep" class="form-label mb-0">CEP</label>
                                <input type="text" class="form-control form-text mt-1" id="cep" placeholder="00000-000" maxlength="9" name="cep" value="{{ optional($gerente)->cep }}"  class="cep">
                            </div>
                            <div class="form-group col-md-6 px-2">
                                <label for="rua" class="form-label mb-0">Logradouro</label>
                                <input type="text" class="form-control form-text mt-1" id="rua" name="rua" placeholder="Rua"  value="{{ optional($gerente)->rua }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="numero" class="form-label mb-0">Número</label>
                                <input type="text" class="form-control form-text mt-1" id="numero" placeholder="Número"  name="numero" value="{{ optional($gerente)->numero }}" required>
                            </div>

                        </div>
                        <div class="d-flex col-lg-12 mb-2">
                            <div class="form-group col-md-3 px-2">
                                <label for="complemento" class="form-label mb-0">Complemento</label>
                                <input type="text" class="form-control form-text mt-1 " id="complemento" placeholder="Complemento" name="complemento" value="{{ optional($gerente)->complemento }}">
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="bairro" class="form-label mb-0">Bairro</label>
                                <input type="text" class="form-control form-text mt-1" id="bairro" name="bairro" placeholder="Bairro"  value="{{ optional($gerente)->bairro }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="cidade" class="form-label mb-0">Cidade</label>
                                <input type="text" class="form-control form-text mt-1" id="cidade" name="cidade" placeholder="Cidade"  value="{{ optional($gerente)->cidade }}" required>
                            </div>
                            <div class="form-group col-md-3 px-2">
                                <label for="estado" class="form-label mb-0">Estado</label>
                                <input type="text" class="form-control form-text mt-1" id="estado" name="estado" placeholder="Estado" value="{{ optional($gerente)->estado }}" required>
                            </div>

                        </div>

                        <div class="d-flex col-lg-12 mb-2">

                            <div class="form-group col-md-3 px-2">
                                <label for="telefone" class="form-label mb-0">Telefone</label>
                                <input type="text" class="form-control form-text mt-1 " id="telefone" name="telefone" placeholder="(00) 0 0000-0000" value="{{ optional($gerente)->telefone }}" required>
                            </div>

                            <div class="form-group col-md-3 px-2 position-relative">
                                <label for="password" class="form-label mb-0">Senha</label>
                                <input type="password" class="form-control form-text mt-1 " id="password" autocomplete="off" placeholder="Senha" name="password" {{ ($gerente == null) ? ' required' : '' }}>
                                <label for="password" class="showPassword"><i class="fas fa-eye"></i></label>
                            </div>

                            <div class="form-group col-md-3 px-2 position-relative">
                                <label for="c_password" class="form-label mb-0">Confirmar senha</label>
                                <input type="password" class="form-control form-text mt-1 " id="c_password" placeholder="Confirmar Senha" name="password_confirmation" {{ ($gerente == null) ? 'required' : '' }}>
                            </div>

                        </div>

                        <div class="form-group col-xs-12 px-2 py-3">
                            <button id="submit" type="submit" class="btn btn-primary">Salvar</button>
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
