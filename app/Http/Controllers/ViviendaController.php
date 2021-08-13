<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Integrante;
use App\Vivienda;
use App\Proyectoaapadrinado;
use App\Gastosfamiliar;

class ViviendaController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($childApadrinado)
    {

        $totalvivienda = Vivienda::all();
        $vivienda = $totalvivienda->where('childApadrinado', $childApadrinado)->first();

        if ($vivienda == null)
        {
        $vivienda = New Vivienda;
        $vivienda->childApadrinado = $childApadrinado;
        $vivienda->save();
        }

        $totalvivienda = Vivienda::all();
        $vivienda = $totalvivienda->where('childApadrinado', $childApadrinado)->first();

        $proyectoaapadrinados = Proyectoaapadrinado::find($childApadrinado);


        return view('proyecto-A.vivienda-A.edit-vivienda', compact('vivienda', 'proyectoaapadrinados'));

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
        $totalvivienda = Vivienda::all();
        $vivienda = $totalvivienda->where('childApadrinado', $id)->first();

        $vivienda->tipoVivienda = $request->tipoVivienda;
        $vivienda->tenencia = $request->tenencia;
        $vivienda->nombreVivienda = $request->nombreVivienda;
        $vivienda->region = $request->region;
        $vivienda->sector = $request->sector;
        $vivienda->ciudad = $request->ciudad;
        $vivienda->gaf = $request->gaf;
        $vivienda->descripcion = $request->descripcion;

        $vivienda->childApadrinado = $id;

        $vivienda->save();

        return redirect()->route('vivienda-A.edit', [$id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
