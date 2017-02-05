<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Input;

class uploadController extends Controller
{
    public function index(){

        return view('docs.index');

    }

    public function uploading(Request $request){

        $id_inc = $_POST['id_incidente'];
        $foto = $_POST['foto'];

        if ($foto == 'foto') {
            
            $nombre = $_POST['nombre'];
            $file = $request->file('archivo');
            $destino = 'uploads';
            $string = str_random(6);
            $ruta = $file->move($destino,$string.$file->getClientOriginalName());

            DB::table('sp_ft_inc')->insert(
            [   'nombre' => $nombre,
                'ruta' => $ruta,
                'sp_incidentes_id_incidentes' => $id_inc
            ]
            );

        }else{

        $tipo = $_POST['tipo'];
        $nombre = $_POST['nombre'];
        $file = $request->file('archivo');

        //echo 'File Name: '.$file->getClientOriginalName();
        //echo 'Patch: ' .$file->getRealPath();
        //echo 'File Size: ' .$file->getSize();

        $destino = 'uploads';
        $string = str_random(6);
        $ruta = $file->move($destino,$string.$file->getClientOriginalName());

        echo 'Patch: ' .$ruta;

        //echo 'ID: ' .$id_inc.$tipo.$nombre;

         DB::table('sp_doc_inc')->insert(
            [   'nombre' => $nombre,
                'tipo_doc' => $tipo,
                'ruta' => $ruta,
                'sp_incidentes_id_incidentes' => $id_inc
            ]
        );

        }

       // return view('Incidentes.Index');

    }
}