<?php

namespace App\Http\Controllers;

use App\Cartaotro;
use App\Proyectoaapadrinado;
use Illuminate\Http\Request;
use App\Cartaagradecimiento;
use App\Cartainvierno;
use App\Cartaregaloespecial;
use App\Cartanavidad;
use App\Cartarespuesta;
use Illuminate\Support\Carbon;

class CartaotroController extends Controller
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
     * @param  \App\Cartaotro  $cartaotro
     * @return \Illuminate\Http\Response
     */
    public function show(Cartaotro $cartaotro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartaotro  $cartaotro
     * @return \Illuminate\Http\Response
     */
    public function edit($childApadrinado)
    {

        $proyectoaapadrinados = Proyectoaapadrinado::find($childApadrinado);
        
        $now = Carbon::now();
        $añoactual = $now->format('Y');

        //-----------------------CARTAS-------------------------------

        $total = Cartaotro::all();
        $cartas = $total->where('childCartas', $childApadrinado)->first();


        if($cartas ==null)
        {
            $cartas = new Cartaotro;
            $cartas->childCartas = $childApadrinado;
            $cartas->save();
        }

        $total = Cartaotro::all();
        $cartas = $total->where('childCartas', $childApadrinado)->first();


        //---------------CARTAS AGRADECIMIENTO------------------------------------


        $cartaagradecimiento = Cartaagradecimiento::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();
        
        if ($cartaagradecimiento == null)
        {
        $cartaagradecimiento = New Cartaagradecimiento;
        $cartaagradecimiento->childCartas = $cartas->id;
        $cartaagradecimiento->fecha = Carbon::now();
        $cartaagradecimiento->save();
        }

        $cartaagradecimiento = Cartaagradecimiento::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();





        //------------------------CARTAS INVIERNO-------------------------------------------

        $cartainvierno = Cartainvierno::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();

        if ($cartainvierno == null)
        {
        $cartainvierno = New Cartainvierno;
        $cartainvierno->childCartas = $cartas->id;
        $cartainvierno->fecha = Carbon::now();
        $cartainvierno->save();
        }

        $cartainvierno = Cartainvierno::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();

        //-----------------------------CARTAS NAVIDAD----------------------------------

        $cartanavidad = Cartanavidad::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();


        if($cartanavidad == null)
        {
            $cartanavidad = New Cartanavidad;
            $cartanavidad->childCartas = $cartas->id;
            $cartanavidad->fecha = Carbon::now();
            $cartanavidad->save();
        }

        $cartanavidad = Cartanavidad::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();

        //-----------------------------------CARTAS REGALO ESPECIAL----------------------------------------



        $cartaregaloespecial = Cartaregaloespecial::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual);




        //--------------------------------CARTAS RESPUESTA--------------------------------------

 
        $cartarespuesta = collect(Cartarespuesta::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->get());

        //$cartarespuesta = Cartarespuesta::all();
        //$cartarespuestaloco = $cartarespuesta->where('childCartas', $cartas->id);

        //$cartarespuestaxd = $cartarespuestaloco->where('fecha', $añoactual);

        //dd($cartarespuesta);
   

        
 
        


        return view('proyecto-A.cartas-A.cartaotro', compact('proyectoaapadrinados', 'cartas', 'cartarespuesta', 'cartaregaloespecial', 'cartanavidad', 'cartainvierno', 'cartaagradecimiento', 'añoactual'));

    }


    public function update(Request $request, $childApadrinado)
    {


        $now = Carbon::now();
        $añoactual = $now->format('Y');
        
        $total = Cartaotro::all();
        $cartas = $total->where('childCartas', $childApadrinado)->first();

        if($cartas ==null)
        {
            $cartas = new Cartaotro;
            $cartas->childCartas = $childApadrinado;
            $cartas->save();
        }

        $total = Cartaotro::all();
        $cartas = $total->where('childCartas', $childApadrinado)->first();

        switch ($request->boton)
        {
            case 'cartasfija':
            
                $cartaagradecimiento = Cartaagradecimiento::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();
                $cartaagradecimiento->si = $request->siAgradecimiento;
                $cartaagradecimiento->envio = $request->envioAgradecimiento; 
                $cartaagradecimiento->fecha = $request->fechaAgradecimiento;
                $cartaagradecimiento->save();


                $cartainvierno = Cartainvierno::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();
                $cartainvierno->si = $request->siInvierno;
                $cartainvierno->envio = $request->envioInvierno;
                $cartainvierno->fecha = $request->fechaInvierno;
                $cartainvierno->save();


                $cartanavidad = Cartanavidad::where('childCartas', $cartas->id)->whereYear('fecha', '=', $añoactual)->first();
                $cartanavidad->si = $request->siNavidad;
                $cartanavidad->envio = $request->envioNavidad;
                $cartanavidad->fecha = $request->fechaNavidad;
                $cartanavidad->save();

                return redirect()->route('cartaotro-A.edit', [$childApadrinado]);

            case 'cartasrespuesta':

                $cartarespuestanew = new Cartarespuesta;

                $cartarespuestanew->childCartas    = $cartas->id;
                $cartarespuestanew->si             = $request->siRespuesta;
                $cartarespuestanew->envio          = $request->envioRespuesta;
                $cartarespuestanew->fecha          = $request->fechaRespuesta;
                $cartarespuestanew->fechaRespuesta = $request->respuestaFecha;
                $cartarespuestanew->respondida     = $request->respondida;
                $cartarespuestanew->reqrespuesta   = $request->requiereRespuesta;

                $cartarespuestanew->save();

                return redirect()->route('cartaotro-A.edit', [$childApadrinado]);



        }




        






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartaotro  $cartaotro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartaotro $cartaotro)
    {
        //
    }
}
