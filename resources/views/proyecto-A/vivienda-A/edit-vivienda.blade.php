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

    <form action= "{{route('vivienda-A.update', $proyectoaapadrinados->id)}}" method="POST">

        @csrf
        @method('PUT')
        
        <h2>Vivienda de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
        
        <br>
        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Tipo de vivienda: </strong>
                    <input type="text" name="tipoVivienda" value="{{$vivienda->tipoVivienda}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Tenencia: </strong>
                    <input type="text" name="tenencia" value="{{$vivienda->tenencia}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre del hogar: </strong>
                    <input type="text" name="nombreVivienda" value="{{$vivienda->nombreVivienda}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Descripcion de la vivienda: </strong>
                    <textarea class="form-control" name="descripcion" value="{{$vivienda->descripcion}}" rows="4"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Region: </strong>
                    <input type="text" name="region" value="{{$vivienda->region}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Ciudad: </strong>
                    <input type="text" name="ciudad" value="{{$vivienda->ciudad}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Sector: </strong>
                    <input type="text" name="sector" value="{{$vivienda->sector}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
            <div class="w-100"></div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>GAF: </strong>
                    <input type="text" name="gaf" value="{{$vivienda->gaf}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" name="boton" class="btn btn-success">Agregar</button>
        </div>

    </form>

</div>
@endsection