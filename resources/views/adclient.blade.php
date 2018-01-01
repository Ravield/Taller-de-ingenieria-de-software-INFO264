@extends('layouts.adminLayout')

@section('content')
{!! Form::open(['url' => 'verinfoclientes']) !!}
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Vista de los clientes y sus causas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Clientes</li>
      </ol>
    </section>

    <section class="content">
        <div class="form-group">
          {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
          {!! Form::select('rut', $clientes, ['class' => 'form-control'] ) !!}
          {!! Form::submit('Ver Info', ['class' => 'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Datos del Cliente</div>
          <div class="panel-body">
            <p id="nombrecliente">Nombre: {{$cli->nombre}} {{$cli->apellido}}</p>
            <p id="rutcliente">Rut: {{$cli->rut}}</p>
            <p id="direccioncliente">Dirección: {{$cli->direccion}}</p>
            <p id="telefonocliente">Teléfono: {{$cli->telefono}}</p>
            <p id="correocliente">Correo: {{$cli->correo}}</p>
          </div>
        </div>


        <div class="row">
        <div class="col col-md-12">
          <div class="panel panel-info">
            <div class="panel-heading">Datos de Causa</div>
            <div class="panel-body">
                <label>Nombre</label>
                <p>{{$causa->nombre}}</p>
                <label>Tipo</label>
                <p>{{$causa->tipo}}</p>
                <label>Resumen</label>
                <p>{{$causa->resumen}}</p>
                <label>Abogado a cargo</label>
                <p>{{$causa->abogado}}</p>
            </div>
          </div>
        </div><!-- End col 6 I -->
      </div><!-- End row -->

    </section>
    <!-- Main content -->

  </div>
@stop
