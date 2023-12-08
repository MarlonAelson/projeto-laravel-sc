<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edição do Animal: {{$animal->id}}</h3>
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
                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Salvar</button>
                    <a href="{{ route('animal.index') }}" class="btn btn-outline-primary"><i class="fas fa-list-ol"></i> Ir P/ Listagem</a>
                </div>
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>