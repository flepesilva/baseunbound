@extends('plantilla')

@section('seccion')

<div class="container my-4">

    
    

    
    
<div class="container my-4">

    <h1 class="display-4">Descripcion familiar: {{$proyectoaapadrinados->nombreApadrinado}} {{$proyectoaapadrinados->apPaternoApadrinado}} {{$proyectoaapadrinados->apMaternoApadrinado}}</h1>
    <br>
        @switch($integrantes->fichafamiliarIntegrante)

            @case($proyectoaapadrinados->fichafamiliaApadrinado)
                
                <div class="container">

                    <table class="table table-striped">
                        <thead>

                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Parentesco</th>
                            <th scope="col">Nacimiento</th>
                            <th scope="col">Nivel educacional</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Ingresos</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($integrantes as $integrantes)
                
                                <tr>
                                <th scope="row">{{$integrantes->id  }}</th>
                                <td>{{$integrantes->nombreCompleto}}</td>
                                <td>{{$integrantes->parentesco}}</td>
                                <td>{{$integrantes->edad}}</td>
                                <td>{{$integrantes->nivelEducacional}}</td>
                                <td>{{$integrantes->apMaternoApadrinado}}</td>
                                <td>{{$integrantes->ocupacion}}</td>
                                <td>{{$integrantes->ingresos}}</td>
                                </tr>
                    
                            @endforeach
                        </tbody>
                    </table>
                </div>
        @endswitch

                <h3>Familiares: </h3>
            <form action= "{{route('proyecto-A.descripcion')}}" method="POST" enctype="multipart/form-data">
    
                @csrf
                <div class="row">

                    
                    <div class="col">
                        
                        <div class="form-group">
                            <strong>Child: </strong>
                        <input type="text" name="child" value="{{$proyectoaapadrinados->id}}" class="form-control" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col">
                        
                        <div class="form-group">
                            <strong>Ficha familiar:  </strong>
                            <input type="text" name="fichafamiliar" class="form-control" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
    
                    <div class="col">
                        <div class="form-group">
                            <strong>Parentesco: </strong>
                            <input type="text" name="parentesco" class="form-control" placeholder="Parentesco">
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group">
                            <strong>Nacimiento: </strong>
                            <input type="text" name="nacimiento" class="form-control" placeholder="Fecha de nacimiento">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <strong>Nivel educacional: </strong>
                            <input type="text" name="nivelEducacional" class="form-control" placeholder="Nivel educacional">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <strong>Ocupacion: </strong>
                            <input type="text" name="ocupacion" class="form-control" placeholder="Nombre del niño">
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <strong>Ingresos: </strong>
                            <input type="text" name="ingresos" class="form-control" placeholder="Nombre del niño">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="d-flex" >
                    
                            <div class="mr-auto p-2">
                                
                            </div>
        
                            <div class="p-2">
                                <button type="submit" class="btn btn-success" name="enviar" value="enviar">Enviar</button>
                            </div>

                            <div class="p-2">
                                <button type="submit" class="btn btn-primary" name="action" value="siguiente">Siguiente</button>
                            </div>

                            <div class="p-2">
                                <button type="submit" class="btn btn-danger" name="action" value="terminar">Terminar</button>
                            </div>

        
                        </div>
                    </div>
    
                </div>
            </form>
        </div>
    </div>

@endsection