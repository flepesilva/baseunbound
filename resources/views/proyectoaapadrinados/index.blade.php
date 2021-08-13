@extends('plantilla')

@section('seccion')


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h3>
          <br>
          Busqueda de Child
          <br>
          <br>
          {{Form::open(['route' => 'proyectoaapadrinados.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}

            <div class="form-group">

              {{Form::text('id', null, ['class' => 'form-control', 'placeholder' => 'Child'])}}

            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-default">
              </button>
            </div>
          {{Form::close() }}
        </h3>
      </div>
    </div>
  </div>
</div>


<div class="container my-4">


      <br>

    <a class="btn btn-info" href="{{ route('familias.create')}}">Agregar Familia</a>
    <a class="btn btn-info" href="{{ route('proyectoaapadrinados.create')}}">Agregar niño</a>

    <br>
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
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($proyectoaapadrinados as $proyectoaapadrinados)
        <tr>
          <th scope="row">{{$proyectoaapadrinados->id}}</th>
           <td>{{$proyectoaapadrinados->nombreApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apPaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apMaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apMaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinados->apMaternoApadrinado}}</td>

            <td><a class="btn btn-info" href= "{{ route('proyectoaapadrinados.edit', $proyectoaapadrinados->id) }}">Editar</a>

            <form action="{{ route('proyectoaapadrinados.destroy', $proyectoaapadrinados->id) }}" method="POST">

              @csrf
              @method('DELETE') 
              <button type="submit" class="btn-sm btn-danger mt-3">Eliminar</button>
            
            </form>

            </td>
        </tr>    
        @endforeach
        
      </tbody>
      
    </table>
     
</div>

@endsection