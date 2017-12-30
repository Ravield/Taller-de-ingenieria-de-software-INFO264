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
      if ($request->hasFile('doc')){
        foreach($request->doc as $doc){
          $docname = $doc->getClientOriginalName();
          $docsize = $doc->getClientSize();
          $doc->storeAs('public',$docname);

          $docModel = new Document;
          $docModel->nombre = $docname;
          $docModel->tamaño = $docsize;
          $docModel->save();
        }
        return redirect()->back();
      }
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
        if (Storage::delete('public/nombre.pdf')){
          return 'File is deleted.';
        }
    }

    public function getDoc($docname)
    {
      //try
      //{
        return response()->download(Storage_path('app/public/'.$docname,null,[],null));

      //}
      //catch (\Exception $e)
      //{
        //return "File Not Found";
      //}

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
