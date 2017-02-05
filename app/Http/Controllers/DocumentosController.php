<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;

class DocumentosController extends Controller
{
   	public function index()
    {
        return view('Docs.index');
    }

    public function Cargar()
	{

		$id = $_POST['id_incidente'];

    	return view('Docs.nuevo',['id'=>$id]);
    }
}
