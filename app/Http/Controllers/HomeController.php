<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /* cuando definimos un middleware en el constructor de un controlador, afectara
    a todos los metodos dentro del controlador*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //acesso a clientes
     public function client()
    {
        return view('client');
    }
}
