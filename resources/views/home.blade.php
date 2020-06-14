<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>SGIMP</h1>
                    </div>
                    <div class="card-body">
                        <h2>Ingresar al sistema como:</h2>
                        <div class="container">
                            <a href="{{route('paciente.login')}}" class="btn btn-info btn-lg btn-block">Paciente</a>
                            <a href="{{route('medico.login')}}" class="btn btn-outline-info btn-lg btn-block">Médico</a>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        SGIMP Copyright 2019
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>