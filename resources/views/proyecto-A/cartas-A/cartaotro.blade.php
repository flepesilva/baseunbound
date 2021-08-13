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



    <nav aria-label="Page navigation example">
        
        <ul class="pagination justify-content-end">
          
            <li class="page-item">
                <a class="page-link" href="#">Todos</a>
            </li>

            <li class="page-item"><a class="page-link" href="#">2014</a></li>
            <li class="page-item"><a class="page-link" href="#">2015</a></li>
            <li class="page-item"><a class="page-link" href="#">2016</a></li>
            <li class="page-item"><a class="page-link" href="#">2017</a></li>
            <li class="page-item"><a class="page-link" href="#">2018</a></li>
            <li class="page-item"><a class="page-link" href="#">2019</a></li> 

        </ul>
      </nav>

    
    


    <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight"><h2>Cartas de {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}}: </h2></div>
        <div class="ml-auto p-2 bd-highlight"><h1 class="display-4">Año {{$añoactual}}</h1></div>
      </div>

    <form action= "{{route('cartaotro-A.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
                
        <br>
        
        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <strong>Carta de agradecimiento </strong>
                </div>
            </div>

            <div class="col-md-1"> 
                <div class="form-check">
                    <p class="text"> <strong>Si </strong> </p>
                    
                    {{Form::checkbox('siAgradecimiento', null, $cartaagradecimiento->si,[])}}

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Envio </strong> </p>
                    <input type="text" name="envioAgradecimiento" value="{{$cartaagradecimiento->envio}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Fecha </strong> </p>
                    <input type="date" name="fechaAgradecimiento" value="{{$cartaagradecimiento->fecha}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <br>
                    <strong>Carta de Invierno </strong>
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-check">
                    <p class="text"> <strong>Si </strong> </p>
                    
                    {{Form::checkbox('siInvierno', null, $cartainvierno->si,[])}}

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Envio </strong> </p>
                    <input type="text" name="envioInvierno" value="{{$cartainvierno->envio}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Fecha </strong> </p>
                    <input type="date" name="fechaInvierno" value="{{$cartainvierno->fecha}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <br>
                    <strong>Carta de Navidad </strong>
                </div>
            </div>

            <div class="col-md-1">
                    <div class="form-check">
                        <p class="text"> <strong>Si </strong> </p>
                        
                        {{Form::checkbox('siNavidad', null, $cartanavidad->si,[])}}
    
                    </div>
                </div>


            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Envio </strong> </p>
                    <input type="text" name="envioNavidad" value="{{$cartanavidad->envio}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <p class="text-center"> <strong>Fecha </strong> </p>
                    <input type="date" name="fechaNavidad" value="{{$cartanavidad->fecha}}" class="form-control" placeholder="Child del niño">
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-end">
            <button type="submit" name="boton" value="cartasfija" class="btn btn-success">Agregar</button>
        
        </div>
    </form>

