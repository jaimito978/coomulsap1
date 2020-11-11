<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dato;
use App\DatosPersonales;
use App\DatosPersonales2;
use App\GuardandoForm;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function antecedentes()
    {
        return view('antecedentes');
    }

    public function datos()
    {
        return view('datosPersonales');
    }

     
    public function evaluacion() {
        return view('evaluaciongerencia');
    }

    public function formularios() {
        
        $datos = DatosPersonales::all();
        $datos2 = datospersonales2::all();
        $antecedentes = GuardandoForm::all();
        return view('formularios',compact('datos','datos2','antecedentes'));
    }

}
