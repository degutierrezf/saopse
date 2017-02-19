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
                  <h3 class="box-title">REGISTRO DE NUEVO DOCUMENTO</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="form" action="uploading" role="form" method="POST" enctype="multipart/form-data">
                  
                  <div class="box-body">

	                <P>INGRESANDO DOCUMENTOS PARA EL INCIDENTE <b>FOLIO N° <?php echo $id; ?> </b></P>  <br> 


		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Nombre:</label>
			                    <div class="col-sm-4">
			                    	<input type="text" class="form-control pull-right" name="nombre">
			                   	</div>
			                <label for="exampleInputEmail1" class="col-sm-1 control-label">Tipo:</label>
	                  			<div class="col-sm-3">
			                  	<select class="form-control pull-right" name="tipo">
				                    <option class="form-control pull-right" value="Poliza de Seguro">Póliza de Seguro</option>
				                    <option class="form-control pull-right" value="Soap">Soap</option>
				                    <option class="form-control pull-right" value="Parte">Parte</option>
				                    <option class="form-control pull-right" value="Judicial">Judicial</option>
				                    <option class="form-control pull-right" value="Otro">Otro</option>
			                  	</select>
			                  	</div>
		            </div>

		            <div class="form-group">
                  		<label for="exampleInputFile" class="col-sm-3 control-label">Archivo:</label>
                  		<input type="file" id="archivo" name="archivo">
                	</div>
                	<input type="hidden" name="id_incidente" value="<?php echo $id?>">
                	<input type="hidden" name="foto" value="Doc">
                	
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Documento</button>
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