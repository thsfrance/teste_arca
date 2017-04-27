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
                    <li class="list-group-item"><strong>Endereço: </strong>{{$empresa->endereco}}, {{$empresa->cidade}} - {{$empresa->estado}}, {{$empresa->cep}}</li>
                    <li class="list-group-item"><strong>Descrição: </strong>{{$empresa->descricao}}</li>
                    <li class="list-group-item">
                        <strong>Categorias: </strong>
                        @foreach($categorias as $categoria)
                            {{$categoria->descricao}},
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection