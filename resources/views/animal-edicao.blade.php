@extends('adminlte::page')

@section('title', 'Edição de Animais')

@section('content_header')
    <h1>Edição do Animal: {{$animal->id}}</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
           
        </div>
    <!-- /.card-header -->
    <!-- form start -->
        <form class="form-horizontal" method="post" action="{{ route('animal.update', $animal->id) }}">
        @method('PUT')
        @csrf    
        <div class="card-body">
            <small><strong>Os campos com o asterisco (*) são obrigatórios informar!</strong></small>
                @include('animal-formulario')
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <a href="{{ route('animal.index') }}" class="btn btn-outline-primary">Listagem</a>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop