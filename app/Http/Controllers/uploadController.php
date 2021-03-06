<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Input;

class uploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('docs.index');

    }

    public function uploading(Request $request){


        //Tipo de Registro 1 = Accidente - 2 = Incidente
        //Tipo 1 = Foto - 2 = Croquis - 3 = Documento

        $id_inc = $_POST['id_accidente'];
        $foto = $_POST['foto'];

        if ($foto == 'foto') {

            $nombre = 'Foto';
            $file = $request->file('archivo');
            $destino = 'uploads';
            $string = str_random(6);
            $ruta = $file->move($destino, $string . $file->getClientOriginalName());

            DB::table('sp_ft_inc')->insert(
                ['nombre' => $nombre,
                    'ruta' => $ruta,
                    'tipo_registro' => 1,
                    'id_acc_or_inc' => $id_inc,
                    'tipo' => 1
                ]
            );

            return redirect('Accidentes/Mostrar');

        }elseif($foto == 'croquis'){
            $nombre = 'Croquis';
            $file = $request->file('archivo');
            $destino = 'uploads';
            $string = str_random(6);
            $ruta = $file->move($destino, $string . $file->getClientOriginalName());

            DB::table('sp_ft_inc')->insert(
                ['nombre' => $nombre,
                    'ruta' => $ruta,
                    'tipo_registro' => 1,
                    'id_acc_or_inc' => $id_inc,
                    'tipo' => 2
                ]
            );

            return redirect('Accidentes/Mostrar');
        }else{

        $nombre = $_POST['nombre'];
        $file = $request->file('archivo');

        //echo 'File Name: '.$file->getClientOriginalName();
        //echo 'Patch: ' .$file->getRealPath();
        //echo 'File Size: ' .$file->getSize();

        $destino = 'uploads';
        $string = str_random(6);
        $ruta = $file->move($destino,$string.$file->getClientOriginalName());

        //echo 'Patch: ' .$ruta;

        //echo 'ID: ' .$id_inc.$tipo.$nombre;

            DB::table('sp_ft_inc')->insert(
                [   'nombre' => $nombre,
                    'ruta' => $ruta,
                    'tipo_registro' => 1,
                    'id_acc_or_inc' => $id_inc,
                    'tipo' => 3
                ]
            );

            return redirect('Accidentes/Mostrar');

        }


       // return view('Incidentes.Index');

    }
}