@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['url' => 'crearclientes']) !!}

<div class="content-wrapper">
  <section class="content-header">
    <h1>Clientes
      <small>Gestion de los clientes</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
      <li class="active">Clientes</li>
    </ol>
  </section>

<!-- Contenido Principal-->
<section class="content">
  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Cliente</h3>
        </div>
        <div class="box-body">
    <div class="form-group">
    @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
    @endif
    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('rut', 'Rut', ['class' => 'control-label']) !!}
    {!! Form::text('rut', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('telefono', 'Telefono', ['class' => 'control-label']) !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('correo', 'Correo', ['class' => 'control-label']) !!}
    {!! Form::text('correo', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    {!! Form::submit('Crear Nuevo Cliente', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
</section>
</div>

@stop
