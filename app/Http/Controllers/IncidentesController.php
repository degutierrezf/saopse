<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class IncidentesController extends Controller
{
    

	public function index()
    {
        return view('Incidentes.index');
    }

    public function nuevo()
	{

        $concesiones = DB::table('sp_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc', '=', 'id_conc')
            ->get();

    	return view('Incidentes.nuevo',['concesiones'=>$concesiones]);
    }

    public function mostrar()
	{

        $totales = DB::table('sp_incidentes')->count();

        $d = DB::table('sp_incidentes')
                    ->where('dannos','=','Si')
                    ->count();

        $sd = DB::table('sp_incidentes')
                    ->where('dannos','=','No')
                    ->count();

        $a = DB::table('sp_incidentes')
                    ->where('sp_estados_inc_id_estados','=',1)
                    ->count();

        $listado = DB::table('sp_incidentes')
            ->join('sp_ruta','sp_ruta_id_ruta','=','id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc','=', 'id_conc')
            ->get();

    	return view('Incidentes.mostrar', ['listado'=>$listado, 'totales'=>$totales, 'd'=>$d, 'sd'=>$sd, 'a'=>$a]);
    }


    public function detalles()
    {

        $id_inc = $_POST['id_incidente'];

        $listado = DB::table('sp_incidentes')
            ->join('sp_ruta','sp_ruta_id_ruta','=','id_ruta')
            ->join('sp_concesiones', 'sp_concesiones_id_conc','=', 'id_conc')
            ->join('sp_estados_inc','sp_estados_inc_id_estados','=','id_estados')
            ->where('id_incidentes','=', $id_inc)
            ->first();

        $automoviles = DB::table('sp_veh_inc')
            ->join('sp_aseguradoras','sp_aseguradoras_id_aseguradora','=','id_aseguradora')
            ->where('sp_incidentes_id_incidentes','=', $id_inc)
            ->get();

        $documentos = DB::table('sp_doc_inc')
            ->join('sp_incidentes','sp_incidentes_id_incidentes','=','id_incidentes')
            ->where('sp_incidentes_id_incidentes','=', $id_inc)
            ->get();

        $fotografias = DB::table('sp_ft_inc')
            ->join('sp_incidentes','sp_incidentes_id_incidentes','=','id_incidentes')
            ->where('sp_incidentes_id_incidentes','=', $id_inc)
            ->get();

        $gestiones = DB::table('sp_gestiones_i')
            ->where('sp_incidentes_id_incidentes','=', $id_inc)
            ->get();

        return view('Incidentes.detalles',['inc'=>$listado, 'au'=>$automoviles, 'doc'=>$documentos, 'ft'=>$fotografias, 'gt'=>$gestiones]);
    }

    public function GuardarNuevo()
    {

        $ruta = $_POST['ruta'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $pk1 = $_POST['pk1'];
        $pk2 = $_POST['pk2'];
        $calz = $_POST['r1'];
        $dir = $_POST['r2'];;
        $tipo = $_POST['tipo'];
        $desc = $_POST['desc'];
        $nota = $_POST['nota'];
        $dan = $_POST['r3'];

        DB::table('sp_incidentes')->insert(
            [   'folio' => 1,
                'fecha' => $fecha,
                'hora' => $hora,
                'pk1' => $pk1, 
                'pk2' => $pk2,
                'calzada' => $calz,
                'direccion' => $dir,
                'tipo' => $tipo,
                'descripcion' => $desc,
                'nota' => $nota,
                'dannos' => $dan,
                'sp_ruta_id_ruta' => $ruta,
                'sp_estados_inc_id_estados' => 1]
        );

        return redirect('Incidentes/Mostrar');

    }

}
