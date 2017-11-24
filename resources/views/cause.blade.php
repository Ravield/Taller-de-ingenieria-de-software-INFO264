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
      <!--<div class="btn">
      	<button type="button" class="btn btn-primary btn-md">Agregar</button>
      </div>-->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Causas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="alert alert-info">
        <strong>No hay causas</strong>.
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

@stop
