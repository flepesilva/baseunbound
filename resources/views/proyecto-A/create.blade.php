@extends('plantilla')

@section('seccion')

<div class="container my-4">

    <h1 class="display-4">Ficha apadrinado: </h1>
    <br>

    

    <div class="container my-4">

       


        <form action= "{{route('proyecto-A.store')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <h2>General: </h2>
            
            <br>
            
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Child: </strong>
                        <input type="text" name="id" class="form-control" placeholder="Child del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 1: </strong>
                        <input type="text" name="telefono1" class="form-control" placeholder="Telefono #1">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Ficha Familiar: </strong>
                        <input type="text" name="fichafamiliar" class="form-control" placeholder="Ficha familiar">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 2: </strong>
                        <input type="text" class="form-control" name="telefono2" placeholder="Telefono #2">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Rut: </strong>
                         <input type="text" name="rutA" class="form-control" placeholder="Rut del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Telefono 3: </strong>
                        <input type="text" name="telefono3" class="form-control" placeholder="Telefono #3">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nombre: </strong>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del apadrinado">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Direccion: </strong>
                        <input type="text" class="form-control" name="direccion" placeholder="Direccion del apadrinado">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Apellido paterno: </strong>
                        <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido paterno del niño">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Ciudad: </strong>
                        <input type="text" name="ciudadA" class="form-control" placeholder="Nivel educacional">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Apellido materno: </strong>
                        <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido materno del niño">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Sector: </strong>
                        <input type="text" class="form-control" name="sectorA" placeholder="Sector">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Fecha de nacimiento </strong>
                        <input type="text" class="form-control" name="fechaNacimientoA" placeholder="Ingrese la fecha en formato AAAA-MM-DD">
                    </div>
                </div> 

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Cerro:  </strong>
                        <input type="text" class="form-control" name="cerroA" placeholder="Cerro">
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Colegio: </strong>
                        <input type="text" name="institucionEducacional" class="form-control" placeholder="Colegio o institucion educancional">
                    </div>
                </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <strong>Egreso: </strong>
                            <input type="text" name="egreso" class="form-control" placeholder="Egreso">
                        </div>
                    </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nivel educacional: </strong>
                        <input type="text" name="nivelEducacional" class="form-control" placeholder="Nivel educacional">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Discapacidad: </strong>
                        <input type="text" name="discapacidad" class="form-control" placeholder="Discapacidad">                        
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Egreso: </strong>
                        <input type="text" name="egreso" class="form-control" placeholder="Egreso">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Foto de Perfil: </strong>
                        <input type="file" name="perfil">
                    </div>
                </div>
            </div>
            
            
            <br>
            <hr>
            <br>
            <h2>Situacion economica: </h2>
            
            <br>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Alimentacion: </strong>
                        <input type="text" name="alimentacion" class="form-control" placeholder="Alimentacion familiar">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Arriendo: </strong>
                        <input type="text" name="arriendo" class="form-control" placeholder="Arriendo de la vivienda (en caso contrario coloque 0)">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Luz: </strong>
                        <input type="text" name="luz" class="form-control" placeholder="Cuota de luz mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Agua: </strong>
                        <input type="text" name="agua" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Gas: </strong>
                        <input type="text" name="gas" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Movilizacion: </strong>
                        <input type="text" name="movilizacion" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Otros: </strong>
                        <input type="text" name="otros1" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Otros: </strong>
                        <input type="text" name="otros2" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Otros: </strong>
                        <input type="text" name="otros3" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Otros: </strong>
                        <input type="text" name="otros4" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Otros: </strong>
                        <input type="text" name="otros5" class="form-control" placeholder="Cuota de agua mensual">
                    </div>
                </div>

            </div>
            <br>
            <hr>
            <br>

            <h2>Vivienda: </h2>
            <br>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Tipo de vivienda: </strong>
                        <input type="text" name="tipovivienda" class="form-control" placeholder="Alimentacion familiar">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Tenencia: </strong>
                        <input type="text" name="tenencia" class="form-control" placeholder="Alimentacion familiar">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nombre del hogar: </strong>
                        <input type="text" name="nombrehogar" class="form-control" placeholder="Alimentacion familiar">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Descripcion de la vivienda: </strong>
                        <textarea class="form-control" name="descripcionvivienda" rows="3" id="comment"></textarea>
                    </div>
                </div>
            </div>

                <br>
                <hr>
                <br>

                <h2>Tutor: </h2>
                <br>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Nombre: </strong>
                            <input type="text" name="nombretutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Apellido paterno: </strong>
                            <input type="text" name="paternotutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Apellido materno: </strong>
                            <input type="text" name="maternotutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Rut: </strong>
                            <input type="text" name="ruttutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Parentesco: </strong>
                            <input type="text" name="parentescotutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Telefono tutor: </strong>
                            <input type="text" name="telefonotutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Cesfam: </strong>
                            <input type="text" name="cesfamtutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Otros: </strong>
                            <input type="text" name="otrostutor" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>
                </div>

                <br>
                <hr>
                <br>

                <h2>Informacion de pago: </h2>
                <br>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Nombre encargado: </strong>
                            <input type="text" name="nombrepago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Apellido paterno encargado: </strong>
                            <input type="text" name="paternopago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <strong>Apellido materno encargado: </strong>
                                <input type="text" name="maternopago" class="form-control" placeholder="Alimentacion familiar">
                            </div>
                        </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Rut: </strong>
                            <input type="text" name="rutpago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Nº Cuenta: </strong>
                            <input type="text" name="numeropago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Banco: </strong>
                            <input type="text" name="bancopago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tipo de cuenta: </strong>
                            <input type="text" name="tipocuentapago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Forma de pago: </strong>
                            <input type="text" name="tipopago" class="form-control" placeholder="Alimentacion familiar">
                        </div>
                    </div>
 
                </div>
        
                <br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                </div>

        </form>

    </div>

</div>
@endsection