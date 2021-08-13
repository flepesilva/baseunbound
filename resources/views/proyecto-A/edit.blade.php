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

    <div class="container my-4">

            <h1 class="display-4">Edicion ficha apadrinado: </h1>
            <br>

        <form action= "{{route('proyecto-A.update', $proyectoaapadrinados->id)}}" method="POST">

            @csrf
            @method('PUT')
            
            <h2>General: </h2>
            
            <br>
            
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Child: </strong>
                        <input type="text" name="id" value="{{$proyectoaapadrinados->id}}" class="form-control" placeholder="Child del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 1: </strong>
                        <input type="text" name="telefono1" value="{{$proyectoaapadrinados->telefono1}}" class="form-control" placeholder="Telefono #1">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Ficha Familiar: </strong>
                        <input type="text" name="fichafamiliar" value="{{$proyectoaapadrinados->fichafamiliaApadrinado}}" class="form-control" placeholder="Ficha familiar">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 2: </strong>
                        <input type="text" class="form-control" name="telefono2" value="{{$proyectoaapadrinados->telefono2}}" placeholder="Telefono #2">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Rut: </strong>
                         <input type="text" name="rutA" class="form-control" value="{{$proyectoaapadrinados->rutA}}" placeholder="Rut del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 3: </strong>
                        <input type="text" name="telefono3" class="form-control" value="{{$proyectoaapadrinados->telefono3}}" placeholder="Telefono #3">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nombre: </strong>
                        <input type="text" class="form-control" name="nombre" value="{{$proyectoaapadrinados->nombreApadrinado}}" placeholder="Nombre del apadrinado">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Direccion: </strong>
                        <input type="text" class="form-control" name="direccion" value="{{$proyectoaapadrinados->direccionA}}" placeholder="Direccion del apadrinado">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Apellido paterno: </strong>
                        <input type="text" class="form-control" name="apellidoPaterno" value="{{$proyectoaapadrinados->apPaternoApadrinado}}" placeholder="Apellido paterno del niño">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Ciudad: </strong>
                        <input type="text" name="ciudadA" class="form-control" value="{{$proyectoaapadrinados->ciudadA}}" placeholder="Nivel educacional">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Apellido materno: </strong>
                        <input type="text" class="form-control" name="apellidoMaterno" value="{{$proyectoaapadrinados->apMaternoApadrinado}}" placeholder="Apellido materno del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Sector: </strong>
                        <input type="text" class="form-control" name="sectorA" value="{{$proyectoaapadrinados->sectorA}}" placeholder="Sector">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Fecha de nacimiento </strong>
                        <input type="text" class="form-control" name="fechaNacimientoA" value="{{$proyectoaapadrinados->nacimientoApadrinado}}" placeholder="Ingrese la fecha en formato AAAA-MM-DD">
                    </div>
                </div> 

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Cerro:  </strong>
                        <input type="text" class="form-control" name="cerroA" value="{{$proyectoaapadrinados->cerroA}}" placeholder="Cerro">
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Colegio: </strong>
                        <input type="text" name="institucionEducacional" class="form-control" value="{{$proyectoaapadrinados->institucion}}" placeholder="Colegio o institucion educancional">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nivel educacional: </strong>
                        <input type="text" name="nivelEducacional" class="form-control" placeholder="Nivel educacional">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Discapacidad: </strong>
                        <input type="text" name="discapacidad" class="form-control" placeholder="Discapacidad">                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Egreso: </strong>
                        <input type="text" name="egreso" class="form-control" value="{{$proyectoaapadrinados->egreso}}" placeholder="Egreso">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Foto de Perfil: </strong>
                        <input type="file" name="perfil">
                    </div>
                </div>


                
            </div>
            
 
 
                </div>
        
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                </div>

        </form>
            
    </div>
</div>
@endsection