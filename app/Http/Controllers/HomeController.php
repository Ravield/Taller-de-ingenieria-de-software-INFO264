<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function adini()
    {
        return view('adini');
    }

    public function createclient()
    {
        return view('createclient');
    }

    public function adclient()
    {
        return view('adclient');
    }
    public function cause()
    {
        //como le enviamos las variables a la vista
        //$categories = Category::all(); //ej todas las categorias de todos los projectos
        //$categories = Category::where('project_id', 1)->get();
        //$users = User::all();
        return view('cause'); //para no estar repitiendo la misma palabra
        //compact enviamos un array asociativo a la vista
        /*return view('cause')->with('causes', $causes); como queremos que se reciba la variable
        en la vista y el nombre de la variable en si*/
    }
}
