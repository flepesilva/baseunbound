<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">


    <title>Base de datos Unbound Valparaiso</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="/">
       <img src="http://baseunbound.test/storage/unbound-logo.png" width="160px" height="64px">
        
      </a>
      <h5><p class="text-right">Estas identificado como: {{auth()->user()->name}}</p></h5>

    </nav>
    

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f59622;">
      <div class="container">
        <a class="navbar-brand" href="{{ route('listado')}}"><h4>Listado</h4></a>
        <a class="navbar-brand" href="{{ route('busqueda')}}"><h4>Busqueda</h4></a>
        <a class="navbar-brand" href="{{ route('registroCambios')}}"><h4>Registro Cambios</h4></a>
        <a class="navbar-brand" href="{{ route('egresados')}}"><h4>Egresados</h4></a>
        <a class="navbar-brand" href="{{ route('proyecto-A.index')}}"><h4>Apadrinados</h4></a>
        <a class="navbar-brand" href="{{ route('contacto')}}"><h4>Contacto</h4></a>
      </div>
    </nav>
</div>




   <div class="container" >
   @yield('seccion')
   
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
    
      $('#editRespuesta').on('show.bs.modal', function (event) 
      {

        var button = $(event.relatedTarget)
        var envio = button.data('myenvio')
        var fecha = button.data('myfecha') 
        var si    = button.data('mysi')

        var modal = $(this)
        modal.find('.modal-body #envioRespuesta').val(envio)
        modal.find('.modal-body #siRespuesta').val(si)

        modal.find('.modal-body #fechaRespuesta').val(fecha)
      })
    
    </script>



<script>
    
    $('#egresarApadrinado').on('show.bs.modal', function (event) 
    {

      var button = $(event.relatedTarget)
      var id = button.data('myid')


      var modal = $(this)

      modal.find('.modal-body #idApadrinado').val(id)
    })
  
  </script>

  </body>
</html>