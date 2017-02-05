@extends('layouts.app')

@section('htmlheader_title')
	Nueva Gestión
@endsection

@section('contentheader_title')
	GESTIÓN DE INCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

<div class="row">
<div class="col-md-10">
              <!-- Horizontal Form -->
              <div class="box box-info">

                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRO DE NUEVA GESTIÓN</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="form" action="{{ url('Gestiones/Guardar') }}" role="form" method="POST">
                  
                  <div class="box-body">

	                <P>INGRESANDO GESTIÓN PARA EL INCIDENTE <b>FOLIO N° <?php echo $id?></b></P>  <br> 

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Tipo de Gestión:</label>
			                    <div class="col-sm-5">
			                    	<input type="text" class="form-control pull-right" name="tipo_gestion">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Descripción de la Gestión:</label>
			                    <div class="col-sm-8">
			                    	 <textarea class="form-control" name="d_gestion" rows="3" placeholder="Descripcion de la gestión relizada hasta 200 Caracteres ..."></textarea>
			                   	</div>
		            </div>

		            <input type="hidden" name="id_incidente" value="<?php echo $id?>">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Ingresar Gestión</button>
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
