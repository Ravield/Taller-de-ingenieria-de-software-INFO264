@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['url' => 'crearclientes']) !!}

<div class="content-wrapper">
  <section class="content-header">
    <h1>Clientes
      <small>Gestión de clientes</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('adini')}}"><i class="fa fa-home"></i> Inicio</a></li>
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
    <div class="form-group">
    {!! Form::label('nombre', 'Nombre (*)', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('apellido', 'Apellido (*)', ['class' => 'control-label']) !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('rut', 'Rut (*) (Reemplace k con 0)', ['class' => 'control-label']) !!}
    {!! Form::text('rut', 188878474, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('telefono', 'Teléfono', ['class' => 'control-label']) !!}
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
