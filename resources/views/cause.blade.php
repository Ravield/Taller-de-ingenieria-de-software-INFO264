@extends('layouts.adminLayout')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Causas
        <small>Gestion de Causas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active"><i class="fa fa-book"></i>Causas</li>
      </ol>
    </section>

    {!! Form::open(['url' => 'vercausaabogado', 'method' => 'GET']) !!}
    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Causas de</h3>
              {!! Form::select('abogado', $abogados, ['class' => 'form-control'] ) !!}
              {!! Form::submit('Ver Causas', ['class' => 'btn btn-primary']) !!}
              {!! Form::close() !!}
          </div>
          <div class="box-body">
            <table class="table table-hover">
              <thead>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Resumen</th>
                <th>Rut Cliente</th>
                <th>Abogado</th>
                <th>Acción</th>
              </thead>
              <tbody>

                @foreach($causas as $causa)
                <tr>
                  <td width="20%">{{$causa->nombre}}</td>
                  <td width="15%">{{$causa->tipo}}</td>
                  <td width="35%">{{$causa->resumen}}</td>
                  <td width="10%">{{$causa->client_rut}}</td>
                  <td width="15%">{{$causa->abogado}}</td>
                  <!--<td><a href="{{route('editcause3',$causa->id)}}" class="btn btn-info">Editar</a></td> -->
                  <td width="5%">
                    <form id="{{$causa->id}}" action="{{route('editcause3')}}" method="GET">
                      <input type="hidden" name="id" value={{$causa->id}} /></form>
                    <input form="{{$causa->id}}" type="submit" class="btn btn-primary" value="Editar" />
                  </td>
                  {!! Form::close() !!}
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </section>
  </div>


  <!-- /.content-wrapper -->

@stop
