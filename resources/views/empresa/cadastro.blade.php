@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Cadastro de Empresa</h4></div>
                <div class="panel-body">
                    <form method="POST" action="{{action('EmpresaController@salvar')}}">
                        {{ csrf_field() }}
                        <div class="form-group col-lg-12 {{ $errors->has('titulo') ? ' has-error' : '' }}" required autofocus>
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" maxlength="190" value="{{ old('titulo') }}" required>
                            @if ($errors->has('titulo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('titulo') }}</strong>
                                </span>
                            @endif
                        </div>
                         <div class="form-group col-lg-12 {{ $errors->has('endereco') ? ' has-error' : '' }}">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" maxlength="190" value="{{ old('endereco') }}" required>
                            @if ($errors->has('endereco'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6 {{ $errors->has('cep') ? ' has-error' : '' }}">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" id="cep" name="cep" maxlength="8" value="{{ old('cep') }}" required>
                            @if ($errors->has('cep'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cep') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6 {{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" maxlength="11" value="{{ old('telefone') }}" required>
                            @if ($errors->has('telefone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefone') }}</strong>
                                </span>
                            @endif
                        </div>
                         <div class="form-group col-sm-6 {{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" maxlength="190" value="{{ old('cidade') }}" required>
                            @if ($errors->has('cidade'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-sm-6 {{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" maxlength="190" value="{{ old('estado') }}" required>
                            @if ($errors->has('estado'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12 {{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" maxlength="190" value="{{ old('descricao') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                            @endif
                        </div>
                         <div class="form-group col-md-8 {{ $errors->has('categoria') ? ' has-error' : '' }}">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="categoria_id">
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('categoria'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('categoria_id') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


