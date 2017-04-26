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

        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-danger">

                    <div class="box-header with-border">
                        <h3 class="box-title">FICHA ACCIDENTE</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form class="form-horizontal" name="form" action="{{ url('Accidentes/GuardarNuevo') }}" role="form"
                          method="POST">

                        <div class="box-body">
                            <h4><b>GRADO DE MAGNITUD</b></h4><BR>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Victimas
                                    Fatales?:</label>

                                <div class="col-sm-1 checkbox">
                                    <input type="checkbox" name="num_acc">
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-4 control-label">¿Corte de Tránsito mayor
                                    a 30 minutos?:</label>

                                <div class="col-sm-1 checkbox">
                                    <input type="checkbox" name="num_acc">
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-3 control-label">¿Afecta más de 1
                                    pista?:</label>

                                <div class="col-sm-1 checkbox">
                                    <input type="checkbox" name="num_acc">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Hora Inicio
                                    Corte:</label>

                                <div class="col-sm-2">
                                    <input type="time" class="form-control pull-right" name="hora">
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Hora Fin Corte:</label>

                                <div class="col-sm-2">
                                    <input type="time" class="form-control pull-right" name="hora">
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-3 control-label">¿By Pass?:</label>

                                <div class="col-sm-1 checkbox">
                                    <input type="checkbox" name="num_acc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Troncal /
                                    Ramal?:</label>

                                <div class="col-sm-2">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                   checked>
                                            Troncal
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="option2">
                                            Ramal
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <small><b>Nota: </b>Si marca una o más alternativas recuerde que esta ficha debe enviarse a
                                la brevedad a la I.T.E.
                            </small>
                            <hr>
                            <h4><b>TIPO DE ACCIDENTE</b></h4>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-1 control-label">Colisión:</label>

                                <div class="col-sm-2 checkbox">
                                    <input type="checkbox" name="num_acc"> Frontal <br>
                                    <input type="checkbox" name="num_acc"> Lateral <br>
                                    <input type="checkbox" name="num_acc"> Alcance <br>
                                    <input type="checkbox" name="num_acc"> Perpendicular <br>
                                    <input type="checkbox" name="num_acc"> Impacto con Animal <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Choque con
                                    Objeto:</label>

                                <div class="col-sm-2 checkbox">
                                    <input type="checkbox" name="num_acc"> Frontal <br>
                                    <input type="checkbox" name="num_acc"> Lateral <br>
                                    <input type="checkbox" name="num_acc"> Posterior <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Choque con Vehículo
                                    Detenido:</label>

                                <div class="col-sm-2 checkbox">
                                    <input type="checkbox" name="num_acc"> Frente/Frente
                                    <input type="checkbox" name="num_acc"> Lado/Posterior <br>
                                    <input type="checkbox" name="num_acc"> Frente/Lado <br>
                                    <input type="checkbox" name="num_acc"> Posterior/Frente <br>
                                    <input type="checkbox" name="num_acc"> Frente/Posterior <br>
                                    <input type="checkbox" name="num_acc"> Posterior/Lado <br>
                                    <input type="checkbox" name="num_acc"> Lado/Frente <br>
                                    <input type="checkbox" name="num_acc"> Posterior/Posterior <br>
                                    <input type="checkbox" name="num_acc"> Lado/Lado <br>
                                </div>
                            </div>

                            <hr>

                            <h4><b>UBICACIÓN RELATIVA</b></h4>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">
                                    <input type="checkbox" name="num_acc"> Cruce con Semaforo Funcionando <br>
                                    <input type="checkbox" name="num_acc"> Cruce con Semaforo Apagado <br>
                                    <input type="checkbox" name="num_acc"> Cruce regulado por Carabineros <br>
                                    <input type="checkbox" name="num_acc"> Cruce con señal "Pare" <br>
                                    <input type="checkbox" name="num_acc"> Cruce con señal "Ceda el Paso" <br>
                                    <input type="checkbox" name="num_acc"> Cruce sin Señalización <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">
                                    <input type="checkbox" name="num_acc"> Tramo de Vía Recta <br>
                                    <input type="checkbox" name="num_acc"> Puente <br>
                                    <input type="checkbox" name="num_acc"> Tramo de Vía Curva Vertical <br>
                                    <input type="checkbox" name="num_acc"> Acera o Berma <br>
                                    <input type="checkbox" name="num_acc"> Tramo de Vía Curva Horizontal <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">
                                    <input type="checkbox" name="num_acc"> Enlace a Nivel <br>
                                    <input type="checkbox" name="num_acc"> Enlace a Desnivel <br>
                                    <input type="checkbox" name="num_acc"> Acceso no Habilitado <br>
                                    <input type="checkbox" name="num_acc"> Rotonda <br>
                                    <input type="checkbox" name="num_acc"> Plaza de Peaje <br>
                                    <input type="checkbox" name="num_acc"> Otros no Considerados <br>
                                </div>
                            </div>

                            <hr>

                            <h4><b>CONDICIONES DEL ENTERNO (CALZADA AFECTADA)</b></h4>
                            <br>

                            <div class="form-group">

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Concurrencia:</label>

                                <div class="col-sm-1 checkbox">
                                    <input type="checkbox" name="num_acc"> Carabineros <br>
                                    <input type="checkbox" name="num_acc"> Ambulancia <br>
                                    <input type="checkbox" name="num_acc"> Bomberos <br>
                                    <input type="checkbox" name="num_acc"> Operadora <br>
                                    <input type="checkbox" name="num_acc"> I.T.E. <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Punto Duro:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="p_duro">
                                        <option value="1">C/Defensa</option>
                                        <option value="2">S/Defensa</option>
                                        <option value="3">No Existe</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Defensas:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="defensas">
                                        <option value="1">Mediana</option>
                                        <option value="2">Lateral Izquierda</option>
                                        <option value="3">Lateral Derecha</option>
                                        <option value="4">No Existe</option>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Desnivel:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="desnivel">
                                        <option value="1">Existe C/Prot</option>
                                        <option value="2">Existe S/Prot</option>
                                        <option value="3">No Existe</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Cerco:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="cerco">
                                        <option value="1">Bueno</option>
                                        <option value="2">Regular</option>
                                        <option value="3">Malo</option>
                                        <option value="4">No Existe</option>
                                    </select>
                                </div>

                                <br><br>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Trabajos:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="desnivel">
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Banderero:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="desnivel">
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>

                            </div>

                            <hr>

                            <h4><b>CONDICIÓN CALZADA / ESTADO VISIBILIDAD</b></h4>
                            <br>

                            <div class="form-group">

                                <label for="exampleInputEmail1" class="col-sm-1 control-label">Tipo:</label>

                                <div class="col-sm-2 checkbox">
                                    <input type="checkbox" name="num_acc"> Seca <br>
                                    <input type="checkbox" name="num_acc"> Humeda <br>
                                    <input type="checkbox" name="num_acc"> Mojada <br>
                                    <input type="checkbox" name="num_acc"> Con Barro <br>
                                    <input type="checkbox" name="num_acc"> Nieve <br>
                                    <input type="checkbox" name="num_acc"> Aceite <br>
                                    <input type="checkbox" name="num_acc"> Escarcha <br>
                                    <input type="checkbox" name="num_acc"> Gravilla <br>
                                    <input type="checkbox" name="num_acc"> Otros <br>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Luminosidad:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="lum">
                                        <option value="1">Diurna</option>
                                        <option value="2">Nocturna</option>
                                        <option value="3">Amanecer</option>
                                        <option value="4">Atardecer</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Atmósfera:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="atmosfera">
                                        <option value="1">Despejado</option>
                                        <option value="2">Nublado</option>
                                        <option value="3">Lluvia</option>
                                        <option value="4">Llovizna</option>
                                        <option value="5">Neblina</option>
                                        <option value="6">Nieve</option>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Luz:</label>

                                <div class="col-sm-4">
                                    <select class="form-control pull-right" name="desnivel">
                                        <option value="1">Apagada</option>
                                        <option value="2">Encendida Suficientemente</option>
                                        <option value="3">Encendida Insuficientemente</option>
                                        <option value="4">No Existe en el Sector</option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <h4><b>ORIGEN PROBABLE</b></h4>

                            <div class="form-group">
                                <label for="exampleInputEmail2" class="col-sm-2 control-label">Origen Accidente:</label>

                                <div class="col-sm-3 checkbox">
                                    <input type="checkbox" name="num_acc"> Falla Humana <br>
                                    <input type="checkbox" name="num_acc"> Falla Mecánica <br>
                                    <input type="checkbox" name="num_acc"> Animal u Otro Obstaculo en la Vía <br>
                                    <input type="checkbox" name="num_acc"> Pavimento resvaladizo <br>
                                    <input type="checkbox" name="num_acc"> Carga mal estibada <br>
                                    <input type="checkbox" name="num_acc"> Condición Climática <br>
                                    <input type="checkbox" name="num_acc"> No definida <br>
                                </div>


                                <label for="exampleInputEmail1" class="col-sm-3 control-label">Velocidad Máxima del sector:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="desnivel">
                                        <option value="1">0-50 KM/H</option>
                                        <option value="2">50-80 KM/H</option>
                                        <option value="3">80-100 KM/H</option>
                                        <option value="4">100-120 KM/H</option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                                <button name="boton" type="submit" class="btn btn-danger pull-right">Guardar
                                    Complemento
                                </button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>

@endsection
