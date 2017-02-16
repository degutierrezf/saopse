<?php $__env->startSection('htmlheader_title'); ?>
	Nuevo Incidente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	INCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="row">
<div class="col-md-10">
              <!-- Horizontal Form -->
              <div class="box box-info">

                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRO DE NUEVO INCIDENTE</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="form" action="<?php echo e(url('Incidentes/GuardarNuevo')); ?>" role="form" method="POST">
                  
                  <div class="box-body">

	                  <div class="form-group">
	                  <label for="exampleInputEmail1" class="col-sm-3 control-label">Seleccione la Ruta:</label>
	                  	<div class="col-sm-8">
	                  	<select class="form-control pull-right" name="ruta">
	                  		<?php  foreach ($concesiones as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_ruta ?>"><?php echo $cs->nombre_conc ?> | <?php echo $cs->nombre_ruta ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	                </div>    

					<div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Fecha del Incidente:</label>
			                    <div class="col-sm-8">
			                    	<input type="date" class="form-control pull-right" name="fecha" required>
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Hora del Incidente:</label>
			                    <div class="col-sm-8">
			                    	<input type="time" class="form-control pull-right" name="hora">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">PK de la Ruta:</label>
			                    <div class="col-sm-1">
			                    	<input type="text" class="form-control pull-right" name="pk1">
			                   	</div>
			                   	<div class="col-sm-1">
			                    	<input type="text" class="form-control pull-right" name="pk2">
			                   	</div>
		            </div>


		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Calzada:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r1" value="Izquierda" class="minimal" checked> Izquierda <br>
			                    	 <input type="radio" name="r1" value="Derecha" class="minimal"> Derecha <br>
			                    	 <input type="radio" name="r1" value="Ambas" class="minimal"> Ambas
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Dirección:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r2" value="Norte - Sur" class="minimal" checked> Norte - Sur <br>
			                    	 <input type="radio" name="r2" value="Sur - Norte" class="minimal"> Sur - Norte <br>
			                    	 <input type="radio" name="r2" value="Ambas" class="minimal"> Ambas
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Tipo de Incidente:</label>
			                   	<div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="tipo">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Descripción del Incidente:</label>
			                    <div class="col-sm-8">
			                    	 <textarea class="form-control" name="desc" rows="5" placeholder="Descripción del Incidente hasta 500 Caracteres ..." required></textarea>
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Nota del Incidente:</label>
			                    <div class="col-sm-8">
			                    	 <textarea class="form-control" name="nota" rows="3" placeholder="Nota del Incidente hasta 200 Caracteres ..."></textarea>
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Daños:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r3" value="Si" class="minimal" checked> SI <br>
			                    	 <input type="radio" name="r3" value="No" class="minimal"> NO
			                   	</div>
		            </div>


					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Ingresar Incidente</button>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>