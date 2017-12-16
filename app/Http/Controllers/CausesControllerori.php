<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cause;

class CausesController extends Controller
{
  public function showCauses(){
      $causas = Cause::orderBy('nombre')->get();
      return view('cause',compact('causas'));
  }
  /*public function addCause(Request $req){
      $data = $req->all();
      $cause = Cause::create([
      'id' => $data['id'],
      'nombre' => $data['nombre'],
      'tipo' => $data['tipo'],
      'resumen' => $data['resumen'],
      'cause_id' => $data['cause_id'],
      ]);
      $cause->save();
      return Response::json($cause);
}*/

}
