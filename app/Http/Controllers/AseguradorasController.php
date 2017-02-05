<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AseguradorasController extends Controller
{
    public function index()
    {
         $listado = DB::table('sp_aseguradoras')
            ->get();

        return view('Aseguradoras.index', ['listado'=>$listado]);
    }

    public function nuevo()
	{
    	return view('Aseguradoras.nuevo');
    }

    public function mostrar()
	{

        $listado = DB::table('sp_aseguradoras')
            ->get();

    	return view('Aseguradoras.mostrar', ['listado'=>$listado]);
    }


    public function detalles()
    {
        return view('Aseguradoras.detalles');
    }
}