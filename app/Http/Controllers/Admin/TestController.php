<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
  public function index()
  {
    return 'Ruta /usuarios2 resuelta por TestController@index';
  }
}
