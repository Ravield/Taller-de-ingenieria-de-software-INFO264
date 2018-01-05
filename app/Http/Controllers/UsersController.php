<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cause;
use DB;
use Session;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function index(){
      $user = User::where('name', Auth::user()->name)->get();
      $causas = Cause::where('abogado',$user[0]->name)->count();
      return view('adusers',compact('user','causas'));
    }

    public function update(Request $req){
      $this->validate($req, [
        'name' => 'required',
        'email' => 'required|email',
      ]);

      $data = $req->all();
      $user = User::where('name',$data['nameoriginal'])->first();
      $causas = Cause::where('abogado',$data['nameoriginal'])->get();

      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      foreach ($causas as $causa) {
        $causa->abogado = $data['name'];
        $causa->save();
      }
      $user->name = $data['name'];
      $user->email = $data['email'];
      $user->save();
      DB::statement('SET FOREIGN_KEY_CHECKS=1');

      Session::flash('flash_message', 'Se han editado sus datos.');
      return redirect()->back();
    }
}
