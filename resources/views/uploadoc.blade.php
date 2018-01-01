@extends('layouts.adminLayout')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>Documentos
      <small>Documentos</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
      <li><a href="#"><i class="fa fa-book"></i> Causas y Documentos</a></li>
      <li class="active">Documentos</li>
    </ol>
  </section>

<!-- Contenido Principal-->
<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Documentos de Causa</h3>
    </div>
    <div class="box-body">
      <!--Aca va el primer form para descargar archivos. Se Pueden sacar los inputs del nombre cliente y causa-->
      {!! Form::open(array('method' => 'GET', 'action' => 'DocumentsController@getDoc')) !!}
      <div class="form-group">
        {!! Form::label('cliente', 'Nombre Cliente', ['class' => 'control-label']) !!}
        {!! Form::text('cli', "".$cliente[0]->nombre." ".$cliente[0]->apellido ,['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('causa', 'Causa', ['class' => 'control-label']) !!}
        {!! Form::text('causa', $causa[0]->nombre , ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('arch', 'Documentos de la causa', ['class' => 'control-label']) !!}
        {!! Form::select('archivo', $documentos ,null, ['class' => 'form-control']) !!}
        {!! Form::submit('Descargar Documento', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <!-- Subir archivos -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Subir Documento a la Causa</h3>
    </div>
    <!--Aca va el 2° form para subir archivos. Los hidden contienen los valores para almacenar-->
    <div class="box-body">
    @if(Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
      </div>
    @endif
    @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
    @endif

    {!! Form::open(['files' => true, 'action' => 'DocumentsController@store']) !!}

    <div class="form-group">

      {{csrf_field()}}
      {!! Form::hidden('idcausa', $causa[0]->id, ['class' => 'form-control']) !!}
      {!! Form::label('nombre', 'Seleccione archivo(s)', ['class' => 'control-label']) !!}
      <!--{!! Form::file('doc', null, ['class' => 'form-control']) !!}<br>-->
      <input type = "file" class = "form-control" name="doc[]" multiple><br> <!-- arreglin-->
      {!! Form::submit('Subir Documento', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>


</section>
</div>



@stop
