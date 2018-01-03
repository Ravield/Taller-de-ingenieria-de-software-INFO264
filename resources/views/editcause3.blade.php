@extends('layouts.adminLayout')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Sección de Causas
      <small>Gestión de Causas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
      <li><i class="fa fa-book"></i>Causas</li>
      <li class="active">Editar Causa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!--
    <div class="panel panel-success">
      <div class="panel-heading">Datos del Cliente</div>
      <div class="panel-body">
        <p id="nombrecliente">Nombre: {{$cli[0]->nombre}} {{$cli[0]->apellido}}</p>
        <p id="rutcliente">Rut: {{$cli[0]->rut}}</p>
        <p id="direccioncliente">Dirección: {{$cli[0]->direccion}}</p>
        <p id="telefonocliente">Teléfono: {{$cli[0]->telefono}}</p>
        <p id="correocliente">Correo: {{$cli[0]->correo}}</p>
      </div>
    </div> -->
    <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Causa</h3>
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
        <!-- {!! Form::model($causa[0], [
            'method' => 'PUT',
            'route' => ['updatecause', $causa[0]->id]
        ]) !!} -->
        {!! Form::open(['route' => ['updatecause', $causa[0]->id], 'method' => 'PUT']) !!}
        <div class="form-group">
        <!--{!! Form::hidden('id',$causa[0]->id, ['class' => 'form-control'])!!}-->
        {!! Form::label('nombre', 'Nombre de Causa', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!} <!-- input -->
        </div>
        <div class="form-group">
        {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
        {!! Form::select('tipo', ['Civil'=>'Civil', 'Familia'=>'Familia','Penal'=>'Penal',
              'Laboral'=>'Laboral','Corte de Apelaciones'=>'Corte de Apelaciones', 'Comercial'=>'Comercial',
              'Otro'=>'Otro'], null, ['class' => 'form-control'] ) !!}
        </div>
        <div class="form-group">
        {!! Form::label('resumen', 'Resumen', ['class' => 'control-label']) !!}
        {!! Form::text('resumen', null, ['class' => 'form-control']) !!} <!-- input -->
        </div>
        <div class="form-group">
        {!! Form::label('cliente', 'Cliente ', ['class' => 'control-label']) !!}
        {!! Form::select('client_rut', $clientes, $cli[0]->rut, ['class' => 'form-control'] ) !!}
        </div>
        <div class="form-group">
        {!! Form::label('abogado', 'Abogado a Cargo: ', ['class' => 'control-label']) !!}
        {!! Form::select('abogado', $abogados, $causa[0]->abogado, ['class' => 'form-control'] ) !!}
        </div>
        {!! Form::submit('Editar Causa', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </section>
</div>
@stop