<br>
<br>
<h2>Respuestas  </h2>
<br>


    <form action= "{{route('cartaotro-A.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
                
        <br>
        
        <div class="row">

            <div class="col-md-1">
                <div class="form-group">
                    <br>
                    <br>
                    <strong>Respuestas </strong>
                </div>
            </div>

            <div class="col-md-1">
                <div class="form-check">
                    <br>
                    <p class="text"> <strong>Si </strong> </p>
                    
                    {{Form::checkbox('siRespuesta', null, false,['class' => 'text-center'])}}

                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <p class="text-center"> <strong>Envio </strong> </p>
                    <input type="text" name="envioRespuesta" value="" class="form-control" placeholder="Child del niño">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <p class="text-center"> <strong>Fecha </strong> </p>
                    <input type="date" name="fechaRespuesta" value="" class="form-control" placeholder="Child del niño">
                </div>
            </div>
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->
<!-- TENEIS QUE CAMBIAR LOS FORMULARIOS POR FORMULARIOS BLADE CHOROOOOOOOOOOO -->

            <div class="col-md-1">
                <div class="form-check">
                   
                    <p class="text-center"> <strong>Requiere respuesta </strong> </p>

                    <p class="text-center">
                    {{Form::checkbox('requiereRespuesta', null, false,[''])}}
                    </p>

                </div>
            </div>


            <div class="col-md-2">
                <div class="form-check">
                   <br>
                    <p class="text-center"> <strong>Respondida </strong> </p>
                    
                    <p class="text-center">
                    {{Form::checkbox('respondida', null, false,[''])}}
                    </p>

                </div>
            </div>



            <div class="col-md-2">
                <div class="form-group">
                    <br>
                    <p class="text-center"> <strong>Fecha de respuesta </strong> </p>
                    <input type="date" name="respuestaFecha" value="" class="form-control" placeholder="Child del niño">
                </div>
            </div>

        </div>
        <br>
        <div class="d-flex justify-content-end">
                <button type="submit" name="boton" value="cartasrespuesta" class="btn btn-success">Agregar</button>
            
            </div>
        <hr>

    </form>

 


            
    



    
    <table id="datatable" class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Si</th>
                <th scope="col">Envio</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
        
          <tbody>
            @foreach($cartarespuesta as $cartarespuestas)
                <tr>
                    <th scope="row">{{$cartarespuestas->id}}</th>
                        <td>{{$cartarespuestas->si}}</td>
                        <td>{{$cartarespuestas->envio}}</td>
                        <td>{{$cartarespuestas->fecha}}</td>

                        <td>
                            <button class="btn btn-success" data-myenvio = "{{$cartarespuestas->envio}}" data-myfecha = "{{$cartarespuestas->fecha}}" data-mysi = "{{$cartarespuestas->si}}" data-toggle="modal" data-target="#editRespuesta">Editar</button>
                            <a href="" class="btn btn-danger"> Eliminar </a>
                          </form>
              
                          </td>
                </tr>    
            @endforeach
                
            </tbody>
    </table>



    <div class="modal fade bd-example-modal-xl" id="editRespuesta" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Respuesta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action= "{{route('cartarespuesta.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data" id="editForm">

                    @csrf
                    @method('PUT')  

                    <div class="modal-body">
                    
                        <br>
    
                        <div class="row">
                
                            <div class="col-md-1">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <strong>Respuestas </strong>
                                </div>
                            </div>
                
                            <div class="col-md-1">
                                <div class="form-check">
                                    <br>
                                    <p class="text"> <strong>Si </strong> </p>
                                    
                                    {{Form::checkbox('siRespuesta', null, false,['id    ' => 'siRespuesta'])}}
                
                                </div>
                            </div>
                
                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <p class="text-center"> <strong>Envio </strong> </p>
                                    <input type="text" name="envioRespuesta" id="envioRespuesta" class="form-control" placeholder="Child del niño">
                                </div>
                            </div>
                
                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <p class="text-center"> <strong>Fecha </strong> </p>
                                    <input type="date" name="fechaRespuesta" id="fechaRespuesta" value="" class="form-control" placeholder="Child del niño">
                                </div>
                            </div>
                
                            <div class="col-md-1">
                                <div class="form-check">
                                    
                                    <p class="text-center"> <strong>Requiere respuesta </strong> </p>
                
                                    <p class="text-center">
                                    {{Form::checkbox('requiereRespuesta', null, false,['id' => 'requiereRespuesta'])}}
                                    </p>
                
                                </div>
                            </div>
                
                            <div class="col-md-2">
                                <div class="form-check">
                                    <br>
                                    <p class="text-center"> <strong>Respondida </strong> </p>
                                    
                                    <p class="text-center">
                                    {{Form::checkbox('respondida', null, false,['id' => 'respondida'])}}
                                    </p>
                
                                </div>
                            </div>
                
                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <p class="text-center"> <strong>Fecha de respuesta </strong> </p>
                                    <input type="date" name="respuestaFecha" id="respuestaFecha" value="" class="form-control" placeholder="Child del niño">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" value="cambiosRespuesta">Guardar cambios</button>
                    </div>

                </form>
            </div>
        </div>
    </div>







    <br>
    <br>
    <h2>Regalos especiales  </h2>
    <br>

    



    <form action= "{{route('estudios-A.update', $proyectoaapadrinados->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
                    
            <br>
            
            <div class="row">
    
                <div class="col-md-1">
                    <div class="form-group">
                        <br>
                        <br>
                        <strong>Regalos especiales </strong>
                    </div>
                </div>
    
                <div class="col-md-1">
                    <div class="form-check">
                        <br>
                        <p class="text-center"> <strong>Si </strong> </p>
                        <input type="checkbox" name="nivelEducacionalApadrinado" value="{{$proyectoaapadrinados->nivelEducacionalApadrinado}}" class="form-control" placeholder="Child del niño">
                    </div>
                </div>
    
                <div class="col-md-2">
                    <div class="form-group">
                        <br>
                        <p class="text-center"> <strong>Monto </strong> </p>
                        <input type="text" name="nivelEducacionalApadrinado" value="{{$proyectoaapadrinados->nivelEducacionalApadrinado}}" class="form-control" placeholder="Child del niño">
                    </div>
                </div>
    
                <div class="col-md-2">
                    <div class="form-group">
                        <br>
                        <p class="text-center"> <strong>Fecha </strong> </p>
                        <input type="date" name="nivelEducacionalApadrinado" value="{{$proyectoaapadrinados->nivelEducacionalApadrinado}}" class="form-control" placeholder="Child del niño">
                    </div>
                </div>
    
    
            </div>
            <br>
            <div class="d-flex justify-content-end">
                    <button type="submit" name="boton" value="cartasespecial" class="btn btn-success">Agregar</button>
                
                </div>
            <hr>
    
        </form>


        <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Si</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Fecha</th>
            
                </tr>
                </thead>
            
                <tbody>
                @foreach($cartarespuesta as $cartarespuestas)
                    <tr>
                        <th scope="row">{{$cartarespuestas->id}}</th>
                        <td>{{$cartarespuestas->si}}</td>
                        <td>{{$cartarespuestas->monto}}</td>
                        <td>{{$cartarespuestas->fecha}}</td>
                    </tr>    
                @endforeach
                    
                </tbody>
        </table>


    
</div>

@endsection