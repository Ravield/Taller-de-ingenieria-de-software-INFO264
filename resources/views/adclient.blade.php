@extends('layouts.adminLayout')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Gestion de los clientes</small>
      </h1>
      <!--<div class="btn">
      	<button type="button" class="btn btn-primary btn-md">Agregar</button>
      </div>-->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <table class="table table-hover">
        <thead>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Rut</th>
          <th>Dirección</th>
          <th>Telefono</th>
          <th>Correo</th>
        </thead>
        <tbody>
          @foreach($clientes as $cliente)
          <tr>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->apellido}}</td>
            <td>{{$cliente->rut}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->correo}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </section>
  </div>
@stop
