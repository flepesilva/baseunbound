@extends('plantilla')

@section('seccion')

    <div class="container my-4">

        <form action= "{{route('familias.store')}}" id="familias" method="POST">

            @csrf
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <strong>Ficha Familiar: </strong>
                        <input type="text" name="fichaFamiliar" class="form-control" placeholder="Ficha familiar del niño">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <strong>Proyecto: </strong>
                        <select class="custom-select" name="proyecto" form="familias">
                            <option selected>Selecciona el proyecto </option>
                            <option value="Proyecto A" >Proyecto A</option> 
                            <option value="Proyecto B" >Proyecto B</option>
                            <option value="Proyecto C" >Proyecto C</option>
                        </select>
                    </div> 
                </div>               

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection