<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class CotizacionController extends Controller
{
   	public function index()
    {

        $cot = DB::table('sp_cotizacion')
        ->where('id_cotizacion','=',1)
        ->get();

        return view('Cotizaciones.index', ['cot'=>$cot]);
    }

    public function Nuevo()
	{
    	//$id = $_POST['id_accidente'];

        $con = DB::table('sp_concesiones')
            ->where('id_conc','=',1)
            ->first();

        $cot = DB::table('sp_cotizacion')
        ->where('id_cotizacion','=',2)
        ->first();

        $act = DB::table('sp_actividad')
         ->get();

        $mat = DB::table('sp_materiales')
         ->get();

        $per = DB::table('sp_personal')
         ->get();

        $maq = DB::table('sp_maquinaria')
         ->get();

        $rem1 = DB::table('sp_d_mat')
         ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
         ->where('sp_cotizacion_id_cotizacion','=',2)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

        $rem2 = DB::table('sp_d_maq')
         ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
         ->where('sp_cotizacion_id_cotizacion','=',2)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

         $rem3 = DB::table('sp_d_per')
         ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
         ->where('sp_cotizacion_id_cotizacion','=',2)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

         $rem4 = DB::table('sp_otros')
         ->where('sp_cotizacion_id_cotizacion','=',2)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

        $mat1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $tra1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',2)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();




        return view('Cotizaciones.nuevo', [
            'con'=>$con,
            'cot'=>$cot,
            'ac'=>$act, 
            'mat'=>$mat, 
            'per'=>$per, 
            'maq'=>$maq, 
            'rem1'=>$rem1,
            'rem2'=>$rem2,
            'rem3'=>$rem3,
            'rem4'=>$rem4,
            'mat1'=>$mat1,
            'mat2'=>$mat2,
            'mat3'=>$mat3,
            'mat4'=>$mat4,
            'tra1'=>$tra1,
            'tra2'=>$tra2,
            'tra3'=>$tra3,
            'tra4'=>$tra4
            ]);

    }

    public function GuardarNuevo(){

        return view('Cotizaciones.Index');

    }

    public function Material(){

        $id = $_POST['material'];
        $cant = $_POST['cantidad'];
        $subtotal = 100;
        $act = $_POST['actividad'];
        $cotizacion = 2;

        var_dump($cant,$subtotal,$id,$act,$cotizacion);

        DB::table('sp_d_mat')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_materiales_id_materiales' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );
    }

    public function Maquinaria(){

        $id = $_POST['maquinaria'];
        $cant = $_POST['cantidad'];
        $subtotal = 100;
        $act = $_POST['actividad'];
        $cotizacion = 2;

        DB::table('sp_d_maq')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_maquinaria_id_maquinaria' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );
    }

    public function Personal(){

        $id = $_POST['personal'];
        $cant = $_POST['cantidad'];
        $subtotal = 100;
        $act = $_POST['actividad'];
        $cotizacion = 2;

        var_dump($cant,$subtotal,$id,$act,$cotizacion);

        DB::table('sp_d_per')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_personal_id_personal' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );
    }

    public function Otros(){

        $id = $_POST['item'];
        $val = $_POST['valor'];
        $uni = $_POST['unidad'];
        $cant = $_POST['cantidad'];
        $ac = $_POST['actividad'];

        DB::table('sp_otros')->insert(
            [   'item' => $id,               
                'cantidad' => $cant, 
                'unidad' => $uni,
                'valor' => $val,
                'sp_cotizacion_id_cotizacion' => 2,
                'sp_actividad_id_actividad'=> $ac]
        );
    }
}
