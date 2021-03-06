<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class CotizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   	public function index()
    {

        $id = $_POST['id_accidente'];

        $cot = DB::table('sp_cotizacion')
        ->where('sp_accidentes_id_accidente','=',$id)
        ->get();

        return view('Cotizaciones.index', ['cot'=>$cot]);
    }

    public function Nuevo()
	{
    	$id = $_POST['id_accidente'];

        $con = DB::table('sp_concesiones')
            ->where('id_conc','=',1)
            ->first();

        $cot = DB::table('sp_cotizacion')
        ->where('sp_accidentes_id_accidente','=',$id)
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
         ->where('sp_cotizacion_id_cotizacion','=',1)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

        $rem2 = DB::table('sp_d_maq')
         ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
         ->where('sp_cotizacion_id_cotizacion','=',1)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

         $rem3 = DB::table('sp_d_per')
         ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
         ->where('sp_cotizacion_id_cotizacion','=',1)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

         $rem4 = DB::table('sp_otros')
         ->where('sp_cotizacion_id_cotizacion','=',1)
         ->where('sp_actividad_id_actividad','=',1)
         ->get();

         $sum1 = DB::table('sp_d_mat')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
             ->where('sp_actividad_id_actividad','=',2)
            ->sum('subtotal');
         $sum2 = DB::table('sp_d_maq')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
             ->where('sp_actividad_id_actividad','=',2)
            ->sum('subtotal');
         $sum3 = DB::table('sp_d_per')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
             ->where('sp_actividad_id_actividad','=',2)
            ->sum('subtotal');
         $sum4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
            ->where('sp_actividad_id_actividad','=',2)
            ->sum('valor');

                $sum5 = DB::table('sp_d_mat')
                    ->where('sp_cotizacion_id_cotizacion','=', 1)
                    ->where('sp_actividad_id_actividad','=',1)
                    ->sum('subtotal');
                $sum6 = DB::table('sp_d_maq')
                    ->where('sp_cotizacion_id_cotizacion','=', 1)
                    ->where('sp_actividad_id_actividad','=',1)
                    ->sum('subtotal');
                $sum7 = DB::table('sp_d_per')
                    ->where('sp_cotizacion_id_cotizacion','=', 1)
                    ->where('sp_actividad_id_actividad','=',1)
                    ->sum('subtotal');
                $sum8 = DB::table('sp_otros')
                    ->where('sp_cotizacion_id_cotizacion','=', 1)
                    ->where('sp_actividad_id_actividad','=',1)
                    ->sum('valor');

            $sum9 = DB::table('sp_d_mat')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',3)
                ->sum('subtotal');
            $sum10 = DB::table('sp_d_maq')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',3)
                ->sum('subtotal');
            $sum11 = DB::table('sp_d_per')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',3)
                ->sum('subtotal');
            $sum12 = DB::table('sp_otros')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',3)
                ->sum('valor');

        $sum13 = DB::table('sp_d_mat')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
            ->where('sp_actividad_id_actividad','=',4)
            ->sum('subtotal');
        $sum14 = DB::table('sp_d_maq')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
            ->where('sp_actividad_id_actividad','=',4)
            ->sum('subtotal');
        $sum15 = DB::table('sp_d_per')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
            ->where('sp_actividad_id_actividad','=',4)
            ->sum('subtotal');
        $sum16 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=', 1)
            ->where('sp_actividad_id_actividad','=',4)
            ->sum('valor');

            $sum17 = DB::table('sp_d_mat')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',5)
                ->sum('subtotal');
            $sum18 = DB::table('sp_d_maq')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',5)
                ->sum('subtotal');
            $sum19 = DB::table('sp_d_per')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',5)
                ->sum('subtotal');
            $sum20 = DB::table('sp_otros')
                ->where('sp_cotizacion_id_cotizacion','=', 1)
                ->where('sp_actividad_id_actividad','=',5)
                ->sum('subtotal');

             $sum_1 = $sum5 + $sum6 + $sum7 + $sum8;
             $sum_2 = $sum1 + $sum2 + $sum3 + $sum4;
             $sum_3 = $sum9 + $sum10 + $sum11 + $sum12;
             $sum_4 = $sum13 + $sum14 + $sum15 + $sum16;
             $sum_5 = $sum17 + $sum18 + $sum19 + $sum20;

         $st = $sum_1 + $sum_2 + $sum_3 + $sum_4 + $sum_5;

        $mat1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $mat4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',2)
            ->get();

        $tra1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $tra4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',3)
            ->get();

        $sen1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',4)
            ->get();

        $sen2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',4)
            ->get();

        $sen3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',4)
            ->get();

        $sen4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',4)
            ->get();

        $ins1 = DB::table('sp_d_mat')
            ->join('sp_materiales', 'id_materiales','=','sp_materiales_id_materiales')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',5)
            ->get();

        $ins2 = DB::table('sp_d_maq')
            ->join('sp_maquinaria', 'id_maquinaria','=','sp_maquinaria_id_maquinaria')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',5)
            ->get();

        $ins3 = DB::table('sp_d_per')
            ->join('sp_personal', 'id_personal','=','sp_personal_id_personal')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',5)
            ->get();

        $ins4 = DB::table('sp_otros')
            ->where('sp_cotizacion_id_cotizacion','=',1)
            ->where('sp_actividad_id_actividad','=',5)
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
            'tra4'=>$tra4,
            'sen1'=>$sen1,
            'sen2'=>$sen2,
            'sen3'=>$sen3,
            'sen4'=>$sen4,
            'ins1'=>$ins1,
            'ins2'=>$ins2,
            'ins3'=>$ins3,
            'ins4'=>$ins4,
            'sm1'=>$sum_1,
            'sm2'=>$sum_2,
            'sm3'=>$sum_3,
            'sm4'=>$sum_4,
            'sm5'=>$sum_5,
            'st'=>$st
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
        $cotizacion = 1;

        DB::table('sp_d_mat')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_materiales_id_materiales' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );

        return redirect('Cotizacion/Nuevo');
    }

    public function Maquinaria(){

        $id = $_POST['maquinaria'];
        $cant = $_POST['cantidad'];
        $subtotal = 100;
        $act = $_POST['actividad'];
        $cotizacion = 1;

        DB::table('sp_d_maq')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_maquinaria_id_maquinaria' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );

        return redirect('Cotizacion/Nuevo');
    }

    public function Personal(){

        $id = $_POST['personal'];
        $cant = $_POST['cantidad'];
        $subtotal = 100;
        $act = $_POST['actividad'];
        $cotizacion = 1;

        DB::table('sp_d_per')->insert(
            [   'cantidad' => $cant,               
                'subtotal' => $subtotal, 
                'sp_personal_id_personal' => $id,
                'sp_actividad_id_actividad' => $act,
                'sp_cotizacion_id_cotizacion' => $cotizacion]
        );

        return redirect('Cotizacion/Nuevo');
    }

    public function Otros(){

        $id = $_POST['item'];
        $val = $_POST['valor'];
        $uni = $_POST['unidad'];
        $cant = $_POST['cantidad'];
        $ac = $_POST['actividad'];

        $st = $val * $cant;

        DB::table('sp_otros')->insert(
            [   'item' => $id,               
                'cantidad' => $cant, 
                'unidad' => $uni,
                'valor' => $val,
                'subtotal' => $st,
                'sp_cotizacion_id_cotizacion' => 1,
                'sp_actividad_id_actividad'=> $ac]
        );

        return Redirect::action('AccidentesController@mostrar');
    }
}
