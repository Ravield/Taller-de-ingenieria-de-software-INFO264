<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Document;
use App\Client;
use App\Cause;
use DB;
use Session;
class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
      $data = $r->all();
      $cli =$data['rutcliente'];
      $cliente = Client::where('rut',$cli)->get();
      $causa = Cause::where('id',$data['idcausa'])->get();
      $documentos = Document::where('idcausa',$causa[0]->id)->pluck('nombre','nombre');
      return view('uploadoc', compact('cliente','causa','documentos'));
    }

    public function documentClient(Request $req){
      $data = $req->all();
      $cli = $data['rutcliente'];
      $causas = Cause::where('client_rut',$cli)->pluck('nombre','id');
      $clientes = Client::select(
          DB::raw("CONCAT(nombre,' ',apellido) AS name"),'rut')
          ->orderBy('name')
          ->pluck('name', 'rut');
      $documentos = Document::where('idcausa',$causa->id);
      return view('uploadoc', compact('clientes','causas','documentos'));
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
      $data = $request->all();
      if ($request->hasFile('doc')){
        foreach($request->doc as $doc){
          $docname = $doc->getClientOriginalName();
          $docsize = $doc->getClientSize();
          $doc->storeAs('public',$docname);

          $docModel = new Document;
          $docModel->nombre = $docname;
          $docModel->tamaño = $docsize;
          $docModel->idcausa = $data['idcausa'];
          $docModel->save();
          Session::flash('flash_message', 'Se han agregado los archivos');
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

    public function getDoc(Request $req)
    {
      //try
      //{
        $data = $req->all();
        $archivo = "";
        try
        {
          $archivo = $data['archivo'];
        }catch(\Exception $e)
        {
            return redirect()->back();
        }
        return response()->download(Storage_path('app/public/'.$archivo,null,[],null));

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
