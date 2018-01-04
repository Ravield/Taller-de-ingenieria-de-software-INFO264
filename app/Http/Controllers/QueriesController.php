<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Query;
use Session;
use DB;
class QueriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $consultas = Query::select(
           DB::raw("CONCAT(asunto,' ',estado) AS name"),'id','created_at')
           ->orderBy('created_at','DESC')
           ->pluck('name', 'id');
       //$consultas =(object)$consultas;
       $cons = $consultas;
       //$cons = Query::orderBy('created_at','DESC')->get();
       return view('adqueries', compact('consultas','cons'));
     }

     public function infoqueries(Request $req)
     {
       $data = $req->all();
       $consultas = Query::select(
           DB::raw("CONCAT(asunto,' ',estado) AS name"),'id','created_at')
           ->orderBy('created_at','DESC')
           ->pluck('name', 'id');

       $cons = Query::where('id', $data['id'])->get();
       if($cons==null) return redirect()->back();
       return view('adqueries',compact('consultas','cons'));
     }

    /*public function index()
    {
        $consultas = Query::orderBy('created_at','DESC')->get();
        return view('adqueries',compact('consultas'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
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
        'correo' => 'required|email',
        'asunto' => 'required',
        'consulta' => 'required',
      ]);
      Query::create($request->all());
      Session::flash('flash_message', 'Se ha enviado tu consulta.');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
