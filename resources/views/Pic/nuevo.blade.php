@extends('layouts.app')

@section('htmlheader_title')
	Nuevo Registro Fotográfico
@endsection

@section('contentheader_title')
	INCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

<div class="row">
<div class="col-md-10">
              <!-- Horizontal Form -->
              <div class="box box-info">

                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRO FOTOGRÁFICO</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <form class="form-horizontal" name="form" action="uploading" role="form" method="POST" enctype="multipart/form-data">
                  
                  <div class="box-body">

	                <P>INGRESANDO REGISTRO FOTOGRÁFICO PARA EL INCIDENTE <b><?php echo $id; ?></b></P>  <br> 


		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Nombre:</label>
			                    <div class="col-sm-4">
			                    	<input type="text" class="form-control pull-right" name="nombre">
			                   	</div>
		            </div>

		            <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-3 control-label">Archivo:</label>
                      <input type="file" id="archivo" name="archivo">
                  </div>
                  <input type="hidden" name="foto" value="foto">
                  <input type="hidden" name="id_incidente" value="<?php echo $id?>">
					         <input type="hidden" name="_token" value="{{ csrf_token() }}">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Fotografía</button>
                  </div><!-- /.box-footer -->

				</div>
                </form><!-- /.box -->
</div>

<div class="col-md-2">
    <a class="btn btn-app btn" href="/Incidentes/Mostrar">
    <i class="fa fa-list-ul"></i> Ver lista de Incidentes
    </a>
</div>
</div>


@endsection
