@extends('layouts.principal')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Detalhes</h4></div>
                <div class="panel-body">
                    {{$empresa->titulo}}
                </div>
                <ul class='list-group'>
                    <li class="list-group-item"><strong>Telefone: {{$empresa->telefone}}</strong></li>
                    <li class="list-group-item"><strong>Endereço: {{$empresa->endereco}}</strong></li>
                    <li class="list-group-item"><strong>Cep: {{$empresa->cep}}</strong></li>
                    <li class="list-group-item"><strong>Cidade: {{$empresa->cidade}}</strong></li>
                    <li class="list-group-item"><strong>Estado: {{$empresa->estado}}</strong></li>
                    <li class="list-group-item"><strong>Descrição: {{$empresa->descricao}}</strong></li>
                    <li class="list-group-item"><strong>Categoria: {{$categoria->descricao}}</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection