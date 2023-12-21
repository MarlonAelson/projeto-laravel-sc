@extends('adminlte::page')

@section('title', 'Listagem de Animais')

@section('content_header')
    <h1>Listagem de Animais</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('animal.create') }}">Novo</a>
        </div>

        </div>
        <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Raça</th>
                    <th scope="col" colspan=3>Ações</th>
                </tr>
                @foreach($animais as $animal)
                <tr>
                    <td scope="row">{{$animal->id}}</td>
                    <td>{{$animal->nome}}</td>
                    <td>{{$animal->raca}}</td>
                    <td><a href="{{ route('animal.show',    $animal->id) }}">Detalhes</a></td>
                    <td><a href="{{ route('animal.edit',    $animal->id) }}">Editar</a></td>
                    <td><a href="{{ route('animal.destroy', $animal->id) }}">Deletar</a></td>
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