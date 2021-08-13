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

    <form action= "{{route('informacionpago-A.update', $proyectoaapadrinados->id)}}" method="POST">

        @csrf
        @method('PUT')
        
        <h2>Informacion de pago para: {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2>
        
        <br>


        
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nombre pago: </strong>
                    <input type="text" name="nombrePago" value="{{$informacionpago->nombrePago}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido P: </strong>
                    <input type="text" name="apellidoPPago" value="{{$informacionpago->apellidoPPago}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Apellido M: </strong>
                    <input type="text" name="apellidoMPago" value="{{$informacionpago->apellidoMPago}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Rut: </strong>
                    <input type="text" name="rutPago" value="{{$informacionpago->rutPago}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Nº de cuenta: </strong>
                    <input type="text" name="numeroCuenta" value="{{$informacionpago->numeroCuenta}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Banco: </strong>
                    <input type="text" name="banco" value="{{$informacionpago->banco}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Tipo de cuenta: </strong>
                    <input type="text" name="tipoCuenta" value="{{$informacionpago->tipoCuenta}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Forma de pago: </strong>
                    <input type="text" name="formaPago" value="{{$informacionpago->formaPago}}" class="form-control" placeholder="Nombre del tutor">
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Agregar</button>
        </div>

    </form>

</div>
@endsection