@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['url' => 'crearcausas']) !!}

<div class="content-wrapper">
  <section class="content-header">
    <h1>Clientes
      <small>Gestión de Causas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i>Inicio</a></li>
      <li class="active">Causas</li>
    </ol>
  </section>

<!-- Contenido Principal-->
<section class="content">
  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Causas</h3>
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
    {!! Form::select('nombre', $clientes, ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('resumen', 'Resumen', ['class' => 'control-label']) !!}
    {!! Form::text('resumen', null, ['class' => 'form-control']) !!} <!-- input -->
    </div>
    {!! Form::submit('Crear Nueva Causa', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
</section>
</div>

@stop
