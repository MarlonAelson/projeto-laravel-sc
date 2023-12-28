@extends('adminlte::page')

@section('title', 'Listagem de Usuarios')

@section('content_header')
    <h1>Listagem de Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('usuario.create') }}">Novo</a>
        </div>

        </div>
        <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan=3>Ações</th>
                </tr>
                @foreach($usuarios as $usuario)
                <tr>
                    <td scope="row">{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td><a href="{{ route('usuario.show',    $usuario->id) }}">Detalhes</a></td>
                    <td><a href="{{ route('usuario.edit',    $usuario->id) }}">Editar</a></td>
                    <td><a href="{{ route('usuario.destroy', $usuario->id) }}">Deletar</a></td>
                </tr>
                @endforeach
            </table>

        </div>
        <div class="card-footer">

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop