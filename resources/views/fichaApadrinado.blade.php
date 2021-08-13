@extends('plantilla')

@section('seccion')



<div class="container my-4">


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f59622;">
        <div class="container">

          <a class="navbar-brand" href="{{ route('listado')}}"><h6>General</h6></a>
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

    <h1 class="display-4">Ingresar Apadrinado</h1><br>

    <h3> Ingresa el Child </h3>    
    <br>
    <input class="form-control" type="text" placeholder="Ingrese la palabra clave">

    <br>
    <button type="button" class="btn btn-primary btn-lg">Buscar</button>
    <br>
    <br>


    

    


</div>

@endsection