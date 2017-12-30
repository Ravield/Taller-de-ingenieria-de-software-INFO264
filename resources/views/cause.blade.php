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
        <li class="active">Causas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <center>
          <h3>Causas de todos</h3>
      </center>
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
            <td>{{$causa->nombre}}</td>
            <td>{{$causa->tipo}}</td>
            <td>{{$causa->resumen}}</td>
            <td>{{$causa->client_rut}}</td>
            <td>{{$causa->abogado}}</td>
            <td><a href="{{route('editcause3',$causa->id)}}" class="btn btn-info">Editar</a></td> 
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>


  <!-- /.content-wrapper -->

@stop
