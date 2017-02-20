<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        //Estado 1 Realizado, 2 Por Realizar, 3 Eliminado
        $date = date('Y-m-d');

        $gestiones = DB::table('sp_gestiones')
            ->where([
                ['fec_record','like', $date],
                ['estado', '=', 2]])
            ->get();

        return view('home', ['ges'=>$gestiones]);
    }
}