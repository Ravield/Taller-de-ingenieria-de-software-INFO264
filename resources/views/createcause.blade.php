@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['url' => 'crearcausas']) !!}

<div class="content-wrapper">
  <section class="content-header">
    <h1>Causas
      <small>Gestión de causas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('adini')}}"><i class="fa fa-home"></i>Inicio</a></li>
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
    {!! Form::label('cliente', 'Cliente', ['class' => 'control-label']) !!}
    {!! Form::select('client_rut', $clientes, null, ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
    {!! Form::label('nombre', 'Nombre (*)', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', 'Ej: Henriquez con Vega', ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::select('tipo', ['Otro'=>'Otro','Civil'=>'Civil', 'Familia'=>'Familia','Penal'=>'Penal',
          'Laboral'=>'Laboral','Corte de Apelaciones'=>'Corte de Apelaciones', 'Comercial'=>'Comercial'], null, ['class' => 'form-control'] ) !!}
    </div>
    <div class="form-group">
    {!! Form::label('resumen', 'Resumen (*)', ['class' => 'control-label']) !!}
    {!! Form::text('resumen', 'Sin descripción.', ['class' => 'form-control']) !!} <!-- input -->
    </div>
    <div class="form-group">
    {!! Form::label('abogado', 'Abogado', ['class' => 'control-label']) !!}
    {!! Form::select('abogado', $abogados, null, ['class' => 'form-control'] ) !!}
    </div>
    {!! Form::submit('Crear Nueva Causa', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
</section>
</div>

@stop
