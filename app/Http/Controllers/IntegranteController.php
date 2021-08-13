<?php

namespace App\Http\Controllers;

use App\Integrante;
use Illuminate\Http\Request;
use App\Vivienda;
use App\Proyectoaapadrinado;
use App\Gastosfamiliar;

class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function show(Integrante $integrante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function edit($fichafamiliaApadrinado)
    {
        $totalgastos = Gastosfamiliar::all();
        $gastosfamiliar = $totalgastos->where('fichafamiliarGastos', $fichafamiliaApadrinado)->first();


        $total = Integrante::all();
        $integrante = $total->where('fichafamiliaIntegrante', $fichafamiliaApadrinado);

        $ingresototal = 0;
        foreach ($integrante as $integrante) {
            $ingresototal = $integrante->ingresos + $ingresototal;
        }
    
        $total = Integrante::all();
        $integrante = $total->where('fichafamiliaIntegrante', $fichafamiliaApadrinado);

        $proyectoaapadrinados = Proyectoaapadrinado::where('fichafamiliaApadrinado', $fichafamiliaApadrinado)->first();
        
        return view('proyecto-A.integrantes-A.edit-integrantes', compact('integrante', 'proyectoaapadrinados', 'gastosfamiliar', 'ingresototal'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fichafamiliaIntegrante)
    {
        $total = Integrante::all();
        $integrante = $total->where('fichafamiliaIntegrante', $fichafamiliaIntegrante);
        $total=0;
        foreach($integrante as $integrante)
        {
            $total = $integrante->ingresos + $total;
        }

        switch ($request->boton) 
        {
            case 'integrantes':
            
                $integrantenew = new Integrante;
 
                $integrantenew ->fichafamiliaIntegrante = $fichafamiliaIntegrante;
                $integrantenew ->nombreCompleto         = $request ->nombreIntegrante;
                $integrantenew ->parentesco             = $request ->parentescoIntegrante;
                $integrantenew ->edad                   = $request ->edadIntegrante;
                $integrantenew ->nivelEducacional       = $request ->niveleducacionalIntegrante;
                $integrantenew ->ingresos               = $request ->ingresosIntegrante;
                $integrantenew ->ocupacion              = $request ->ocupacionIntegrante;
                $integrantenew->save();


    
            case 'gastos':

                $totalgastos = Gastosfamiliar::all();
                $gastosfamiliarbusqueda = $totalgastos->where('fichafamiliarGastos', $fichafamiliaIntegrante)->first();

                $gastosfamiliar = Gastosfamiliar::find($gastosfamiliarbusqueda->id);

                $gastosfamiliar->fichafamiliarGastos = $fichafamiliaIntegrante; 
                $gastosfamiliar ->alimentacion       = $request->alimentacionGasto;
                $gastosfamiliar ->arriendo           = $request->arriendoGasto;
                $gastosfamiliar ->luz                = $request->luzGasto;
                $gastosfamiliar ->agua               = $request->aguaGasto;
                $gastosfamiliar ->gas                = $request->gasGasto;
                $gastosfamiliar ->movilizacion       = $request->movilizacionGasto;
                $gastosfamiliar ->otro1              = $request->otros1Gasto;
                $gastosfamiliar ->otro2              = $request->otros2Gasto;
                $gastosfamiliar ->otro3              = $request->otros3Gasto;
                $gastosfamiliar ->otro4              = $request->otros4Gasto;
                $gastosfamiliar ->otro5              = $request->otros5Gasto;

                $gastosfamiliar ->egreso            = $gastosfamiliar->alimentacion + $gastosfamiliar->arriendo
                                                     + $gastosfamiliar->luz + $gastosfamiliar->agua + $gastosfamiliar->gas 
                                                     + $gastosfamiliar->movilizacion + $gastosfamiliar->otro1 
                                                     + $gastosfamiliar->otro2 + $gastosfamiliar->otro3 
                                                     + $gastosfamiliar->otro4 + $gastosfamiliar->otro5;
                            
                $gastosfamiliar ->ingreso = $total;


                $gastosfamiliar->save();


        }

        $total = Integrante::all();
        $integrante = $total->where('fichafamiliaIntegrante', $fichafamiliaIntegrante);
        $proyectoaapadrinados = Proyectoaapadrinado::where('fichafamiliaApadrinado', $fichafamiliaIntegrante)->first();

        return redirect()->route('integrantes-A.edit', [$fichafamiliaIntegrante]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $integrantesnew = Integrante::find($id);
        $fichafamiliaIntegrante = $integrantesnew->fichafamiliaIntegrante;

        $total = Integrante::all();
        $integrante = $total->where('fichafamiliaIntegrante', $fichafamiliaIntegrante);
        $proyectoaapadrinados = Proyectoaapadrinado::where('fichafamiliaApadrinado', $fichafamiliaIntegrante)->first();
        $integrantesnew->delete();

        return redirect()->route('integrantes-A.edit', [$fichafamiliaIntegrante]);
        //return view('proyecto-A.integrantes-A.edit-integrantes', compact('integrante', 'proyectoaapadrinados'));
    }
}
