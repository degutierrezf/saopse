<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AutosController extends Controller
{
   	public function index()
    {
        return view('Autos.index');
    }

    public function nuevo()
	{

		$id_inc = $_POST['id_incidente'];

		$as = DB::table('sp_aseguradoras')
            ->get();

    	return view('Autos.nuevo', ['id'=>$id_inc, 'as'=>$as]);
    }

       	public function GuardarNuevo()
    {

    	$id = $_POST['id_incidente'];
    	$marca = $_POST['marca'];
    	$modelo = $_POST['modelo'];
    	$placa = $_POST['pp1'].'*'.$_POST['pp2'];
    	$propietario = $_POST['propietario'];
    	$rut_prop = $_POST['rut'];
    	$direccion = $_POST['direccion'];
    	$comuna = $_POST['comuna'];
    	$fono = $_POST['fono'];
    	$celular = $_POST['celular'];
    	$correo = $_POST['correo'];
    	$num_poliza = $_POST['poliza'];
    	$danno_v = $_POST['r1'];
    	$aseguradora = $_POST['aseguradora'];
    	$danno_d = $_POST['d_dannos'];


    	DB::table('sp_veh_inc')->insert(
            [   'marca' => $marca,
                'modelo' => $modelo,
                'placa' => $placa,
                'propietario' => $propietario, 
                'rut_prop' => $rut_prop,
                'direccion' => $direccion,
                'comuna' => $comuna,
                'fono' => $fono,
                'celular' => $celular,
                'correo' => $correo,
                'num_poliza' => $num_poliza,
                'danno_vehiculo' => $danno_v,
                'dannos_v' => $danno_d,
                'sp_aseguradoras_id_aseguradora' => $aseguradora,
                'sp_incidentes_id_incidentes' => $id]
        );

        return view('Incidentes.Index');
    }
}
