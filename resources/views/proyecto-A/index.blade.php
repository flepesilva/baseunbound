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
          {{Form::open(['route' => 'proyecto-A.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}

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



    <a class="btn btn-info" href="{{ route('familias.create')}}">Agregar Familia</a>
    <a class="btn btn-info" href="{{ route('proyecto-A.create')}}">Agregar niño</a>



    <br>
    <br>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Child</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Padrino</th>
          <th scope="col">Tutor</th>
          <th scope="col">Vista</th>
          <th scope="col">Editar</th>
          <th scope="col">Egresar</th>

        </tr>
      </thead>
      <tbody>
        @foreach($proyectoaapadrinados as $proyectoaapadrinado)
        <tr>
          <th scope="row">{{$proyectoaapadrinado->id}}</th>
            <td>{{$proyectoaapadrinado->nombreApadrinado}}</td>
            <td>{{$proyectoaapadrinado->apPaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinado->apMaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinado->apMaternoApadrinado}}</td>
            <td>{{$proyectoaapadrinado->apMaternoApadrinado}}</td>

            <td><a class="btn btn-info" href= "{{ route('proyecto-A.show', $proyectoaapadrinado->id) }}">Vista</a>
            <td><a class="btn btn-secondary" href= "{{ route('proyecto-A.edit', $proyectoaapadrinado->id) }}">Editar</a>


            <td>
              
              <button class="btn btn-danger" data-toggle="modal" data-target="#egresarApadrinado">Egresar</button>

            </td>


            
            </form>

            </td>
        </tr>    
        @endforeach
        
      </tbody>
      
    </table>

    <div class="modal fade bd-example-modal-xl" id="egresarApadrinado" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Egreso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
      
                <form action= "{{route('proyecto-A.destroy',  )}}" method="POST" enctype="multipart/form-data" id="editForm">
        
      
                    <div class="modal-body">
                    
                        <div class="row">
                
                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <p class="text"> <strong>Razon de egreso </strong> </p>
                                      <select class="custom-select" id="razonEgreso" name="razonEgreso">
                                        <option selected>Opciones</option>
                                        <option value="1">NOSE</option>
                                        <option value="2">NOSE</option>
                                        <option value="3">NOSE</option>
                                      </select>
                                </div>
                            </div>
      
                            <div class="col-md-12">
                              <div class="form-group">
      
                                <p class="text"> <strong>Descripcion</strong> </p>
                                <textarea class="form-control" id="descripcionEgresado" name="descripcionEgresado" rows="3"></textarea>
      
                              </div>
                            </div>  
                        </div>
                    </div>
      
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="egresadoSubmit" value="egresado">Guardar cambios</button>
                    </div>
      
                </form>
            </div>
        </div>
      </div>
     
</div>



@endsection
