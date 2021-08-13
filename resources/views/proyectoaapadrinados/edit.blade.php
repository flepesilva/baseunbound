@extends('plantilla')

@section('seccion')

<div class="container my-4">


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f59622;">
        <div class="container">

            <a class="navbar-brand" href="{{ route('proyectoaapadrinados.index')}}"><h6>General</h6></a>
            <a class="navbar-brand" href="{{ route('busqueda')}}"><h6>Descripcion Familiar</h6></a>
            <a class="navbar-brand" href="{{ route('registroCambios')}}"><h6>Vivienda</h6></a>
            <a class="navbar-brand" href="{{ route('egresados')}}"><h6>Estudios</h6></a>
            <a class="navbar-brand" href="{{ route('fichaApadrinado')}}"><h6>Cartas y otros</h6></a>
            <a class="navbar-brand" href="{{ route('contacto')}}"><h6>Observaciones</h6></a>
            <a class="navbar-brand" href="{{ route('contacto')}}"><h6>Tutor</h6></a>
            <a class="navbar-brand" href="{{ route('contacto')}}"><h6>Informacion de pago</h6></a>
            <a class="navbar-brand" href="{{ route('contacto')}}"><h6>Otros</h6></a>

        </div>
    </nav>
    <br>

    <div class="container my-4">

        <form action= "{{route('proyectoaapadrinados.update', $proyectoaapadrinado->id )}}" method="POST">

            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Ficha Familiar: </strong>
                        <input type="text" name="fichaFamiliar" value="{{ $proyectoaapadrinado->fichafamiliaApadrinado }}" id="fichaFamiliar" class="form-control" placeholder="Ficha familiar del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Child: </strong>
                        <input type="text" name="id" value="{{$proyectoaapadrinado->id}}" id="id" class="form-control" placeholder="Child del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre: </strong>
                        <input type="text" class="form-control" name="nombre" value="{{$proyectoaapadrinado->nombreApadrinado}}" id="nombre" placeholder="Nombre del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Apellido Paterno: </strong>
                        <input type="text" class="form-control" name="apellidoPaterno" value="{{$proyectoaapadrinado->apPaternoApadrinado}}" id="apellidoPaterno" placeholder="Apellido paterno del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Apellido Materno: </strong>
                        <input type="text" class="form-control" name="apellidoMaterno" value="{{$proyectoaapadrinado->apMaternoApadrinado}}" id="apellidoMaterno" placeholder="Apellido materno del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Fecha de nacimiento: </strong>
                        <input type="text" class="form-control" name="fechaNacimiento" value="{{$proyectoaapadrinado->nacimientoApadrinado}}" id="fechaNacimiento" placeholder="Ingrese en formato AAAA-MM-DD">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Discapacidad: </strong>
                        <input type="text" class="form-control" name="discapacidad" value="{{$proyectoaapadrinado->dispacidadApadrinado}}" id="discapacidad" placeholder="Discapacidad del niño">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Telefono: </strong>
                        <input type="text" class="form-control" name="telefono" value="{{$proyectoaapadrinado->telefonoApadrinado}}" id="telefono" placeholder="Telefono de contacto">
                    </div>
                </div>   
                
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Institucion educacional: </strong>
                        <input type="text" class="form-control" name="institucionEducacional" value="{{$proyectoaapadrinado->institucion}}" id="institucionEducacional" placeholder="Institucion a la cual pertenece">
                    </div>
                </div> 

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nivel Educacional: </strong>
                        <input type="text" class="form-control" name="nivelEducacional" value="{{$proyectoaapadrinado->nivelEducacionalApadrinado}}" id="nivelEducacional" placeholder="Nivel educacional del niño">
                    </div>
                </div> 

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection