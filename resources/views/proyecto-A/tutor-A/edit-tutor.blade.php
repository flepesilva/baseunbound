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

    <form action= "{{route('tutor-A.update', $proyectoaapadrinados->id)}}" method="POST">

        @csrf
        @method('PUT')
        
        <h2>Tutor de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
        
        <br>
        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre del tutor: </strong>
                    <input type="text" name="nombreTutor" value="{{$tutor->nombreTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido paterno del tutor: </strong>
                    <input type="text" name="apellidoPTutor" value="{{$tutor->apellidoPTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido materno del tutor: </strong>
                    <input type="text" name="apellidoMTutor" value="{{$tutor->apellidoMTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Rut del tutor: </strong>
                    <input type="text" name="rutTutor" value="{{$tutor->rutTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Parentesco del tutor: </strong>
                    <input type="text" name="parentescoTutor" value="{{$tutor->parentescoTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Cesfam del tutor: </strong>
                    <input type="text" name="cesfamTutor" value="{{$tutor->cesfamTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Otro Tutor : </strong>
                    <input type="text" name="otrosTutor" value="{{$tutor->otrosTutor}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Agregar</button>
        </div>

    </form>

</div>
@endsection