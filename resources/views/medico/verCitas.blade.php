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
                        <h1 class="float-right"><small>MÉDICO</small></h1>
                    </div>
                    <div class="card-body">

                        <h2>Citas pendientes</h2><br>
                        @if($nombre ?? '')
                            <div class="alert alert-success">
                                <h3>Bienvenid@, {{$nombre}}.</h3>
                            </div>
                        @endif
                        <div class="container">
                            <label class="" for="NSS">Seleccionar fecha:</label>
                            <select name="fecha" id="fecha">
                                <option value="1">Lunes 18-Mayo-2020</option>
                            </select>
                            <a href="" class="btn btn-primary btn-sm">Buscar</a>
                            <br>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>NSS</th>
                                        <th>Paciente</th>
                                        <th>Fecha</th>
                                        <th>Horario</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($citas ?? '')
                                        @foreach($citas as $i)
                                            <tr>
                                                <td>{{$i->id_paciente}}</td>
                                                <td>{{$i->nombre}} {{$i->aPaterno}} {{$i->aMaterno}}</td>
                                                <td>{{$i->dia}}</td>
                                                <td>{{$i->hora}}:00 - {{($i->hora)+1}}:00</td>
                                                <td><a href="{{url('cita/delete/'.$i->id_cita)}}" class="btn btn-outline-danger btn-sm">Cancelar Cita</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan=4 alert alert-success>No tienes citas pendientes por el momento.</td></tr>
                                    @endif
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