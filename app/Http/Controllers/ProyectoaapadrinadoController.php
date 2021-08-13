<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Familia;
use App\Proyectoaapadrinado;
use App\Integrantesfamilia;
use App\Cartaotro;
use App\Gastosfamiliar;
use App\Informacionpago;
use App\Registro;
use App\Tutor;
use App\Vivienda;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class ProyectoaapadrinadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->get('id');

        $proyectoaapadrinados = Proyectoaapadrinado::orderBy('id', 'DESC')

            ->id($id)
            ->paginate(15);


 
        return view('proyecto-A.index', compact('proyectoaapadrinados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectoaapadrinados = Proyectoaapadrinado::all();
        return view('proyecto-A.create', compact('proyectoaapadrinados'));
    }


    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            /*no sirve
            if($request->hasFile('perfil')){
                $file = $request->file('perfil');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
            }*/


            $proyectoaapadrinados = new Proyectoaapadrinado;
            $registroA = new Registro;
            $cartaotro = new Cartaotro;
            $familia = new Familia;
            $gastosfamiliar = new Gastosfamiliar;
            $informacionpago = new Informacionpago;
            $tutor = new Tutor;
            $vivienda  = new Vivienda;


            $proyectoaapadrinados ->fichafamiliaApadrinado = $request ->fichafamiliar;
            $proyectoaapadrinados ->id = $request ->id;
            $proyectoaapadrinados ->rutA = $request ->rutA;
            $proyectoaapadrinados ->nombreApadrinado = $request ->nombre;
            $proyectoaapadrinados ->apPaternoApadrinado = $request ->apellidoPaterno; 
            $proyectoaapadrinados ->apMaternoApadrinado = $request ->apellidoMaterno;
            $proyectoaapadrinados ->cerroA = $request ->cerroA;
            $proyectoaapadrinados ->sectorA = $request ->sectorA;
            $proyectoaapadrinados ->nivelEducacionalApadrinado = $request ->nivelEducacional;
            $proyectoaapadrinados ->discapacidadApadrinado = $request ->discapacidad;
            $proyectoaapadrinados ->telefono1 = $request->telefono1;
            $proyectoaapadrinados ->telefono2 = $request->telefono2;
            $proyectoaapadrinados ->telefono3 = $request->telefono3;
            $proyectoaapadrinados ->nacimientoApadrinado = $request ->fechaNacimientoA; 
            $proyectoaapadrinados ->institucion = $request ->institucionEducacional; 
            $proyectoaapadrinados ->nivelEducacionalApadrinado = $request ->nivelEducacional;
            $proyectoaapadrinados ->direccionA = $request ->direccion;
            $proyectoaapadrinados ->institucion = $request ->institucionEducacional;
            $proyectoaapadrinados ->egreso = $request ->egreso;
            $proyectoaapadrinados ->fotoperfil = $request->file('perfil')->store('public');

            $tutor ->childApadrinado = $request ->id;
            $tutor ->nombreTutor = $request ->nombretutor;
            $tutor ->apellidoPTutor = $request ->paternotutor;
            $tutor ->apellidoMTutor = $request ->maternotutor;
            $tutor ->telefonoTutor = $request ->telefonotutor;
            $tutor ->rutTutor = $request ->ruttutor;
            $tutor ->parentescoTutor = $request ->parentescotutor;
            $tutor ->cesfamTutor = $request ->cesfamtutor;
            $tutor ->otrosTutor = $request ->otrostutor;

            $gastosfamiliar->fichafamiliarGastos = $request ->fichafamiliar;
            $gastosfamiliar->alimentacion = $request ->alimentacion;
            $gastosfamiliar->arriendo = $request->arriendo;
            $gastosfamiliar->luz = $request ->luz;
            $gastosfamiliar->agua = $request ->agua;
            $gastosfamiliar->gas = $request ->gas;
            $gastosfamiliar->movilizacion = $request ->movilizacion;
            $gastosfamiliar->otro1 = $request ->otros1;
            $gastosfamiliar->otro2 = $request ->otros2;
            $gastosfamiliar->otro3 = $request ->otros3;
            $gastosfamiliar->otro4 = $request ->otros4;
            $gastosfamiliar->otro5 = $request ->otros5;

            $vivienda->childApadrinado = $request ->id;
            $vivienda->tipoVivienda = $request ->tipovivienda;
            $vivienda->tenencia = $request ->tenencia;
            $vivienda->nombreVivienda = $request ->nombrehogar;
            $vivienda->sector = $request ->sectorA;
            $vivienda->ciudad = $request ->ciudadA;
            $vivienda->descripcion = $request ->descripcionvivienda;

            $informacionpago->childPago = $request ->id;
            $informacionpago->nombrePago = $request ->nombrepago;
            $informacionpago->apellidoPPago = $request ->paternopago;
            $informacionpago->apellidoMPago = $request ->maternopago;
            $informacionpago->rutPago = $request ->rutpago;
            $informacionpago->numeroCuenta = $request ->numeropago;
            $informacionpago->banco = $request ->bancopago;
            $informacionpago->tipoCuenta = $request ->tipocuentapago;
            $informacionpago->formaPago = $request ->tipopago;
       
            $proyectoaapadrinados->save();
            $tutor->save();
            $gastosfamiliar->save();
            $vivienda->save();
            $informacionpago->save();

            $registroA ->childRegistro = $request->id;
            $registroA ->usuarioRegistro = Auth::user()->name;
            $registroA ->accion = ('Crear');
            $registroA ->save();
            return redirect()->route('proyecto-A.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyectoaapadrinados = App\Proyectoaapadrinado::find($id);
        return view('proyecto-A.show', compact('proyectoaapadrinados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectoaapadrinados = Proyectoaapadrinado::find($id);
        return view('proyecto-A.edit', compact('proyectoaapadrinados'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
            $proyectoaapadrinados = Proyectoaapadrinado::find($id);
    
        $proyectoaapadrinados ->id = $request ->id; 
        $proyectoaapadrinados ->fichafamiliaApadrinado = $request ->fichafamiliar;
        $proyectoaapadrinados ->nombreApadrinado = $request ->nombre; 
        $proyectoaapadrinados ->apPaternoApadrinado = $request ->apellidoPaterno; 
        $proyectoaapadrinados ->apMaternoApadrinado = $request ->apellidoMaterno; 
        $proyectoaapadrinados ->nacimientoApadrinado = $request ->fechaNacimiento; 
        $proyectoaapadrinados ->discapacidadApadrinado = $request ->discapacidad; 
        $proyectoaapadrinados ->telefono1 = $request ->telefono; 
        $proyectoaapadrinados ->institucion = $request ->institucionEducacional; 
        $proyectoaapadrinados ->nivelEducacionalApadrinado = $request ->nivelEducacional; 
        $proyectoaapadrinados->save();



        $registroA = new Registro;

        $registroA ->childRegistro = $request->id;
        $registroA ->usuarioRegistro = Auth::user()->name;
        $registroA ->accion = ('Editar');
        $registroA->save();


            return redirect()->route('proyecto-A.index');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $registroA = new Registro;
        $proyectoaapadrinados = App\Proyectoaapadrinado::find($id);
        dd($proyectoaapadrinados);
        $registroA ->childRegistro = $proyectoaapadrinados->id;
        $registroA ->usuarioRegistro = Auth::user()->name;
        $registroA ->accion = ('Eliminar');
        $registroA ->save();

        $proyectoaapadrinados->egreso = $request->egreso;
        $proyectoaapadrinados->razon  = $request->razonEgreso;

        $proyectoaapadrinados->delete();
        return redirect()->route('proyecto-A.index');
    }
}