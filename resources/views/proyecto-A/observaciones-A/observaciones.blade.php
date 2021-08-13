@extends('plantilla')

@section('seccion')

<div class="container my-4">


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f59622;">
        <div class="container">

                <a class="navbar-brand" href="{{ route('proyecto-A.edit', $proyectoaapadrinados->id)}}"><h6>General</h6></a>
                <a class="navbar-brand" href="{{ route('integrantes-A.edit', $proyectoaapadrinados->fichafamiliaApadrinado)}}"><h6>Descripcion Familiar</h6></a>
                <a class="navbar-brand" href="{{ route('vivienda-A.edit', $proyectoaapadrinados->id)}}"><h6>Vivienda</h6></a>
                <a class="navbar-brand" href="{{ route('estudios-A.edit', $proyectoaapadrinados->id)}}"><h6>Estudios</h6></a>
                <a class="navbar-brand" href="{{ route('cartaotro-A.edit', $proyectoaapadrinados->id)}}"><h6>Cartas</h6></a>
                <a class="navbar-brand" href="{{ route('observaciones-A.edit', $proyectoaapadrinados->id)}}"><h6>Observaciones</h6></a>
                <a class="navbar-brand" href="{{ route('tutor-A.edit', $proyectoaapadrinados->id)}}"><h6>Tutor</h6></a>
                <a class="navbar-brand" href="{{ route('informacionpago-A.edit', $proyectoaapadrinados->id)}}"><h6>Informacion de pago</h6></a>

        </div>
    </nav>
    <br>

    <form action= "{{route('observaciones-A.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        
        <h2>Agrega una observacion de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
        
        <br>
        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Fecha: </strong>
                <input type="date" name="fecha" value="" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Observacion: </strong>
                    <textarea class="form-control" name="observacion" rows="3" id="comment"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Observacion: </strong>
                <input type="file" name="archivo" value="" placeholder="Child del niño">
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" name="boton" class="btn btn-success">Agregar</button>
        </div>

    </form>
<br><br>

<h2>Observaciones de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Observacion</th>
            <th scope="col">Descargar</th>
        </tr>
    </thead>

    <tbody>
        @foreach($observacion as $observacion)
        <tr>
            <th scope="row">{{$observacion->id}}</th>
            <td>{{$observacion->fecha}}</td>        
            <td>{{$observacion->texto}}</td>
            <td>
                    <a href="/storage/observaciones/{{$observacion->archivo}}">

                        <button type="button" class="btn btn-success">
                            <i class="glyphicon glyphicon-download">
                                Descargar
                            </i>
                        </button>
                    </a>
            </td>
        </tr>    
        @endforeach
        
        </tbody>
</table>




    
</div>
@endsection