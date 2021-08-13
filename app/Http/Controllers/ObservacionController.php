<?php

namespace App\Http\Controllers;

use App\Observacion;
use App\Proyectoaapadrinado;
use Illuminate\Http\Request;

class ObservacionController extends Controller
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
        //
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
     * @param  \App\Observacion  $observacion
     * @return \Illuminate\Http\Response
     */
    public function show(Observacion $observacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Observacion  $observacion
     * @return \Illuminate\Http\Response
     */
    public function edit($childApadrinado)
    {

        $proyectoaapadrinados = Proyectoaapadrinado::find($childApadrinado);
        
        $total = Observacion::all();
        $observacion = $total->where('childObservacion', $childApadrinado);

        //dd($estudios);

        return view('proyecto-A.observaciones-A.observaciones', compact('proyectoaapadrinados', 'observacion'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Observacion  $observacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $childApadrinado)
    {
        $filenameWithExt = $request->file('archivo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request ->file('archivo')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('archivo')->storeAs('public/observaciones', $fileNameToStore);

        $observacion = new Observacion;
        $observacion->childObservacion = $childApadrinado;
        $observacion->fecha            = $request->fecha;
        $observacion->texto            = $request->observacion;
        $observacion->archivo          = $fileNameToStore;

        $proyectoaapadrinados          = Proyectoaapadrinado::find($childApadrinado);

        $proyectoaapadrinados->save();
        $observacion->save();

        return redirect()->route('observaciones-A.edit', [$proyectoaapadrinados->id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Observacion  $observacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observacion $observacion)
    {
        //
    }
}
