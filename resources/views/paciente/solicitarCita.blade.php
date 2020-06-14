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

                        <h2>Horarios disponibles para cita</h2>

                        <div class="container">
                            <label class="" for="NSS">Seleccionar fecha:</label>

                                <select name="fecha" id="fecha">
                                    <option value="1">Lunes 18-Mayo-2020</option>
                                </select>

                                <a href="" class="btn btn-secondary">Buscar</a>
                                <br><br>

                                <table class="table table-hover">
                                    <thead>
                                            <th>Médico</th>
                                            <th>Fecha</th>
                                            <th>Horario</th>
                                            <th></th>
                                    </thead>
                                    <tbody>
                                        <td>Dr. Victor González Torres</td>
                                        <td>Lunes - 18/05/2020</td>
                                        <td>07:00 - 08:00</td>
                                        <td><a href="" class="btn btn-danger">Solicitar Cita</a></td>
                                    </tbody>
                                </table>
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