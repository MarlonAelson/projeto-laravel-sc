<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12">
                        Detalhes do Animal: {{ $animal->id }}
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary" href="{{ route('animal.index')}}">Listagem</a>
                    </div>                    
                </div>
            </div>

            <div class="card-body">
                <label for="">Nome:</label>
                {{ $animal->nome }}
                <br>
                <label for="">Raça:</label>
                {{ $animal->raca }}
            </div>

            <div class="card-footer">
                
            </div>
        </div>  

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>