<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;

class AseguradorasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function GuardarNuevo(){

        $nombre = $_POST['nombre_aseg'];
        $contacto = $_POST['nombre_contacto'];
        $fono = $_POST['fono'];
        $correo = $_POST['mail'];

        DB::table('sp_aseguradoras')->insert(
            [   'nombre_aseg' => $nombre,
                'nombre_contacto' => $contacto,
                'fono_contacto' => $fono,
                'correo_contacto' => $correo]
        );

        return Redirect::action('AseguradorasController@index');
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