@extends('layouts.app')

@section('htmlheader_title')
    Detalle Accidente
@endsection

@section('contentheader_title')
    ACCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

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
                        <td>
                            <?php
                                if($inc->dannos == 1)
                                echo 'SI';
                                else
                                echo 'NO';
                            ?>
                        </td>
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

                    <form action="{{ url('Accidentes/FormularioRetiro') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-file-pdf-o"></i> Informe Hoja 2
                        </button>
                    </form>

                </center>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <center><h2>FORMULARIO FICHA COMPLEMENTARIA DE ACCIDENTES</h2></center>

        <hr>
        <center>
            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#autos"><i
                        class="fa fa-plus"></i> Agregar Vehículos Involucrados
            </button>

            <button type="button" class="btn btn- btn-xs" data-toggle="modal" data-target="#personas"><i
                        class="fa fa-users"></i> Agregar Personas Involucrados
            </button>

            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#docs"><i
                        class="fa fa-plus"></i> Agregar Documentos
            </button>

            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#croquis"><i
                        class="fa fa-plus"></i> Agregar Croquis Accidente
            </button>

            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#fotografias"><i
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
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#autos">
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
                        <th>¿Daños?</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $num_veh = 1; ?>
                    <?php  foreach ($au as $cs) { ?>
                    <tr>
                        <td><?php
                            echo $num_veh;
                            $num_veh= $num_veh + 1;
                            ?>
                        </td>
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
        <hr>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-users"></i> <b>PERSONAS INVOLUCRADAS:</b>
                    <button type="button" class="btn btn- btn-xs" data-toggle="modal" data-target="#personas">
                        <i class="fa fa-users"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Domicilio</th>
                        <th>Teléfono</th>
                        <th>Consecuencia</th>
                        <th>Daños Ocasionados</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($per as $per) { ?>
                    <tr>
                        <td><?php echo $per->rut?></td>
                        <td><?php echo $per->nombre?></td>
                        <td><?php echo $per->edad?></td>
                        <td><?php echo $per->direccion?></td>
                        <td><?php echo $per->telefono?> - <?php echo $per->celular?></td>
                        <td>
                            <?php
                                if($per->consecuencia==1){
                                    echo 'Muerte';
                                }
                                elseif ($per->consecuencia==2){
                                    echo 'Grave';
                                }
                                elseif ($per->consecuencia==3){
                                    echo 'Menos Grave';
                                }
                                elseif ($per->consecuencia==4){
                                    echo 'Lesiones Leves';
                                }
                                elseif ($per->consecuencia==5){
                                    echo 'Ileso';
                                }
                            ?>
                        </td>
                        <td><?php echo $per->dannos?></td>
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

            <div class="col-xs-4">
                <p class="lead"><i class="fa fa-edit"></i> <b>DESCRIPCIÓN BREVE:</b></p>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    <?php echo $inc->desc_breve?>
                </p>
            </div>

            <div class="col-xs-8">
                <p class="lead"><i class="fa fa-pencil"></i> <b>DESCRIPCIÓN:</b></p>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    <?php echo $inc->descripcion?>
                </p>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-file"></i> <b>DOCUMENTOS:</b>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#docs">
                        <i class="fa fa-file"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre Documento</th>
                        <th>Ver Documento</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $num_doc = 1; ?>
                    <?php  foreach ($doc as $dc) {?>
                    <tr>
                        <td><?php
                            echo $num_doc;
                            $num_doc= $num_doc + 1;
                            ?>
                        </td>
                        <td><?php echo $dc->nombre?></td>
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
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#croquis"><i
                                class="fa fa-photo"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <?php  foreach ($cr as $cr) { ?>
                    <th>
                        <center><a href="/<?php echo $cr->ruta ?>"><img src="/<?php echo $cr->ruta ?>" width="100%"></a></center>
                    </th>
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
                <p class="lead"><i class="fa fa-photo"></i> <b>REGISTRO FOTOGRÁFICO:</b>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#fotografias">
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
                    <?php $num_ges = 1; ?>
                    <?php  foreach ($ges as $gs) { ?>
                    <tr>
                        <td><?php
                            echo $num_ges;
                            $num_ges= $num_ges + 1;
                            ?>
                        </td>
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
                <form action="{{ url('Accidentes/FormularioRetiro') }}" role="form" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-file-pdf-o"></i> Informe Hoja 2
                    </button>
                </form>
            </div>
        </div>
    </section>

    <div class="modal fade" id="personas"
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
                        id="favoritesModalLabel">Personas Involucradas</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Personas/Guardar') }}" role="form"
                          method="POST" enctype="multipart/form-data">
                        <div class="box-body">

                            <P>Agregar personas involucradas al informe.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">


                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Rut:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="rut" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Edad:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="edad" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nombre:</label>
                                <div class="col-sm-10">
                                    <input class="form-control pull-right" type="text" name="nombre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Dirección:</label>
                                <div class="col-sm-10">
                                    <input class="form-control pull-right" type="text" name="direccion" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Comuna:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="comuna" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Teléfono:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="fono" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Celular:</label>
                                <div class="col-sm-3">
                                    <input class="form-control pull-right" type="text" name="celular" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Correo:</label>
                                <div class="col-sm-5">
                                    <input class="form-control pull-right" type="text" name="correo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Daños Ocasionados:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control pull-right" name="danos" id="" cols="10" rows="5"
                                              required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Consecuencia:</label>
                                <div class="col-sm-10">
                                    <select class="form-control pull-right" name="consecuencia">
                                        <option class="form-control pull-right" value="1">Muerte</option>
                                        <option class="form-control pull-right" value="2">Grave</option>
                                        <option class="form-control pull-right" value="3">Menos Grave</option>
                                        <option class="form-control pull-right" value="4">Lesiones Leves</option>
                                        <option class="form-control pull-right" value="5">Ileso</option>
                                    </select>
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn- pull-right">Agregar Persona</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="autos"
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
                        id="favoritesModalLabel">Vehículos Involucrados</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Autos/Guardar') }}" role="form"
                          method="POST" enctype="multipart/form-data">
                        <div class="box-body">

                            <P>Agregar vehículos involucrados al informe.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Marca:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="marca" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Modelo:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="modelo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Placa:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="placa" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">RUT:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="rut" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nombre Conductor:</label>
                                <div class="col-sm-10">
                                    <input class="form-control pull-right" type="text" name="conductor" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nombre Dueño:</label>
                                <div class="col-sm-10">
                                    <input class="form-control pull-right" type="text" name="propietario" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Dirección:</label>
                                <div class="col-sm-10">
                                    <input class="form-control pull-right" type="text" name="direccion" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Comuna:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="comuna" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Teléfono:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="fono" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Celular:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="celular" required>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Correo:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="correo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Informe?:</label>
                                <div class="col-sm-4">
                                    <select class="form-control pull-right" name="d_dannos">
                                        <option class="form-control pull-right" value="0">NO</option>
                                        <option class="form-control pull-right" value="1">SI</option>
                                    </select>
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nº Póliza:</label>
                                <div class="col-sm-4">
                                    <input class="form-control pull-right" type="text" name="poliza" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Daños Vehículo:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control pull-right" name="mensaje" id="" cols="10" rows="5"
                                              required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Aseguradora:</label>
                                <div class="col-sm-10">
                                    <select class="form-control pull-right" name="aseguradora">
                                        <?php  foreach ($aseg as $as) { ?>
                                        <option class="form-control pull-right" value="<?php echo $as->id_aseguradora ?>"><?php echo $as->nombre_aseg ?> | <?php echo $as->nombre_contacto ?> </option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-warning pull-right">Agregar Vehículo</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="docs"
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
                        id="favoritesModalLabel">Documentos</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Fotos/uploading') }}" role="form"
                          method="POST" enctype="multipart/form-data">
                        <div class="box-body">

                            <P>Agregar documentos al informe.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="foto" value="documento">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nombre Doc:</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="text" name="nombre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Archivo:</label>
                                <div class="col-sm-8">
                                    <input type="file" name="archivo">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-success pull-right">Agregar Documento</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="croquis"
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
                        id="favoritesModalLabel">Croquis Accidente</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Fotos/uploading') }}" role="form"
                          method="POST" enctype="multipart/form-data">
                        <div class="box-body">

                            <P>Agregar croquis de accidente al informe.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                            <input type="hidden" name="foto" value="croquis">
                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Archivo:</label>
                                <div class="col-sm-8">
                                    <input type="file" name="archivo">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-info pull-right">Agregar Croquis</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fotografias"
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
                        id="favoritesModalLabel">Fotografías</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Fotos/uploading') }}" role="form"
                          method="POST" enctype="multipart/form-data">
                        <div class="box-body">

                            <P>Agregar nueva fotografía al informe.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                            <input type="hidden" name="foto" value="foto">
                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Archivo:</label>
                                <div class="col-sm-8">
                                    <input type="file" name="archivo">
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-primary pull-right">Agregar Fotografía</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <form class="form-horizontal" name="form" action="{{ url('Gestiones/Guardar') }}" role="form"
                          method="POST" enctype="multipart/form-data">

                        <div class="box-body">

                            <P>Registrar o agendar gestiones.</P>  <br>

                            <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">

                            {{--Tipo Accidente(1) o Incidente(2)--}}
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

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

@endsection
