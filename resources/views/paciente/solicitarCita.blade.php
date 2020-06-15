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
                        @if($nombre ?? '')
                            <div class="alert alert-success">
                                <h3>Bienvenid@, {{$nombre}}.</h3>
                            </div>
                        @endif
                        <div class="container">
                                <label class="" for="fechaCita">Filtrar por fecha:</label>

                                <select name="fecha" id="fecha">
                                    <option value="">Ver todas</option>
                                    @if($fechas ?? '')
                                        @foreach($fechas as $f)
                                            <option value="">{{$f->dia}}</option>
                                            out $f;
                                        @endforeach
                                    @endif
                                    <option value="">*Lunes 18-Mayo-2020</option>
                                </select>

                                <a href="" class="btn btn-primary btn-sm">Buscar</a>
                                <br><br>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Médico</th>
                                            <th>Fecha</th>
                                            <th>Horario</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>*Dr. Victor González Torres</td>
                                            <td>Lunes - 18/05/2020</td>
                                            <td>07:00 - 08:00</td>
                                            <td><a href="" class="btn btn-outline-danger btn-sm">Solicitar Cita</a></td>
                                        </tr>
                                        @if($horarios ?? '')
                                            @foreach($horarios as $i)
                                                <tr>
                                                    <td>Dr(a). {{$i->medico->nombre}} {{$i->medico->aPaterno}} {{$i->medico->aMaterno}}</td>
                                                    <td>{{$i->dia}}</td>
                                                    <td>{{$i->hora}}:00 - {{($i->hora+1)}}:00</td>
                                                    <td><a href="{{url('cita/create/'.$i->id_horario.'/'.$nss)}}" class="btn btn-outline-danger btn-sm">Solicitar Cita</a></td>
                                                </tr>
                                            @endforeach
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