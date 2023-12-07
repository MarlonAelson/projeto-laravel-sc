<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="card-title">Listagem de Animais</h3>
                </div>
                <div class="row">
                    <div class="col-3">
                        <a class="btn btn-secondary" href="{{ route('animal.create') }}">Novo</a>
                    </div>
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
                        <td><a href="{{ route('animal.show', $animal->id) }}">Detalhes</a></td>
                        <td><a href="{{ route('animal.edit', $animal->id) }}">Editar</a></td>
                        <td><a href="{{ route('animal.destroy', $animal->id) }}">Deletar</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                Todos os direitos reservados!
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>