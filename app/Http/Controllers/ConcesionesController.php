<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ConcesionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         $listado = DB::table('sp_ruta')
         ->join('sp_concesiones', 'sp_concesiones_id_conc','=','id_conc')
         ->get();

        return view('Concesiones.index', ['listado'=>$listado]);
    }

    public function nuevo()
	{
    	return view('Concesiones.nuevo');
    }

    public function mostrar()
	{

        $listado = DB::table('sp_concesiones')
            ->get();

    	return view('Concesiones.mostrar', ['listado'=>$listado]);
    }


    public function detalles()
    {
        return view('Concesiones.detalles');
    }
}