@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="panel-heading"><h4>Faça sua busca</h4></div>

                <div class="panel-body">
                    <form method='POST'>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Busca...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Buscar</button>
                            </span>
                        </div>
                    </form>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Endereço</th>
                                <th></th>
                            </tr>
                        </thead>
                        @if(!empty($empresas))
                            @foreach($empresas as $empresa)
                                <tr>
                                    <td></td>
                                    <td>{{$empresa->titulo}}</td>
                                    <td>{{$empresa->endereco}}</td>
                                    <td><a title='Detalhes' href='{{action('EmpresaController@detalhes',['codigo' => base64_encode($empresa->id)])}}' class='btn btn-primary'><span class="glyphicon glyphicon-new-window"></span></a></td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
