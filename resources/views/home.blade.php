@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10">
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
                    <form method='POST' action="{{url('/empresa/busca')}}">
                        {{ csrf_field() }}
                        <div class="input-group {{ $errors->has('search') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" placeholder="Busca..." name="search">
                            <span class="input-group-btn">
                              <input type="submit" class="btn btn-default" value="Buscar">
                            </span>
                        </div>
                        @if ($errors->has('search'))
                            <span class="help-block">
                                <strong>{{ $errors->first('search') }}</strong>
                            </span>
                        @endif
                    </form>
                    @if(session('empresas'))
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Endereço</th>
                                <th></th>
                            </tr>
                        </thead>
                            @foreach(session('empresas') as $empresa)
                                <tr>
                                    <td></td>
                                    <td>{{$empresa->titulo}}</td>
                                    <td>{{$empresa->endereco}}, {{$empresa->cidade}} - {{$empresa->estado}}, {{$empresa->cep}}</td>
                                    <td><a title='Detalhes' href='{{action('EmpresaController@detalhes',['codigo' => base64_encode($empresa->id)])}}' class='btn btn-primary'><span class="glyphicon glyphicon-new-window"></span></a></td>
                                </tr>
                            @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
