<?php $__env->startSection('htmlheader_title'); ?>
	Concesiones
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	CONCESIONES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>


<div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">

          </h2>
        </div>
        <!-- /.col -->
      </div>

<div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Listado General de Concesiones / Rutas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Ruta</th>
                  <th>Ficha</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($listado as $cs) { ?>
                  <tr>
                  <td><form action="<?php echo e(url('Aseguradoras/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_conc" value="<?php echo $cs->id_conc?>">
                        <button type="submit" ><?php echo $cs->id_conc?></button></form>
                  </td>
                  <td><?php echo $cs->nombre_conc?></td>
                  <td><?php echo $cs->nombre_ruta?></td>
                  <td><form action="<?php echo e(url('Aseguradoras/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_conc" value="<?php echo $cs->id_conc?>">
                        <button type="submit" >VER FICHA</button></form>
                  </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Ruta</th>
                  <th>Ficha</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>