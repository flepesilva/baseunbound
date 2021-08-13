@extends('plantilla')

@section('seccion')
<br/>

<div class="container my-4">

    <h1 class="display-4">Listado</h1><br>

    

    <h3>Selecciona el mes:  </h3>
    <select class="form-control form-control-lg" name="">
        <option>Enero 2019 </option>
        <option>Febrero 2019 </option>
    </select>
    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Child</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Padrino</th>
            <th scope="col">Tutor</th>
          </tr>
        </thead>
        <tbody>
          @foreach($proyectoaapadrinados as $proyectoaapadrinados)
          <tr>
          <th scope="row">{{$proyectoaapadrinados->id}}</th>
            <td>{{$proyectoaapadrinados->nombreApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apPaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apMaternoApadrinado}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection