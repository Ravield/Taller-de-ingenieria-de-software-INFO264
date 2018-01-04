<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cause;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function index(){
      $users = User::orderby('name')->pluck('name','name');
      $user = Auth::user()->name;
      $causas = Cause::where('abogado',$user)->count();
      return view('adusers',compact('users','user','causas'));
    }
}
