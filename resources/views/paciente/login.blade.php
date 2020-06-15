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
                        <h1 class="float-left">SGIMP</h1>
                        <h1 class="float-right"><small>PACIENTE</small></h1>
                    </div>
                    <div class="card-body">
                        <h2>Iniciar sesión</h2>
                        @if($message ?? '')
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{{$message}}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="container">
                            <form method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="nss_paciente">NSS:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nss_paciente" id="nss_paciente" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2" for="pass_paciente">Contraseña:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="pass_paciente" id="pass_paciente" required>
                                    </div>
                                </div>
                                <input class ="btn btn-primary" type="submit" value="Iniciar sesión">
                                <a href="{{route('home')}}" class="btn btn-danger">Cancelar</a>
                            </form>
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