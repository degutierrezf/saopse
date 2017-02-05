<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class AccidentesController extends Controller
{
    public function index()
    {
        return view('Accidentes.index');
    }

    public function nuevo()
	{
    	$concesiones = DB::table('sp_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
            ->get();

        $comunas = DB::table('sp_comunas')
            ->get();

        $dannos = DB::table('sp_dannos')
            ->get();

        $tipo = DB::table('sp_tipo_accidente')
            ->get();

        $calzada = DB::table('sp_calzada')
            ->get();

        $sentido = DB::table('sp_sentido')
            ->get();

        $info = DB::table('sp_resp_info')
            ->get();

        return view('Accidentes.nuevo',['concesiones'=>$concesiones, 'comunas'=>$comunas, 
            'dannos'=>$dannos, 'tipo'=>$tipo, 'cal'=>$calzada, 'sentido'=>$sentido, 'info'=>$info]);
    }

    public function mostrar()
	{
    	 $totales = DB::table('sp_accidentes')->count();

        $d = DB::table('sp_incidentes')
                    ->where('dannos','=','Si')
                    ->count();

        $sd = DB::table('sp_incidentes')
                    ->where('dannos','=','No')
                    ->count();

        $a = DB::table('sp_accidentes')
                    ->where('sp_estados_inc_id_estados','=',1)
                    ->count();

        $listado = DB::table('sp_accidentes')
            ->join('sp_ruta','sp_ruta_id_ruta','=','id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc','=', 'id_conc')
            ->get();

        return view('Accidentes.mostrar', ['listado'=>$listado, 'totales'=>$totales, 'd'=>$d, 'sd'=>$sd, 'a'=>$a]);
    }


    public function detalles()
    {

        $id_acc = $_POST['id_accidente'];

        $listado = DB::table('sp_accidentes')
            ->join('sp_ruta','sp_ruta_id_ruta','=','id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc','=', 'id_conc')
            ->join('sp_estados_inc','sp_estados_inc_id_estados','=','id_estados')
            ->join('sp_calzada','sp_calzada_id_calzada','=','id_calzada')
            ->join('sp_sentido','sp_sentido_id_sentido','=','id_sentido')
            ->join('sp_tipo_accidente','sp_tipo_accidente_id_tipo_acc','=','id_tipo_acc')

            ->where('id_accidente','=', $id_acc)
            ->first();

        $automoviles = DB::table('sp_veh_inc')
            ->join('sp_aseguradoras','sp_aseguradoras_id_aseguradora','=','id_aseguradora')
            ->where('sp_incidentes_id_incidentes','=', $id_acc)
            ->get();

        $documentos = DB::table('sp_doc_inc')
            ->join('sp_incidentes','sp_incidentes_id_incidentes','=','id_incidentes')
            ->where('sp_incidentes_id_incidentes','=', $id_acc)
            ->get();

        $fotografias = DB::table('sp_ft_inc')
            ->join('sp_incidentes','sp_incidentes_id_incidentes','=','id_incidentes')
            ->where('sp_incidentes_id_incidentes','=', $id_acc)
            ->get();

        $gestiones = DB::table('sp_gestiones_i')
            ->where('sp_incidentes_id_incidentes','=', $id_acc)
            ->get();

        return view('Accidentes.detalles',['inc'=>$listado, 'au'=>$automoviles, 'doc'=>$documentos, 'ft'=>$fotografias, 'gt'=>$gestiones]);
    }

     public function GuardarNuevo()
    {

        $ruta = $_POST['ruta'];
        $fecha = $_POST['fecha'];
        $pk1 = $_POST['pk1'];
        $pk2 = $_POST['pk2'];
        $hora = $_POST['hora'];
        $comuna = $_POST['comuna'];
        $sector = $_POST['sector'];
        $calzada = $_POST['calzada'];
        $sentido = $_POST['sentido'];
        $pistas = $_POST['pistas'];
        $t_acc = $_POST['tipo_a'];
        $condicion = $_POST['cond'];
        $fall = $_POST['fall'];
        $les = $_POST['les'];
        $num_v = $_POST['veh'];
        $ilesos = $_POST['ile'];
        $dannos = $_POST['dannos'];
        $desc = $_POST['desc'];
        $desc_ev = $_POST['desc_e'];
        $resp = $_POST['respo'];



        DB::table('sp_accidentes')->insert(
            [   'fecha' => $fecha,               
                'pk1' => $pk1, 
                'pk2' => $pk2,
                'hora' => $hora,
                'sector' => $sector,
                'fallecidos' => $fall,
                'lesionados' => $les,
                'ilesos' => $ilesos,
                'vehiculos' => $num_v,
                'dannos' => $dannos,
                'desc_breve' => $desc,
                'descripcion' => $desc_ev,
                'sp_ruta_id_ruta' => $ruta,
                'sp_estados_inc_id_estados' => 1,
                'sp_comunas_id_comunas' => $comuna,
                'sp_calzada_id_calzada' => $calzada,
                'sp_sentido_id_sentido' => $sentido,
                'sp_tipo_accidente_id_tipo_acc' => $t_acc,
                'sp_dannos_id_dannos' => $dannos,
                'sp_resp_info_id_resp_info' => $resp]
        );

        return redirect('Accidentes/Mostrar');

    }
}
