<?php $__env->startSection('htmlheader_title'); ?>
	Aseguradoras
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	ASEGURADORAS - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Listado General de Aseguradoras</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Ejecutivo Contacto</th>
                  <th>Fono Ejecutivo</th>
                  <th>Contacto</th>
                  <th>Gestión</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($listado as $cs) { ?>
                  <tr>
                  <td><form action="<?php echo e(url('Aseguradoras/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_aseguradora" value="<?php echo $cs->id_aseguradora?>">
                        <button type="submit" ><?php echo $cs->id_aseguradora?></button></form>
                  </td>
                  <td><?php echo $cs->nombre_aseg?></td>
                  <td><?php echo $cs->nombre_contacto?></td>
                  <td><?php echo $cs->fono_contacto?></td>
                  <th><?php echo $cs->correo_contacto?></th>
                  <td><form action="<?php echo e(url('Aseguradoras/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_aseguradora" value="<?php echo $cs->id_aseguradora?>">
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
                  <th>Ejecutivo Contacto</th>
                  <th>Fono Ejecutivo</th>
                  <th>Contacto</th>
                  <th>Gestión</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>