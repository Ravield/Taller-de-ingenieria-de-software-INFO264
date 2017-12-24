<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Document;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('uploadoc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->hasFile('file')){
        //$request->file('file');
        return $request->file = store('public/upload');
        //return $request->image->extension();  //extension, path
        //return $request->image->store('public');
        //return $request->file->storeAs('public','nombre.pdf');
        //return Storage::putFile('public',$request->file('image'));
      }
      /*}
      else{
        return 'No file selected';
      }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() //$id
    {
        //para jugar con los directorios
        //return Storage::allFiles('public'); //allFiles para todos incluso dentro de carpetas
        /*if(Storage::deleteDirectory('public/make')){//make,deleted <-- el if evita el error de retornar un booleano
          return 'Deleted';
        };*/
        //return Storage::lastModified('public/nombre.pdf');//size
        //return Storage::copy('public/nombre.pdf','nombre.pdf');//copy, move
        /*if (Storage::delete('public/nombre.pdf')){
          return 'File is deleted.';
        }*/
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
