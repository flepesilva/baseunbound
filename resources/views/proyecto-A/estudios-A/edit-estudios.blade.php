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

    <form action= "{{route('estudios-A.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        
        <h2>Estudios de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
        
        <br>
        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nivel educacional: </strong>
                <input type="text" name="nivelEducacionalApadrinado" value="{{$proyectoaapadrinados->nivelEducacionalApadrinado}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Institucion educacional: </strong>
                <input type="text" name="institucion" value="{{$proyectoaapadrinados->institucion}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Certificado de alumno regular: </strong>
                <input type="file" name="certificado" value="{{$proyectoaapadrinados->certificados}}" placeholder="Child del niño">
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" name="boton" class="btn btn-success">Agregar</button>
        </div>

    </form>
<br><br>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del archivo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descargar</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($estudios as $estudios)
            <tr>
                <th scope="row">{{$estudios->id}}</th>
                <td>{{$estudios->certificado}}</td>
                <td>{{$estudios->created_at}}</td>        
                <td>
                        <a href="/storage/certificados/{{$proyectoaapadrinados->certificado}}">

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