@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['files' => true, 'action' => 'DocumentsController@store']) !!}
<div class="content-wrapper">
  <section class="content-header">
    <h1>Documentos
      <small>Documentos</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active">Documentos</li>
    </ol>
  </section>

<!-- Contenido Principal-->
<section class="content">
  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Subir Documento</h3>
        </div>
        <div class="box-body">
    <!--@if(Session::has('flash_message'))

      <div class="alert alert-success">
      {{ Session::get('flash_message') }}
      </div>
    @endif-->
    @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
    @endif
    <div class="form-group">
      {{csrf_field()}}
      {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
      {!! Form::file('doc', null, ['class' => 'form-control']) !!}<br>
      {!! Form::submit('Subir Documento', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>

    
</section>
</div>



@stop
