<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FotografiasController extends Controller
{
   	public function index()
    {
        return view('Pic.index');
    }

    public function Cargar()
	{
    	$id = $_POST['id_incidente'];

    	return view('Pic.nuevo',['id'=>$id]);
    }
}
