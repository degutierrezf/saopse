<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Redirect;
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

        $id_acc = $_POST['id_accidente'];
    	$asunto = $_POST['asunto'];
    	$texto = $_POST['mensaje'];
    	$fec_rec = $_POST['fecha'];
    	$ac_o_in = $_POST['tipo'];

    	if($fec_rec == ''){
    	    // Sin agenda, gestión realizada.
            $estado = 1;
        }else{
    	    // Para agendar, gestion por realizar.
    	    $estado = 2;
        }


    	DB::table('sp_gestiones')->insert(
            [   'asunto' => $asunto,
                'texto' => $texto,
                'fec_record' => $fec_rec,
                'ac_o_in' => $ac_o_in,
                'id_in_o_ac' => $id_acc,
                'estado' => $estado]
        );

    	return Redirect::action('AccidentesController@mostrar');

    }
}
