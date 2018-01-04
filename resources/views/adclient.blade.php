@extends('layouts.adminLayout')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Gestión de los clientes y sus causas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Clientes</li>
      </ol>
    </section>

    <section class="content">
        <div class="form-group">
          {!! Form::open(['url' => 'verinfoclientes']) !!}
          {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
          {!! Form::select('rut', $clientes, ['class' => 'form-control'] ) !!}
          {!! Form::submit('Ver Info', ['class' => 'btn btn-primary']) !!}
          {!! Form::close() !!}
        </div>
        <div class="panel panel-success">
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
          <div class="panel-heading">Datos del Cliente</div>
          <div class="panel-body">
            <p id="nombrecliente">Nombre: {{$cli->nombre}} {{$cli->apellido}}</p>
            <p id="rutcliente">Rut: {{$cli->rut}}</p>
            <p id="direccioncliente">Dirección: {{$cli->direccion}}</p>
            <p id="telefonocliente">Teléfono: {{$cli->telefono}}</p>
            <p id="correocliente">Correo: {{$cli->correo}}</p>
          </div>
          <div class="panel panel-default">
            <div class="panel-footer">
              <form id="edit{{$cli->id}}" action="{{route('editclient')}}" method="GET">
                <input type="hidden" name="id" value={{$cli->id}} /></form>
              <form id="del{{$cli->id}}" method="GET" action="{{route('deleteclient')}}" >
                <input type="hidden" name="id" value={{$cli->id}} /></form>

              <input form="edit{{$cli->id}}" type="submit" class="btn btn-primary" value="Editar" />
              <input form="del{{$cli->id}}" type="submit" class="btn btn-danger" value="Borrar" />


              <!--{!! Form::open(['url' => 'verinfoclientes']) !!}
              {!! Form::hidden('client_id', $cli->id ,['class' => 'form-control'])!!}
              {!! Form::submit('Editar Cliente', ['class' => 'btn btn-info']) !!}
              {!! Form::close() !!}

              {!! Form::open(['url' => 'verinfoclientes']) !!}
              {!! Form::hidden('client_id', $cli->id ,['class' => 'form-control'])!!}
              {!! Form::submit('Eliminar Cliente', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!} -->
            </div>
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
