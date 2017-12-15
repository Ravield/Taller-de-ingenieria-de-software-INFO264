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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <!--<li><a href="#">Examples</a></li>-->
        <li class="active">Clientes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Cliente</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($clientes as $cliente)
            {{$cliente->nombre}}
            @endforeach
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="example-text-input">Nombre</label>
                  <input type="text" class="form-control" id="example-text-input" placeholder="Ej: Jorge Perez">
                </div>
                <div class="form-group">
                  <label for="example-text-input">Rut</label>
                  <input type="text" class="form-control" id="example-text-input" placeholder="18887847-4">
                </div>
                <div class="form-group">
                  <label for="example-text-input">Dirección</label>
                  <input type="text" class="form-control" id="example-text-input" placeholder="">
                </div>
                <div class="form-group">
                  <label for="example-tel-input">Telefono</label>
                  <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop
