<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
  public function showClients(){
      $clientes = Client::orderBy('nombre')->get();
      return view('adclient',compact('clientes'));
  }

  public function crearCliente(Request $req){
    $data = $req->all();
    $cli = Cliente::create([
    'nombre' => $data['nombre'],
    'rut' => $data['rut'],
    'direccion' => $data['direccion'],
    'telefono' => $data['telefono'],
    'correo' => $data['correo'],
    ]);
    $cli->save();
    return Response::json($cli);
  }
}
