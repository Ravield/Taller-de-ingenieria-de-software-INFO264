@extends('layouts.adminLayout')

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administración
        <small>Gestión de los abogados</small>
      </h1>
      <div class="btn">
      	<button type="button" class="btn btn-primary btn-md">Agregar nuevo Abogado</button>
      </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Administración</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="panel panel-info">
        <div class="panel-heading">Datos de Abogado</div>
        <div class="panel-body">
            <label>Nombre</label>
            <p>{{$user}}</p>
            <label>Causas Realizadas</label>
            <p>{{$causas}}</p>
        </div>
      </div>
      <!-- Default box -->
      <!--
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Nombre</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              <i class="fa fa-pencil"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<div class="box-header">
        		<h3 class="box-title">Causas Realizadas: </h3>
        	  <div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              		<i class="fa fa-pencil"></i></button>
            		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              		<i class="fa fa-times"></i></button>
          	</div>
        	</div>

        </div>

        <div class="box-footer">
          Fecha de ultima modificacion
          <div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Agregar caso">
              		<i class="fa fa-plus fa-2"></i></button>
          </div>
        </div>

      </div>
      -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop
