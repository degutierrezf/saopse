<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        if ($_POST['tipo']==1){
            $tipo = 1;
        }else{
            $tipo = 2;
        }

        $id = $_POST['id_accidente'];

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $placa = $_POST['placa'];
        $conductor = $_POST['conductor'];
        $propietario = $_POST['propietario'];
        $rut_prop = $_POST['rut'];
        $direccion = $_POST['direccion'];
        $comuna = $_POST['comuna'];
        $fono = $_POST['fono'];
        $celular = $_POST['celular'];
        $correo = $_POST['correo'];
        $num_poliza = $_POST['poliza'];
        $danno_v = $_POST['mensaje'];
        $aseguradora = $_POST['aseguradora'];
        $danno_d = $_POST['d_dannos'];

        DB::table('sp_veh_inc')->insert(
            [   'marca' => $marca,
                'modelo' => $modelo,
                'placa' => $placa,
                'conductor' => $conductor,
                'propietario' => $propietario,
                'rut_prop' => $rut_prop,
                'direccion' => $direccion,
                'comuna' => $comuna,
                'fono' => $fono,
                'celular' => $celular,
                'correo' => $correo,
                'num_poliza' => $num_poliza,
                'danno_vehiculo' => $danno_d,
                'dannos_v' => $danno_v,
                'tipo_registro' => $tipo,
                'sp_aseguradoras_id_aseguradora' => $aseguradora,
                'id_acc_or_inc' => $id]
        );

        return redirect('Accidentes/Mostrar');
    }
}
