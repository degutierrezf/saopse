<?php $__env->startSection('htmlheader_title'); ?>
    Detalle Accidente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
    ACCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-road"></i> RUTA: <?php echo $inc->nombre_conc?> - <?php echo $inc->nombre_ruta?>
                    <small class="pull-right">Fecha: <?php echo $inc->fecha?> - Hora: <?php echo $inc->hora?></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
                <img src="/img/logo_saopse.png" alt="">
            </div>
            <!-- /.col -->
            <div class="col-sm-5 invoice-col">
                <strong>ANTECEDENTES:</strong>
                <table class="table table-striped">
                    <tr>
                        <td><b>ID</b></td>
                        <td>:</td>
                        <td>NDI-CVAL-CC <?php echo $inc->id_accidente?></td>
                    </tr>
                    <tr>
                        <td><b>FOLIO</b></td>
                        <td>:</td>
                        <td>NDI-CVAL-CC <?php echo $inc->num_acc_mes?></td>
                    </tr>
                    <tr>
                        <td><b>PK</b></td>
                        <td>:</td>
                        <td><?php echo $inc->pk1?>+<?php echo $inc->pk2?></td>
                    </tr>
                    <tr>
                        <td><b>CALZADA</b></td>
                        <td>:</td>
                        <td><?php echo $inc->calzada?></td>
                    </tr>
                    <tr>
                        <td><b>SENTIDO</b></td>
                        <td>:</td>
                        <td><?php echo $inc->sentido?></td>
                    </tr>
                </table>

            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <strong>ACCIDENTE:</strong>
                <table class="table table-striped">
                    <tr>
                        <td><b>TIPO INCIDENTE</b></td>
                        <td>:</td>
                        <td><?php echo $inc->tipo_acc?></td>
                    </tr>
                    <tr>
                        <td><b>DAÑOS</b></td>
                        <td>:</td>
                        <td><?php echo $inc->dannos?></td>
                    </tr>
                    <tr>
                        <td><b>ESTADO</b></td>
                        <td>:</td>
                        <td><?php echo $inc->estados?></td>
                    </tr>
                </table>
                <center>

                    <button type="button" class="btn btn-xs"><i class="fa fa-envelope-o"></i> Generar Carta de Cobro
                    </button>
                    &nbsp;&nbsp;&nbsp;

                    <button type="button" class="btn btn-xs"><i class="fa fa-file-pdf-o"></i> Generar Cotización
                    </button>
                    <br><br>
                    <button type="button" class="btn btn-success btn-xs"><i class="fa fa-file-pdf-o"></i> Imprimir
                        Informe
                    </button>

                    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-file-pdf-o"></i> Imprimir en
                        PDF
                    </button>

                </center>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <center><h2>FORMULARIO FICHA DE ACCIDENTES</h2></center>

        <hr>
        <center>
            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#materiales"><i
                        class="fa fa-plus"></i> Agregar Vehículos Involucrados
            </button>

            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#personal"><i
                        class="fa fa-plus"></i> Agregar Documentos
            </button>

            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#maquinaria"><i
                        class="fa fa-plus"></i> Agregar Croquis Accidente
            </button>

            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#maquinaria"><i
                        class="fa fa-plus"></i> Agregar Fotografías
            </button>

            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gestiones"><i
                        class="fa fa-pencil"></i> Agregar Gestiones
            </button>
        </center>

        <hr>
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-car"></i> <b>VEHÍCULOS INVOLUCRADOS:</b>
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#materiales">
                        <i class="fa fa-automobile"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Marca - Modelo</th>
                        <th>Placa Patente</th>
                        <th>Propietario</th>
                        <th>Rut</th>
                        <th>Fono Contacto</th>
                        <th>N° Póliza</th>
                        <th>Aseguradora</th>
                        <th>Detalles</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($au as $cs) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $cs->marca?> <?php echo $cs->modelo?></td>
                        <td><?php echo $cs->placa?></td>
                        <td><?php echo $cs->propietario?></td>
                        <td><?php echo $cs->rut_prop?></td>
                        <td><?php echo $cs->fono?></td>
                        <td><?php echo $cs->num_poliza?></td>
                        <td><?php echo $cs->nombre_aseg?></td>
                        <td><?php echo $cs->dannos_v?></td>
                    </tr>
                    <?php }  ?>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <hr>
        <div class="row">
            <!-- accepted payments column -->

            <div class="col-xs-6">
                <p class="lead"><i class="fa fa-edit"></i> <b>DETALLE:</b></p>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    <?php echo $inc->descripcion?>
                </p>
            </div>

            <div class="col-xs-6">
                <p class="lead"><i class="fa fa-pencil"></i> <b>NOTAS:</b></p>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    <?php echo $inc->descripcion?>
                </p>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-file"></i> <b>DOCUMENTOS:</b>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#materiales">
                        <i class="fa fa-file"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre Documento</th>
                        <th>Tipo Documento</th>
                        <th>Ver Documento</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($doc as $dc) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $dc->nombre?></td>
                        <td><?php echo $dc->tipo_doc?></td>
                        <td><a href="/<?php echo $dc->ruta?>">Bajar Documento</a></td>
                    </tr>
                    <?php }  ?>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <hr>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-photo"></i> <b>CROQUIS ACCIDENTE:</b>
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#materiales"><i
                                class="fa fa-photo"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>

                    </thead>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-photo"></i> <b>REGISTRO FOTOGRÁFICO:</b>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#materiales">
                        <i class="fa fa-photo"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <?php  foreach ($ft as $ft) { ?>
                    <th><a href="/<?php echo $ft->ruta ?>"><img src="/<?php echo $ft->ruta ?>" height="200"></a></th>
                    <?php }  ?>
                    </thead>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>

        <hr>

        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-pencil"></i> <b>GESTIONES:</b>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#gestiones"><i
                                class="fa fa-pencil"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Fecha</th>
                        <th>Tipo Gestion</th>
                        <th>Gestión</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($ges as $gs) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo date('d M Y', strtotime($gs->fec_crea))?></td>
                        <td><?php echo $gs->asunto?></td>
                        <td><?php echo $gs->texto?></td>
                    </tr>
                    <?php }  ?>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>
                    Imprimir Ficha</a>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generar Informe en PDF
                </button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="gestiones"
         tabindex="-1" role="dialog"
         aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"
                        id="favoritesModalLabel">Gestiones</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="<?php echo e(url('Gestiones/Guardar')); ?>" role="form"
                          method="POST" enctype="multipart/form-data">

                        <div class="box-body">

                            <P>Registrar o agendar gestiones.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">

                            <?php /*Tipo Accidente(1) o Incidente(2)*/ ?>
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Asunto:</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="text" name="asunto" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Mensaje:</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control pull-right" name="mensaje" id="" cols="10" rows="5"
                                              required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Agendar?</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="date" name="fecha">
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        </div><!-- /.box-body -->


                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-danger pull-right">Agregar Gestión</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>