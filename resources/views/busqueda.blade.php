@extends('plantilla')

@section('seccion')

<br>
<div class="container my-4">

    <h1 class="display-4">Busqueda</h1><br>

    <h3>Selecciona un proyecto: </h3>
    <select class="form-control form-control-lg">
        <option>Proyecto A</option>
        <option>Proyecto B </option>
    </select>
    <br>

    <h4>Filtros: </h4>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Child</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Ficha</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Padrino</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Tutor</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Apadrinado</label>
    </div>

    <br>
    <br>

    <input class="form-control" type="text" placeholder="Ingrese la palabra clave">

    <br>
    <button type="button" class="btn btn-primary btn-lg">Buscar</button>
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
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Jorge</td>
            <td>Hola</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jorge</td>
            <td>Hola</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Jorge</td>
            <td>Hola</td>
          </tr>
        </tbody>
      </table>

</div>

@endsection