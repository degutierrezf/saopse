<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class GestionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   	public function index()
    {
        return view('gestiones.index');
    }

    public function Nuevo()
	{
    	$id = $_POST['id_incidente'];

    	return view('gestiones.nuevo',['id'=>$id]);
    }

    public function GuardarNuevo(){

    	$id = $_POST['id_incidente'];
    	$tipo = $_POST['tipo_gestion'];
    	$desc = $_POST['d_gestion'];
    	$fecha = date("Y-m-d H:m:s");

    	DB::table('sp_gestiones_i')->insert(
            [   'fecha' => $fecha,
                'tipo_gestion' => $tipo,
                'gestion' => $desc,
                'sp_incidentes_id_incidentes' => $id]
        );

        return view('Incidentes.Index');

    }
}
