@extends('plantilla')

@section('seccion')
    
<div class="container my-4">

    <h1 class="display-4">Registro de cambios</h1><br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID de cambio</th>
            <th scope="col">Niño modificado</th>
            <th scope="col">Usuario modificador</th>
            <th scope="col">Accion</th>
            <th scope="col">Hora del cambio</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registros)
          <tr>
          <th scope="row">{{$registros->id}}</th>
            <td>{{$registros->childRegistro}}</td>
            <td>{{$registros->usuarioRegistro}}</td>
            <td>{{$registros->accion}}</td>
            <td>{{$registros->updated_at}}</td>
          </tr>
          @endforeach
        </tbody>
    </table>

@endsection