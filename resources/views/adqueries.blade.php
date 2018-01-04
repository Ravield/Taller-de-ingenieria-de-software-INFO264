@extends('layouts.adminLayout')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consultas
        <small>Gestión de Consultas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Consultas</li>
      </ol>
    </section>
  <section class="content">
    <div class="form-group">
      {!! Form::open(['url' => 'verinfoconsultas']) !!}
      {!! Form::label('nombre', 'Nombre', ['class' => 'control-label']) !!}
      {!! Form::select('id', $consultas, ['class' => 'form-control'] ) !!}
      {!! Form::submit('Ver Info', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <div class="row">
      <div class="col col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">Estado {{$cons[0]->estado}}</div>
              <div class="panel-body">
                <label>Nombre</label>
                <p>{{$cons[0]->nombre}}</p>
                <label>Correo</label>
                <p>{{$cons[0]->correo}}</p>
                <label>Asunto</label>
                <p>{{$cons[0]->asunto}}</p>
                <label>Consulta</label>
                <p>{{$cons[0]->consulta}}</p>
              </div>
        </div>
      </div>
    </div>
    <!-- Formulario de Respuesta -->
    <form id="sendMail{{$cons[0]->id}}" action="{{route('sendanswer')}}" method="GET">
      <input type="hidden" name="id" value={{$cons[0]->id}}/>
      <div class="row">
        <div class="col col-md-8">
          <div class="panel panel-info">
            <div class="panel-heading">Responder</div>
                <div class="panel-body">
                  <div class="form-group">
                      {!! Form::label('respuesta', 'Respuesta', ['class' => 'control-label']) !!}
                      {!! Form::textarea('respuesta', null, ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                  </form>
                  </div>
                </div>
              </div>
            </div<>
          </section>
          @stop
