<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cause;
use App\Client;
use App\User;
use DB;
use Session;
class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $abogados = User::orderBy('name')->get(); //accedemos al primer nombre de los abogados
      $causas = Cause::where('abogado',$abogados[0]->name) //cargamos las causas de este abogado
                ->orderBy('created_at', 'DESC')->get();
      $abogados = User::orderBy('name')->pluck('name','name'); //cargamos los nombres de los abogados para el select
      return view('cause',compact('causas','abogados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Client::select(
            DB::raw("CONCAT(nombre,' ',apellido) AS name"),'rut')
            ->orderBy('name')
            ->pluck('name', 'rut');
        $abogados = User::orderBy('name')->get()->pluck('name','name');
        return view('createcause',compact('clientes','abogados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'nombre' => 'required',
        'tipo' => 'required',
        'resumen' => 'required',
      ]);

      Cause::create($request->all());
      Session::flash('flash_message', 'Se ha creado exitosamente una causa');
      return redirect()->back();
    }

    /**
     * Send data from Cause with 'rut' selected
     */
    public function showCause(Request $req)
    {
       $data = $req->all();
       $causa =Cause::where('rut', $data['select']);
       return Response::json($causa);
    }


    public function show(Request $req)
    {
        $data = $req->all();
        $causas = Cause::where('abogado',$data['abogado'])->orderBy('created_at','DESC')->get();
        $abogados = User::orderBy('name')->pluck('name','name');
        return view('cause',compact('causas','abogados'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $data = $req->all();
        $causa = Cause::where('id',$data['id'])->get();
        $cli = Client::where('rut',$causa[0]->client_rut)->get();
        $clientes = Client::select(
            DB::raw("CONCAT(nombre,' ',apellido) AS name"),'rut')
            ->orderBy('created_at','DESC')
            ->pluck('name', 'rut');
        $abogados = User::orderBy('name')->pluck('name','name');
        return view('editcause3',compact('causa','cli','clientes','abogados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $causa = Cause::find($id);
        $this->validate($request, [
            'nombre' => 'required',
            'client_rut' => 'required',
            'abogado' => 'required',
            'tipo' => 'required'
        ]);
        $causa->nombre = $data['nombre'];
        $causa->tipo = $data['tipo'];
        $causa->resumen = $data['resumen'];
        $causa->client_rut = $data['client_rut'];
        $causa->abogado = $data['abogado'];
        $causa->save();
        Session::flash('flash_message', 'Se ha editado exitosamente una causa');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
      $id = $req->all()['id'];
      $causa = Cause::find($id);
      $causa->delete();
      Session::flash('flash_message', 'Se ha borrado exitosamente una causa');
      return redirect()->back();
    }
}
