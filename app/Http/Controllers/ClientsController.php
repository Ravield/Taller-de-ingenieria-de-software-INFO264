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
}
