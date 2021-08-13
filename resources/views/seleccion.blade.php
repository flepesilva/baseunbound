<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">




    <title>Base de datos Unbound Valparaiso</title>
  </head>
  <body>

    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        Fundacion Unbound Valparaiso
      </a>
    </nav>

    <p class="display-4 text-center">Selecciona el proyecto</p>
    <br>
    <br>
    <br>
    <div class="container text-center">  

      <a href="{{ route('proyecto-A.index')}}" class="btn btn-warning btn-lg">Proyecto A</a>
      <a href="#" class="btn btn-warning btn-lg">Proyecto B</a>
      <a href="#" class="btn btn-warning btn-lg">Proyecto Ancianos</a>
      <a href="#" class="btn btn-warning btn-lg">Proyecto PA</a>
      <a href="#" class="btn btn-warning btn-lg">Proyecto QTO-CB</a>
      <a href="#" class="btn btn-warning btn-lg">Proyecto Rural-Cordillera</a>
      <br>
      <br>
      <a href="#" class="btn btn-warning btn-lg">Base V </a>
    </div>

   <div class="container">
   @yield('seccion')
   
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>