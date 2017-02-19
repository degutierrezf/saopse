@extends('layouts.app')

@section('htmlheader_title')
	Nuevo Accidente
@endsection

@section('contentheader_title')
	ACCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

<div class="row">
<div class="col-md-10">
              <!-- Horizontal Form -->
              <div class="box box-danger">

                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRO DE NUEVO ACCIDENTE -- INFORME PRELIMINAR --</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <form class="form-horizontal" name="form" action="{{ url('Accidentes/GuardarNuevo') }}" role="form" method="POST">
                  
                <div class="box-body">

                <div class="form-group">
	                  <label for="exampleInputEmail1" class="col-sm-2 control-label">Contrato:</label>
	                  	<div class="col-sm-10">
	                  	<select class="form-control pull-right" name="ruta">
	                  		<?php  foreach ($concesiones as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_ruta ?>"><?php echo $cs->nombre_conc ?> | <?php echo $cs->nombre_ruta ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	            </div>

				<div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-2 control-label">Accidente Mes:</label>
			                    <div class="col-sm-4">
			                    	<input type="text" class="form-control pull-right" name="num_acc">
			                   	</div>

			                <label for="exampleInputEmail1" class="col-sm-2 control-label">Fecha Accidente:</label>
			                    <div class="col-sm-4">
			                    	<input type="date" class="form-control pull-right" name="fecha">
			                   	</div>
		        </div>

		        <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-2 control-label">PK de la Ruta:</label>
			                    <div class="col-sm-2">
			                    	<input type="text" class="form-control pull-right" name="pk1">
			                   	</div>
			                   	<div class="col-sm-2">
			                    	<input type="text" class="form-control pull-right" name="pk2">
			                   	</div>
			                   	<label for="exampleInputEmail1" class="col-sm-2 control-label">Hora Accidente:</label>
			                    <div class="col-sm-4">
			                    	<input type="time" class="form-control pull-right" name="hora">
			                   	</div>
		        </div>

		        <div class="form-group">
	                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Comuna:</label>
	                  	<div class="col-sm-4">
	                  	<select class="form-control pull-right" name="comuna">
	                  		<?php  foreach ($comunas as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_comunas ?>"><?php echo $cs->comunas ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	                  	<label for="exampleInputEmail1" class="col-sm-1 control-label">Sector:</label>
			                    <div class="col-sm-5">
			                    	<input type="text" class="form-control pull-right" name="sector">
			                   	</div>
	            </div>
	            <hr>
	           	<div class="form-group">
	                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Calzada:</label>
	                  	<div class="col-sm-4">
	                  	<select class="form-control pull-right" name="calzada">
	                  		<?php  foreach ($cal as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_calzada ?>"><?php echo $cs->calzada ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	                  	<label for="exampleInputEmail1" class="col-sm-1 control-label">Sentido:</label>
			            <div class="col-sm-5">
	                  	<select class="form-control pull-right" name="sentido">
	                  		<?php  foreach ($sentido as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_sentido ?>"><?php echo $cs->sentido ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	            </div>

	           	<div class="form-group">
	                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Pistas Involucradas:</label>
	                  	<div class="col-sm-4">
	                  		<input type="text" class="form-control pull-right" name="pistas">
	                  	</div>

	                  	<label for="exampleInputEmail1" class="col-sm-2 control-label">Tipo Accidente:</label>
			            <div class="col-sm-4">
	                  	<select class="form-control pull-right" name="tipo_a">
	                  		<?php  foreach ($tipo as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_tipo_acc ?>"><?php echo $cs->tipo_acc ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	            </div>

	           	<div class="form-group">
	                    <label for="exampleInputEmail1" class="col-sm-2 control-label">Condición Tránsito:</label>
	                  	<div class="col-sm-10">
	                  		<input type="text" class="form-control pull-right" name="cond">
	                  	</div>	
	            </div>
	            <hr>
	         	<div class="form-group">
	                    <label for="exampleInputEmail1" class="col-sm-2 control-label">N° Fallecidos:</label>
	                  	<div class="col-sm-2">
	                  		<input type="text" class="form-control pull-right" name="fall">
	                  	</div>
	                  	<label for="exampleInputEmail1" class="col-sm-2 control-label">N° Lesionados:</label>
			            <div class="col-sm-2">
		                  	<input type="text" class="form-control pull-right" name="les">
	                  	</div>
	                  	<label for="exampleInputEmail1" class="col-sm-2 control-label">N° Vehículos:</label>
			            <div class="col-sm-2">
		                  	<input type="text" class="form-control pull-right" name="veh">
	                  	</div>

	            </div>

	           	<div class="form-group">

	           			<label for="exampleInputEmail1" class="col-sm-2 control-label">Ilesos:</label>
			            <div class="col-sm-2">
		                  	<input type="text" class="form-control pull-right" name="ile">
	                  	</div>

	                    <label for="exampleInputEmail1" class="col-sm-3 control-label">Daños Infraestructura:</label>
	                  	<div class="col-sm-5">
	                  	<select class="form-control pull-right" name="dannos">
	                  		<?php  foreach ($dannos as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_dannos ?>"><?php echo $cs->dannos ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	            </div>

	            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-2 control-label">Breve Descripción:</label>
			                    <div class="col-sm-10">
			                    	 <textarea class="form-control" name="desc" rows="3" placeholder="Descripción del Accidente hasta 150 Caracteres ..."></textarea>
			                </div>
		        </div>

	            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-2 control-label">Descripción del Evento:</label>
			                    <div class="col-sm-10">
			                    	 <textarea class="form-control" name="desc_e" rows="5" placeholder="Descripción del Accidente hasta 1500 Caracteres ..."></textarea>
			                </div>
		        </div>
		        <hr>
	           	<div class="form-group">

	           			<label for="exampleInputEmail1" class="col-sm-2 control-label">Responsable Información:</label>
			            <div class="col-sm-10">
	                  	<select class="form-control pull-right" name="respo">
	                  		<?php  foreach ($info as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_resp_info ?>"><?php echo $cs->nombre ?> || <?php echo $cs->telefono ?> || <?php echo $cs->correo ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	            </div>

	            <input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-danger pull-right">Ingresar Accidente</button>
                  </div>


	            </div>
	            </form>


</div>
</div>

<div class="col-md-2">
    <a class="btn btn-app btn" href="/Accidentes/Mostrar">
    <i class="fa fa-list-ul"></i> Ver lista de Accidentes
    </a>
</div>
</div>


@endsection
