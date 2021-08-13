<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Proyectoaapadrinado;
use App\Registro;
class PagesController extends Controller

{
    public function inicio(){
        return view('welcome');
    }

    public function listado(){
        $proyectoaapadrinados = App\Proyectoaapadrinado::all();
        return view('listado', compact('proyectoaapadrinados'));
    }

    public function busqueda(){
        return view ('busqueda');
    }

    public function registroCambios(){

        $registros = Registro::orderby('updated_at', 'desc')->get();        

        return view('registroCambios', compact('registros'));
    }

    public function egresados(){
        return view ('egresados');
    }

    public function ayuda(){
        return view ('ayuda');
    }

    public function contacto(){
        return view ('contacto');
    }

    public function fichaApadrinado(){
        return view('fichaApadrinado');
    }

    public function seleccion(){
        return view('seleccion');
    }
}
