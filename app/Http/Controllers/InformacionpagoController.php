<?php

namespace App\Http\Controllers;
use App\Proyectoaapadrinado;
use App\Informacionpago;

use Illuminate\Http\Request;

class InformacionpagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function edit($id)
    {
        $proyectoaapadrinados = Proyectoaapadrinado::find($id);


        $total = Informacionpago::all();
        $informacionpago = $total->where('childPago', $id)->first();


        return view('proyecto-A.pagos-A.edit-informacionpago', compact('informacionpago', 'proyectoaapadrinados'));
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

        $total = Informacionpago::all();
        $informacionpago = $total->where('childPago', $id)->first();

        $informacionpago->nombrePago    = $request->nombrePago;
        $informacionpago->apellidoPPago = $request->apellidoPPago;
        $informacionpago->apellidoMPago = $request->apellidoMPago;
        $informacionpago->rutPago       = $request->rutPago;
        $informacionpago->numeroCuenta  = $request->numeroCuenta;
        $informacionpago->banco         = $request->banco;
        $informacionpago->tipoCuenta    = $request->tipoCuenta;
        $informacionpago->formaPago     = $request->formaPago;

        $informacionpago->save();

        return redirect()->route('informacionpago-A.edit', [$id]);


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
