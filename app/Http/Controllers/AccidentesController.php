<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

use DB;

class AccidentesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Accidentes.index');
    }

    public function c1()
    {

        return view('Accidentes.cons_1');
    }

    public function c2()
    {

        return view('Accidentes.cons_2');
    }

    public function c3()
    {

        return view('Accidentes.cons_3');
    }

    public function c4()
    {

        return view('Accidentes.cons_4');
    }

    public function c5()
    {

        return view('Accidentes.cons_5');
    }

    public function nuevo()
    {

        $concesiones = DB::table('sp_accesos')
            ->join('sp_ruta', 'id_ruta', '=', 'sp_ruta_id_ruta')
            ->join('sp_concesiones', 'id_conc', '=', 'sp_concesiones_id_conc')
            ->where('users_id', '=', Auth::id())
            ->get();

        //$concesiones = DB::table('sp_ruta')
        // ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
        // ->get();

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

        return view('Accidentes.nuevo', ['concesiones' => $concesiones, 'comunas' => $comunas,
            'dannos' => $dannos, 'tipo' => $tipo, 'cal' => $calzada, 'sentido' => $sentido, 'info' => $info]);
    }

    public function mostrar()
    {
        $totales = DB::table('sp_accidentes')->count();

        $d = DB::table('sp_incidentes')
            ->where('dannos', '=', 'Si')
            ->count();

        $sd = DB::table('sp_incidentes')
            ->where('dannos', '=', 'No')
            ->count();

        $a = DB::table('sp_accidentes')
            ->where('sp_estados_inc_id_estados', '=', 1)
            ->count();

        $listado = DB::table('sp_accidentes')
            ->join('sp_ruta', 'sp_ruta_id_ruta', '=', 'id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
            ->get();

        return view('Accidentes.mostrar', ['listado' => $listado, 'totales' => $totales, 'd' => $d, 'sd' => $sd, 'a' => $a]);
    }

    public function form()
    {

        return view('Accidentes.form1_detalle');

    }

    public function complemento()
    {

        $id_acc = $_POST['id_accidente'];

        $listado = DB::table('sp_accidentes')
            ->join('sp_ruta', 'sp_ruta_id_ruta', '=', 'id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
            ->join('sp_estados_inc', 'sp_estados_inc_id_estados', '=', 'id_estados')
            ->join('sp_calzada', 'sp_calzada_id_calzada', '=', 'id_calzada')
            ->join('sp_sentido', 'sp_sentido_id_sentido', '=', 'id_sentido')
            ->join('sp_tipo_accidente', 'sp_tipo_accidente_id_tipo_acc', '=', 'id_tipo_acc')
            ->where('id_accidente', '=', $id_acc)
            ->first();

        $magnitud = DB::table('sp_magnitud')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();

        $u_rel = DB::table('sp_u_rel')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();

        $t_acc = DB::table('sp_tipo_acc')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();

        $c_e = DB::table('sp_cond_entorno')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();

        $c_c = DB::table('sp_cond_calz')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();

        $o_pro = DB::table('sp_origen_probable')
            ->where('sp_accidentes_id_accidente', '=', $id_acc)
            ->first();


        return view('Accidentes.complementos', [
            'inc' => $listado,
            'mag' => $magnitud,
            't_a' => $t_acc,
            'o_pro' => $o_pro,
            'u_rel' => $u_rel,
            'c_e' => $c_e,
            'c_c' => $c_c
        ]);
    }

    public function detalles()
    {

        $id_acc = $_POST['id_accidente'];

        $listado = DB::table('sp_accidentes')
            ->join('sp_ruta', 'sp_ruta_id_ruta', '=', 'id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
            ->join('sp_estados_inc', 'sp_estados_inc_id_estados', '=', 'id_estados')
            ->join('sp_calzada', 'sp_calzada_id_calzada', '=', 'id_calzada')
            ->join('sp_sentido', 'sp_sentido_id_sentido', '=', 'id_sentido')
            ->join('sp_tipo_accidente', 'sp_tipo_accidente_id_tipo_acc', '=', 'id_tipo_acc')
            ->where('id_accidente', '=', $id_acc)
            ->first();

        $automoviles = DB::table('sp_veh_inc')
            ->join('sp_aseguradoras', 'sp_aseguradoras_id_aseguradora', '=', 'id_aseguradora')
            ->where('sp_incidentes_id_incidentes', '=', $id_acc)
            ->get();

        $documentos = DB::table('sp_doc_inc')
            ->join('sp_incidentes', 'sp_incidentes_id_incidentes', '=', 'id_incidentes')
            ->where('sp_incidentes_id_incidentes', '=', $id_acc)
            ->get();

        $fotografias = DB::table('sp_ft_inc')
            ->join('sp_incidentes', 'sp_incidentes_id_incidentes', '=', 'id_incidentes')
            ->where('sp_incidentes_id_incidentes', '=', $id_acc)
            ->get();

        $gestiones = DB::table('sp_gestiones')
            ->where([
                ['ac_o_in', '=', 1],
                ['id_in_o_ac', '=', $id_acc],
                ['estado', '=', 1],
            ])->get();

        $aseg = DB::table('sp_aseguradoras')
            ->get();


        return view('Accidentes.detalles', ['inc' => $listado, 'aseg' => $aseg, 'au' => $automoviles, 'doc' => $documentos, 'ft' => $fotografias, 'ges' => $gestiones]);
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
        $resp = $_POST['id_u'];

        $id = DB::table('sp_accidentes')->insertGetId(
            ['fecha' => $fecha,
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

        DB::table('sp_tipo_acc')->insert(
            [
                'op_1' => 0,
                'op_2' => 0,
                'op_3' => 0,
                'op_4' => 0,
                'op_5' => 0,
                'op_6' => 0,
                'op_7' => 0,
                'op_8' => 0,
                'op_9' => 0,
                'op_10' => 0,
                'op_11' => 0,
                'op_12' => 0,
                'op_13' => 0,
                'op_14' => 0,
                'op_15' => 0,
                'op_16' => 0,
                'op_17' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );


        DB::table('sp_magnitud')->insert(
            [
                'victimas_fatales' => 0,
                'corte_trans' => 0,
                'pistas' => 0,
                'ini_corte' => null,
                'fin_corte' => null,
                'bypass' => 0,
                't_or_r' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );

        DB::table('sp_cond_entorno')->insert(
            [
                'op_1' => 0,
                'op_2' => 0,
                'op_3' => 0,
                'op_4' => 0,
                'op_5' => 0,
                'p_duro' => 0,
                'defensas' => 0,
                'desnivel' => 0,
                'cerco' => 0,
                'trabajos' => 0,
                'banderero' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );

        DB::table('sp_cond_calz')->insert(
            [
                'op_1' => 0,
                'op_2' => 0,
                'op_3' => 0,
                'op_4' => 0,
                'op_5' => 0,
                'op_6' => 0,
                'op_7' => 0,
                'op_8' => 0,
                'op_9' => 0,
                'lumi' => 0,
                'atmo' => 0,
                'luz' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );

        DB::table('sp_u_rel')->insert(
            [
                'op_1' => 0,
                'op_2' => 0,
                'op_3' => 0,
                'op_4' => 0,
                'op_5' => 0,
                'op_6' => 0,
                'op_7' => 0,
                'op_8' => 0,
                'op_9' => 0,
                'op_10' => 0,
                'op_11' => 0,
                'op_12' => 0,
                'op_13' => 0,
                'op_14' => 0,
                'op_15' => 0,
                'op_16' => 0,
                'op_17' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );

        DB::table('sp_origen_probable')->insert(
            [
                'op_1' => 0,
                'op_2' => 0,
                'op_3' => 0,
                'op_4' => 0,
                'op_5' => 0,
                'op_6' => 0,
                'op_7' => 0,
                'vel_max' => 0,
                'sp_accidentes_id_accidente' => $id
            ]
        );

        return redirect('Accidentes/Mostrar');

    }

    public function guardar_complemento()
    {

        //General
        $folio_acc = $_POST['folio_acc'];

        //Sector 1
        $vic_fat = isset($_POST['vic_fat']);
        $corte_trans = isset($_POST['corte_trans']);
        $pistas = isset($_POST['pistas']);
        $hora_ini = $_POST['hora_ini'];
        $hora_fin = $_POST['hora_fin'];
        $by_pass = isset($_POST['by_pass']);
        $t_o_r = $_POST['t_o_r'];


        DB::table('sp_magnitud')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update([
                    'victimas_fatales' => $vic_fat,
                    'corte_trans' => $corte_trans,
                    'pistas' => $pistas,
                    'ini_corte' => $hora_ini,
                    'fin_corte' => $hora_fin,
                    'bypass' => $by_pass,
                    't_or_r' => $t_o_r,
                ]
            );


        //Sector 2

        $op_1 = isset($_POST['op1_col']);
        $op_2 = isset($_POST['op2_col']);
        $op_3 = isset($_POST['op3_col']);
        $op_4 = isset($_POST['op4_col']);
        $op_5 = isset($_POST['op5_col']);
        $op_6 = isset($_POST['op6_col']);
        $op_7 = isset($_POST['op7_col']);
        $op_8 = isset($_POST['op8_col']);
        $op_9 = isset($_POST['op9_col']);
        $op_10 = isset($_POST['op10_col']);
        $op_11 = isset($_POST['op11_col']);
        $op_12 = isset($_POST['op12_col']);
        $op_13 = isset($_POST['op13_col']);
        $op_14 = isset($_POST['op14_col']);
        $op_15 = isset($_POST['op15_col']);
        $op_16 = isset($_POST['op16_col']);
        $op_17 = isset($_POST['op17_col']);


        DB::table('sp_tipo_acc')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update(
                [
                    'op_1' => $op_1,
                    'op_2' => $op_2,
                    'op_3' => $op_3,
                    'op_4' => $op_4,
                    'op_5' => $op_5,
                    'op_6' => $op_6,
                    'op_7' => $op_7,
                    'op_8' => $op_8,
                    'op_9' => $op_9,
                    'op_10' => $op_10,
                    'op_11' => $op_11,
                    'op_12' => $op_12,
                    'op_13' => $op_13,
                    'op_14' => $op_14,
                    'op_15' => $op_15,
                    'op_16' => $op_16,
                    'op_17' => $op_17,
                ]
            );


        // Sector 3

        $op_1_u = isset($_POST['op1_u']);
        $op_2_u = isset($_POST['op2_u']);
        $op_3_u = isset($_POST['op3_u']);
        $op_4_u = isset($_POST['op4_u']);
        $op_5_u = isset($_POST['op5_u']);
        $op_6_u = isset($_POST['op6_u']);
        $op_7_u = isset($_POST['op7_u']);
        $op_8_u = isset($_POST['op8_u']);
        $op_9_u = isset($_POST['op9_u']);
        $op_10_u = isset($_POST['op10_u']);
        $op_11_u = isset($_POST['op11_u']);
        $op_12_u = isset($_POST['op12_u']);
        $op_13_u = isset($_POST['op13_u']);
        $op_14_u = isset($_POST['op14_u']);
        $op_15_u = isset($_POST['op15_u']);
        $op_16_u = isset($_POST['op16_u']);
        $op_17_u = isset($_POST['op17_u']);

        DB::table('sp_u_rel')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update(
                [
                    'op_1' => $op_1_u,
                    'op_2' => $op_2_u,
                    'op_3' => $op_3_u,
                    'op_4' => $op_4_u,
                    'op_5' => $op_5_u,
                    'op_6' => $op_6_u,
                    'op_7' => $op_7_u,
                    'op_8' => $op_8_u,
                    'op_9' => $op_9_u,
                    'op_10' => $op_10_u,
                    'op_11' => $op_11_u,
                    'op_12' => $op_12_u,
                    'op_13' => $op_13_u,
                    'op_14' => $op_14_u,
                    'op_15' => $op_15_u,
                    'op_16' => $op_16_u,
                    'op_17' => $op_17_u,
                ]
            );


        //Sector 4

        $op_1_cc = isset($_POST['op1_cc']);
        $op_2_cc = isset($_POST['op2_cc']);
        $op_3_cc = isset($_POST['op3_cc']);
        $op_4_cc = isset($_POST['op4_cc']);
        $op_5_cc = isset($_POST['op5_cc']);
        $p_duro = $_POST['p_duro'];
        $defensas = $_POST['defensas'];
        $desnivel = $_POST['nivel'];
        $cerco = $_POST['cerco'];
        $trabajos = $_POST['trabajos'];
        $bande = $_POST['bande'];

        DB::table('sp_cond_entorno')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update(
                [
                    'op_1' => $op_1_cc,
                    'op_2' => $op_2_cc,
                    'op_3' => $op_3_cc,
                    'op_4' => $op_4_cc,
                    'op_5' => $op_5_cc,
                    'p_duro' => $p_duro,
                    'defensas' => $defensas,
                    'desnivel' => $desnivel,
                    'cerco' => $cerco,
                    'trabajos' => $trabajos,
                    'banderero' => $bande,
                ]
            );


        //Sector 5

        $op_1_con = isset($_POST['op1_con']);
        $op_2_con = isset($_POST['op2_con']);
        $op_3_con = isset($_POST['op3_con']);
        $op_4_con = isset($_POST['op4_con']);
        $op_5_con = isset($_POST['op5_con']);
        $op_6_con = isset($_POST['op6_con']);
        $op_7_con = isset($_POST['op7_con']);
        $op_8_con = isset($_POST['op8_con']);
        $op_9_con = isset($_POST['op9_con']);
        $lum = $_POST['lumi'];
        $at = $_POST['atmo'];
        $luz = $_POST['luz'];

        DB::table('sp_cond_calz')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update(
                [
                    'op_1' => $op_1_con,
                    'op_2' => $op_2_con,
                    'op_3' => $op_3_con,
                    'op_4' => $op_4_con,
                    'op_5' => $op_5_con,
                    'op_6' => $op_6_con,
                    'op_7' => $op_7_con,
                    'op_8' => $op_8_con,
                    'op_9' => $op_9_con,
                    'lumi' => $lum,
                    'atmo' => $at,
                    'luz' => $luz,
                ]
            );

        //Sector 6

        $op_1_op = isset($_POST['op1_op']);
        $op_2_op = isset($_POST['op2_op']);
        $op_3_op = isset($_POST['op3_op']);
        $op_4_op = isset($_POST['op4_op']);
        $op_5_op = isset($_POST['op5_op']);
        $op_6_op = isset($_POST['op6_op']);
        $op_7_op = isset($_POST['op7_op']);
        $vel_max = $_POST['velocidad'];


        DB::table('sp_origen_probable')
            ->where('sp_accidentes_id_accidente', $folio_acc)
            ->update(
                [
                    'op_1' => $op_1_op,
                    'op_2' => $op_2_op,
                    'op_3' => $op_3_op,
                    'op_4' => $op_4_op,
                    'op_5' => $op_5_op,
                    'op_6' => $op_6_op,
                    'op_7' => $op_7_op,
                    'vel_max' => $vel_max,
                ]
            );

        return redirect('Accidentes/Mostrar');

    }
}