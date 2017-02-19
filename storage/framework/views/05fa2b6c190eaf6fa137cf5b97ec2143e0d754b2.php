<?php $__env->startSection('htmlheader_title'); ?>
	Mostrar Accidentes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	Mostrar Accidentes - Administrador
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">N° Accidentes Totales</span>
              <span class="info-box-number"> <?php echo $totales; ?> </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-close"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">N° Accidentes CON Daño</span>
              <span class="info-box-number"> <?php echo $d; ?> </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">N° Accidentes SIN Daño</span>
              <span class="info-box-number"><?php echo $sd; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-asterisk"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Accidentes Abiertos</span>
              <span class="info-box-number"><?php echo $a; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
</div>

<div class="info-box">
            <div class="box-header">
              <h3 class="box-title">Listado General de Accidentes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Fecha / Hora</th>
                  <th>Concesión / Ruta</th>
                  <th>PK1 / PK 2</th>
                  <th>Corte de Transito</th>
                  <th>¿By Pass?</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($listado as $cs) { ?>
                  <tr>
                  <td><form action="<?php echo e(url('Accidentes/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                        <button type="submit" ><?php echo $cs->id_accidente?></button></form>
                  </td>
                  <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                  <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                  <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                  <td><?php echo $cs->ct_ini?> - <?php echo $cs->ct_fin?></td>
                  <th><?php echo $cs->by_pass?></th>
                  <td><form action="<?php echo e(url('Accidentes/Detalles')); ?>" role="form" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                        <button type="submit" >VER FICHA</button></form>
                  </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Fecha / Hora</th>
                  <th>Concesión / Ruta</th>
                  <th>PK1 / PK 2</th>
                  <th>Corte de Transito</th>
                  <th>¿By Pass?</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>