<?php

namespace App\Http\Controllers;

use App\Estudios;
use Illuminate\Http\Request;
use App\Proyectoaapadrinado;

class EstudiosController extends Controller
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
     * @param  \App\Estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function show(Estudios $estudios)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function edit($childApadrinado)
    {

        $proyectoaapadrinados = Proyectoaapadrinado::find($childApadrinado);
        
        $total = Estudios::all();
        $estudios = $total->where('childApadrinado', $childApadrinado);

        //dd($estudios);

        return view('proyecto-A.estudios-A.edit-estudios', compact('proyectoaapadrinados', 'estudios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $filenameWithExt = $request->file('certificado')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request ->file('certificado')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('certificado')->storeAs('public/certificados', $fileNameToStore);

        $estudios = new Estudios;
        $estudios->childApadrinado = $id;
        $estudios->certificado = $fileNameToStore; 



        $proyectoaapadrinados                             = Proyectoaapadrinado::find($id);
        $proyectoaapadrinados->institucion                = $request->institucion;
        $proyectoaapadrinados->nivelEducacionalApadrinado = $request->nivelEducacionalApadrinado;
        $proyectoaapadrinados->certificado                = $fileNameToStore;

        $proyectoaapadrinados->save();
        $estudios->save();

        return redirect()->route('estudios-A.edit', [$proyectoaapadrinados->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudios  $estudios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudios $estudios)
    {
        //
    }
}
