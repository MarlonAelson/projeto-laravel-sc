@extends('adminlte::page')

@section('title', 'Cadastro de Usuário')

@section('content_header')
    <h1>Cadastro de Usuário</h1>
@stop

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            
        </div>
        <!-- /.card-header -->
        <!-- form start -->     
        <div class="card-body">
            <form class="form-horizontal" method="post" action="{{ route('usuario.store')}}">
            @csrf
                <small><strong>Os campos com o asterisco (*) são obrigatórios informar!</strong></small>
                    @include('usuario-formulario')
                </div>
                

                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                    <a href="{{ route('usuario.index') }}" class="btn btn-outline-primary">Listagem</a>
                </div>
            </form>
    </div>
        <!-- /.card-body -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop