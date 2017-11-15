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
      <div class="btn">
      	<button type="button" class="btn btn-primary btn-md">Agregar</button>
      </div>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Juan perez</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              <i class="fa fa-pencil"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<div class="box-header">
        		<h3 class="box-title">caso 1</h3>
        		<div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              		<i class="fa fa-pencil"></i></button>
            		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              		<i class="fa fa-times"></i></button>
          		</div>
        	</div>
          <!--Start creating your amazing application!-->
        </div>
        <div class="box-body">
        	<div class="box-header">
        		<h3 class="box-title">caso 2</h3>
        		<div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              		<i class="fa fa-pencil"></i></button>
            		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              		<i class="fa fa-times"></i></button>
          		</div>
        	</div>
          <!--Start creating your amazing application!-->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Fecha de ultima modificacion
          <div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Agregar caso">
              		<i class="fa fa-plus fa-2"></i></button>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Angela Rodriguez </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              <i class="fa fa-pencil"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        	<div class="box-header">
        		<h3 class="box-title">caso 1</h3>
        		<div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              		<i class="fa fa-pencil"></i></button>
            		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              		<i class="fa fa-times"></i></button>
          		</div>
        	</div>
          <!--Start creating your amazing application!-->
        </div>
        <div class="box-body">
        	<div class="box-header">
        		<h3 class="box-title">caso 2</h3>
        		<div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Modificar">
              		<i class="fa fa-pencil"></i></button>
            		<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              		<i class="fa fa-times"></i></button>
          		</div>
        	</div>
          <!--Start creating your amazing application!-->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Fecha de ultima modificacion
          <div class="box-tools pull-right">
            		<button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Agregar caso">
              		<i class="fa fa-plus fa-2"></i></button>
          </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop

