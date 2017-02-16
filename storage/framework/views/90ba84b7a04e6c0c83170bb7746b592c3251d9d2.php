<?php $__env->startSection('htmlheader_title'); ?>
	Nuevo Automovil
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
                  <h3 class="box-title">REGISTRO DE NUEVO AUTOMOVIL</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="form" action="<?php echo e(url('Autos/Guardar')); ?>" role="form" method="POST">
                  
                  <div class="box-body">

	                <P>INGRESANDO AUTOMOVIL INVOLUCRADO PARA EL INCIDENTE <b>FOLIO N° <?php echo $id?></b></P>  <br> 

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Marca:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="marca">
			                   	</div>

			                <label for="exampleInputEmail1" class="col-sm-1 control-label">Modelo:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="modelo">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Placa Patente:</label>
			                    <div class="col-sm-2">
			                    	<input type="text" class="form-control pull-right" name="pp1">
			                   	</div>
			                   	<div class="col-sm-1">
			                    	<input type="text" class="form-control pull-right" name="pp2">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Propietario:</label>
			                    <div class="col-sm-8">
			                    	<input type="text" class="form-control pull-right" name="propietario">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">RUT:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="rut">
			                   	</div>
		            </div>


		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Dirección:</label>
			                    <div class="col-sm-4">
			                    	<input type="text" class="form-control pull-right" name="direccion">
			                   	</div>

			                <label for="exampleInputEmail1" class="col-sm-1 control-label">Comuna:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="comuna">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Fono:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="fono">
			                   	</div>

			                <label for="exampleInputEmail1" class="col-sm-2 control-label">Celular:</label>
			                    <div class="col-sm-3">
			                    	<input type="text" class="form-control pull-right" name="celular">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Correo Electrónico:</label>
			                    <div class="col-sm-8">
			                    	<input type="text" class="form-control pull-right" name="correo">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">N° Póliza:</label>
			                    <div class="col-sm-4">
			                    	<input type="text" class="form-control pull-right" name="poliza">
			                   	</div>
			                <label for="exampleInputEmail1" class="col-sm-1 control-label">Aseguradora:</label>
	                  			<div class="col-sm-3">
			                  	<select class="form-control pull-right" name="aseguradora">
		                  		<?php  foreach ($as as $cs) { ?>
		                  			<option class="form-control pull-right" value="<?php echo $cs->id_aseguradora ?>"><?php echo $cs->nombre_aseg ?></option>
								<?php }
								?>
		                  		</select>
			                  	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Daño en Vehículo:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r1" value="Si" class="minimal" checked> SI <br>
			                    	 <input type="radio" name="r1" value="No" class="minimal"> NO <br>
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Descripción de Daños:</label>
			                    <div class="col-sm-8">
			                    	 <textarea class="form-control" name="d_dannos" rows="3" placeholder="Descripcion de los daños del vehículo hasta 200 Caracteres ..."></textarea>
			                   	</div>
		            </div>

		            <input type="hidden" name="id_incidente" value="<?php echo $id?>">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right" onClick="esrut(document.form.rut.value)">Ingresar Automovil</button>
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