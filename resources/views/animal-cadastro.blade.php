@extends('adminlte::page')

@section('title', 'Cadastro de Animal')

@section('content_header')
    <h1>Cadastro de Animal</h1>
@stop

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            
        </div>
        <!-- /.card-header -->
        <!-- form start -->     
        <div class="card-body">
            <form class="form-horizontal" method="post" action="{{ route('animal.store')}}">
            @csrf
                <small><strong>Os campos com o asterisco (*) são obrigatórios informar!</strong></small>
                    @include('animal-formulario')
                </div>
                

                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                    <a href="{{ route('animal.index') }}" class="btn btn-outline-primary">Listagem</a>
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