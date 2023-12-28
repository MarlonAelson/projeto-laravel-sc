@extends('adminlte::page')

@section('title', 'Detalhes de Usuários')

@section('content_header')
    <h1>Detalhes do Usuário: {{ $usuario->id }}</h1>
@stop

@section('content')
<div class="card">
            <div class="card-header">
                
                <div class="col-12">
                    <a class="btn btn-primary" href="{{ route('usuario.index')}}">Listagem</a>
                </div>                    
         
            </div>

            <div class="card-body">
                <label for="">Nome:</label>
                {{ $usuario->name }}
                <br>
                <label for="">Email:</label>
                {{ $usuario->email }}
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