@extends('plantilla')

@section('seccion')


<div class="container my-4">

<h1 class="display-4">Vista de datos: {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}} {{$proyectoaapadrinados->apMaternoApadrinado}}</h1>
    <br>

<div class="container">
    <div class="row">
        <div class="col">

        <img src="{{ Storage::url($proyectoaapadrinados->fotoperfil) }}" class="img-thumbnail" width="375px" height="500px" sclass="rounded float-left" alt="">
        
    </div>
        <div class="col">
            <h6> Child: {{$proyectoaapadrinados->id}} </h6>
            <br>
            <h6> Ficha familiar: {{$proyectoaapadrinados->fichafamiliaApadrinado}}</h6>
            <br>
            <h6> Rut:  </h6>
            <br>
            <h6> Nombre: {{$proyectoaapadrinados->nombreApadrinado}}</h6>
            <br>
            <h6> Apellido paterno: {{$proyectoaapadrinados->apPaternoApadrinado}}</h6>
            <br>
            <h6>Apellido materno: {{$proyectoaapadrinados->apMaternoApadrinado}}</h6>
            <br>
            <h6> Fecha de nacimiento: {{$proyectoaapadrinados->nacimientoApadrinado}}</h6>
            <br>
            <h6> Institucion educacional: {{$proyectoaapadrinados->institucion}} </h6>
        </div>

        <div class="col">
            <h6> Que pah</h6>
        </div>
    </div>
</div>

@endsection