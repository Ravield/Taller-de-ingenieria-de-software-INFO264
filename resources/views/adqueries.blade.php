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
        <li><a href="{{route('adini')}}"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Consultas</li>
      </ol>
    </section>
  <section class="content">
    <div class="form-group">
      {!! Form::open(['url' => 'verinfoconsultas']) !!}
      {!! Form::label('nombre', 'Inbox', ['class' => 'control-label']) !!}
      {!! Form::select('id', $consultas, ['class' => 'form-control'] ) !!}
      {!! Form::submit('Ver Consulta', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
    <div class="box box-primary">
      <div class="box-body">
        <h4>{{$cons[0]->asunto}}</h3>
        <table class="table">
          <!--<thead>
            <th></th>
            <th></th>
            <th></th>
          </thead>-->
          <tbody>
            <tr>
              <td width="10%"><b>{{$cons[0]->nombre}}</b></td>
              <td width="30%">{{$cons[0]->correo}}</td>
              <td width="10%">{{$cons[0]->estado}}</td>
            </tr>
          </tbody>
        </table><br>
        <table class="table">
            <tr>
              <td width="3%"></td>
              <td width="95%">{{$cons[0]->consulta}}</td>
            </tr>
          </tbody>
        </table><hr>
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
            </div >
          </section>
          @stop
