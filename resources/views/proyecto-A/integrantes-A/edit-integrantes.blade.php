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
 
    <h1 class="display-4">Descripcion familiar: </h1>
    <br>

    <h2>Integrantes del grupo familiar: </h2>
    
    <br>

    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre completo</th>
        <th scope="col">Parentesco</th>
        <th scope="col">Edad</th>
        <th scope="col">Nivel educacional</th>
        <th scope="col">Ocupacion</th>
        <th scope="col">Ingresos</th>
        <th scope="col">Eliminar</th>

      </tr>
    </thead>

    <tbody>
        @foreach($integrante as $integrante)
        <tr>
          <th scope="row">{{$integrante->id}}</th>
            <td>{{$integrante->nombreCompleto}}</td>
            <td>{{$integrante->parentesco}}</td>
            <td>{{$integrante->edad}}</td>
            <td>{{$integrante->nivelEducacional}}</td>
            <td>{{$integrante->ocupacion}}</td>
            <td>{{$integrante->ingresos}}</td>


            <td><form action="{{ route('integrantes-A.destroy', $integrante->id) }}" method="POST">

              @csrf
              @method('DELETE') 
              <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>

            </td>
        </tr>    
        @endforeach
        
      </tbody>
</table>
<br>
<hr>
<br>
<div class="container my-4">

       


  <form action= "{{route('integrantes-A.update', $proyectoaapadrinados->fichafamiliaApadrinado)}}" method="POST" enctype="multipart/form-data">

      @csrf
      @method('PUT')

      <h2>Agregar familiar: </h2>
      
      <br>
      
      <div class="row">

        <div class="col-md-2">
          <div class="form-group">
            <strong>Nombre completo: </strong>
            <input type="text" name="nombreIntegrante" class="form-control" placeholder="Nombre completo">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <strong>Parentesco: </strong>
            <input type="text" name="parentescoIntegrante" class="form-control" placeholder="Parentesco">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <strong>Edad: </strong>
            <input type="text" name="edadIntegrante" class="form-control" placeholder="Edad del integrante">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <strong>Nivel educacional: </strong>
            <input type="text" name="niveleducacionalIntegrante" class="form-control" placeholder="Nivel educacional">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <strong>Ocupacion: </strong>
            <input type="text" name="ocupacionIntegrante" class="form-control" placeholder="Ocupacion">
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <strong>Ingresos: </strong>
            <input type="text" name="ingresosIntegrante" class="form-control" placeholder="Ingresos">
          </div>
        </div>

        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        

        <div class="col-md-2">
          <button type="submit" name="boton" value="integrantes" class="btn btn-success">Agregar</button>
        </div>

      </div>
      <br>
      <hr>
      <br>
      <h2>Situacion economica familiar: </h2>

        <form action= "{{route('integrantes-A.update', $proyectoaapadrinados->fichafamiliaApadrinado)}}" method="POST" enctype="multipart/form-data">

          @csrf
          @method('PUT')
  
          
          <br>
          
          <div class="row">
    
            <div class="col-md-6">
              <div class="form-group">
                <strong>Alimentacion: </strong>
                <input type="text" name="alimentacionGasto" class="form-control" value="{{$gastosfamiliar->agua}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Gas: </strong>
                <input type="text" name="gasGasto" class="form-control" value="{{$gastosfamiliar->gas}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Arriendo: </strong>
                <input type="text" name="arriendoGasto" class="form-control" value="{{$gastosfamiliar->arriendo}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <strong>Luz: </strong>
                  <input type="text" name="luzGasto" class="form-control" value="{{$gastosfamiliar->luz}}" placeholder="Nombre completo">
                </div>
              </div>

            <div class="col-md-6">
                <div class="form-group">
                  <strong>Movilizacion: </strong>
                  <input type="text" name="movilizacionGasto" class="form-control" value="{{$gastosfamiliar->movilizacion}}" placeholder="Nombre completo">
                </div>
              </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Otros: </strong>
                <input type="text" name="otros1Gasto" class="form-control" value="{{$gastosfamiliar->otro1}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Agua: </strong>
                <input type="text" name="aguaGasto" class="form-control" value="{{$gastosfamiliar->agua}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Otros: </strong>
                <input type="text" name="otros2Gasto" class="form-control" value="{{$gastosfamiliar->otro2}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Otros: </strong>
                <input type="text" name="otros3Gasto" class="form-control" value="{{$gastosfamiliar->otro3}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Otros: </strong>
                <input type="text" name="otros4Gasto" class="form-control" value="{{$gastosfamiliar->otro4}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <strong>Otros: </strong>
                <input type="text" name="otros5Gasto" class="form-control" value="{{$gastosfamiliar->otro5}}" placeholder="Nombre completo">
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                </div>
              </div>

            <div class="col-md-6">
              <div class="form-group">

              </div>
            </div>

            <div class="col-md-2">
            </div>

            <div class="col-md-2">
            </div>
                
            <div class="col-md-2">
              <button type="submit" name="boton" value="gastos" class="btn btn-success">Agregar</button>
            </div>

          </div>
        </form>
        
        <br>
        <div class="col-md-4">
          <table class="table table-bordered">
              <tbody>
                  <tr>
                    <th><h4>Ingresos:  </h4></th>
                      <td><h4>{{$ingresototal}}</h4></td>

                  </tr>
                  <tr>
                    <th><h4>Egresos: </h4></th>
                      <td><h4>{{$gastosfamiliar->egreso}}</h4></td>
                  </tr>
              </tbody>
          </table>
        </div>

<hr>
</div>
@endsection