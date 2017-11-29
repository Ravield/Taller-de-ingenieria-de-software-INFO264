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
}
