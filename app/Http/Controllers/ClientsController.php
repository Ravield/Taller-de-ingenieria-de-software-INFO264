<?php

namespace App\Http\Controllers; //+ccontroller

use App\Client;
use App\Cause;
use Illuminate\Http\Request;
use Session;
use DB;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$clientes = Client::orderBy('nombre')->get();
      $clientes = Client::select(
          DB::raw("CONCAT(nombre,' ',apellido) AS name"),'rut','created_at')
          ->orderBy('created_at','DESC')
          ->pluck('name', 'rut');
      $cli =$clientes;
      //obtenemos el primer cliente y mostramos su info
      $cli = Client::orderBy('created_at','DESC')->first();
      $causa = Cause::where('client_rut',$cli->rut)->first();

      //si el cliente no ha hecho Causas entonces retorna una causa genérica
      if($causa==null){
        $causa = array(
          'nombre' => 'Nombre de Causa',
          'tipo' => 'Tipo de Causa',
          'resumen' => 'Resumen',
          'abogado' => 'Nombre de Abogado'
        );
        $causa = (object)$causa;
      }

      return view('adclient',compact('clientes','cli','causa'));
    }

    /*
    * return view with client information & cause information
    */
    public function infoclients(Request $req)
    {
      $data = $req->all();
      $clientes = Client::select(
          DB::raw("CONCAT(nombre,' ',apellido) AS name"),'rut','created_at')
          ->orderBy('created_at','DESC')
          ->pluck('name', 'rut');

      $cli = Client::where('rut', $data['rut'])->firstOrFail();
      $causa = Cause::where('client_rut',$cli->rut)->first();
      //si el cliente no registra causa, envia una causa genérica
      if($causa==null){
        $causa = array(
          'nombre' => ' ',
          'tipo' => ' ',
          'resumen' => ' ',
          'abogado' => ' '
        );
        $causa = (object)$causa;
      }
      return view('adclient',compact('clientes','cli','causa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [  //aqui tengo la validacion que soy gilo
        'nombre' => 'required',
        'apellido' => 'required',
        'rut' => 'required|unique:clients',
        'correo' => 'required|email',
      ]);
      Client::create($request->all());
      Session::flash('flash_message', 'Se ha creado exitosamente un cliente');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
      $client = Article::find($id);
      return view('articles.show',compact('article'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
