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

                    <form action="{{ url('Accidentes/FormularioTiro') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" class="btn btn-xs"><i class="fa fa-file-pdf-o"></i> Ver Carta de Cobro
                        </button>
                    </form>
                    <br>
                    <form action="{{ url('Cotizacion/Nuevo') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" class="btn btn-xs"><i class="fa fa-file-pdf-o"></i> Ver Cotización
                        </button>
                    </form>
                    </button>
                    <br>
                    <form action="{{ url('Accidentes/FormularioTiro') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-file-pdf-o"></i> Informe Hoja 1
                        </button>
                    </form>

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

                    <form class="form-horizontal" name="form" action="{{ url('Accidentes/GuardarComplemento') }}"
                          role="form"
                          method="POST">

                        <div class="box-body">
                            <h4><b>GRADO DE MAGNITUD</b></h4><BR>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Victimas
                                    Fatales?:</label>

                                <div class="col-sm-1 checkbox">
                                    <?php if($mag->victimas_fatales == 1){
                                    ?><input type="checkbox" name="vic_fat" value="1" checked>
                                    <?php }else{?>
                                    <input type="checkbox" name="vic_fat" value="0">
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-4 control-label">¿Corte de Tránsito mayor
                                    a 30 minutos?:</label>

                                <div class="col-sm-1 checkbox">
                                    <?php if($mag->corte_trans == 1){
                                    ?><input type="checkbox" name="corte_trans" value="1" checked>
                                    <?php }else{?>
                                    <input type="checkbox" name="corte_trans" value="0">
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-3 control-label">¿Afecta más de 1
                                    pista?:</label>

                                <div class="col-sm-1 checkbox">
                                    <?php if($mag->pistas == 1){
                                    ?><input type="checkbox" name="pistas" value="1" checked>
                                    <?php }else{?>
                                    <input type="checkbox" name="pistas" value="0">
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Hora Inicio
                                    Corte:</label>

                                <div class="col-sm-2">
                                    <input type="time" class="form-control pull-right" name="hora_ini"
                                           value="{{$mag->ini_corte}}">
                                </div>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Hora Fin Corte:</label>

                                <div class="col-sm-2">
                                    <input type="time" class="form-control pull-right" name="hora_fin"
                                           value="{{$mag->fin_corte}}">
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-3 control-label">¿By Pass?:</label>

                                <div class="col-sm-1 checkbox">
                                    <?php if($mag->bypass == 1){

                                    ?><input type="checkbox" name="by_pass" value="1" checked>
                                    <?php }else{?>
                                    <input type="checkbox" name="by_pass" value="0">
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">¿Troncal /
                                    Ramal?:</label>

                                <div class="col-sm-2">
                                    <?php if($mag->t_or_r == 1){

                                    ?><div class="radio">

                                        <label>
                                            <input type="radio" name="t_o_r" id="optionsRadios1" value="1"
                                                   checked>
                                            Troncal
                                        </label>
                                    </div>
                                    <div class="radio">

                                        <label>
                                            <input type="radio" name="t_o_r" id="optionsRadios2"
                                                   value="2">
                                            Ramal
                                        </label>

                                    </div>
                                    <?php }else{?>
                                        <div class="radio">

                                            <label>
                                                <input type="radio" name="t_o_r" id="optionsRadios1" value="1">
                                                Troncal
                                            </label>
                                        </div>
                                        <div class="radio">

                                            <label>
                                                <input type="radio" name="t_o_r" id="optionsRadios2"
                                                       value="2" checked>
                                                Ramal
                                            </label>

                                        </div>
                                    <?php }?>

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
                                    <?php if($t_a->op_1 == 1){
                                    ?><input type="checkbox" name="op1_col" value="1" checked> Frontal <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op1_col" value="0"> Frontal <br>
                                    <?php }?>

                                    <?php if($t_a->op_2 == 1){
                                    ?><input type="checkbox" name="op2_col" value="1" checked> Lateral <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op2_col" value="0"> Lateral <br>
                                    <?php }?>

                                    <?php if($t_a->op_3 == 1){
                                    ?><input type="checkbox" name="op3_col" value="1" checked> Alcance <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op3_col" value="0"> Alcance <br>
                                    <?php }?>

                                    <?php if($t_a->op_4 == 1){
                                    ?><input type="checkbox" name="op4_col" value="1" checked> Perpendicular <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op4_col" value="0"> Perpendicular <br>
                                    <?php }?>

                                    <?php if($t_a->op_5 == 1){
                                    ?><input type="checkbox" name="op5_col" value="1" checked> Impacto con Animal <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op5_col" value="0"> Impacto con Animal <br>
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Choque con
                                    Objeto:</label>

                                <div class="col-sm-2 checkbox">

                                    <?php if($t_a->op_6 == 1){
                                    ?><input type="checkbox" name="op6_col" value="1" checked> Frontal <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op6_col" value="0"> Frontal <br>
                                    <?php }?>

                                    <?php if($t_a->op_7 == 1){
                                    ?><input type="checkbox" name="op7_col" value="1" checked> Lateral <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op7_col" value="0"> Lateral <br>
                                    <?php }?>

                                    <?php if($t_a->op_8 == 1){
                                    ?><input type="checkbox" name="op8_col" value="1" checked> Posterior <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op8_col" value="0"> Posterior <br>
                                    <?php }?>

                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Choque con Vehículo
                                    Detenido:</label>

                                <div class="col-sm-2 checkbox">

                                    <?php if($t_a->op_9 == 1){
                                    ?><input type="checkbox" name="op9_col" value="1" checked> Frente/Frente <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op9_col" value="0"> Frente/Frente <br>
                                    <?php }?>

                                    <?php if($t_a->op_10 == 1){
                                    ?><input type="checkbox" name="op10_col" value="1" checked> Lado/Posterior <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op10_col" value="0"> Lado/Posterior <br>
                                    <?php }?>

                                    <?php if($t_a->op_11 == 1){
                                    ?><input type="checkbox" name="op11_col" value="1" checked> Frente/Lado <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op11_col" value="0"> Frente/Lado <br>
                                    <?php }?>

                                    <?php if($t_a->op_12 == 1){
                                    ?><input type="checkbox" name="op12_col" value="1" checked> Posterior/Frente <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op12_col" value="0"> Posterior/Frente <br>
                                    <?php }?>

                                    <?php if($t_a->op_13 == 1){
                                    ?><input type="checkbox" name="op13_col" value="1" checked> Frente/Posterior <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op13_col" value="0"> Frente/Posterior <br>
                                    <?php }?>

                                    <?php if($t_a->op_14 == 1){
                                    ?><input type="checkbox" name="op14_col" value="1" checked> Posterior/Lado <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op14_col" value="0"> Posterior/Lado <br>
                                    <?php }?>

                                    <?php if($t_a->op_15 == 1){
                                    ?><input type="checkbox" name="op15_col" value="1" checked> Lado/Frente <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op15_col" value="0"> Lado/Frente <br>
                                    <?php }?>

                                    <?php if($t_a->op_16 == 1){
                                    ?><input type="checkbox" name="op16_col" value="1" checked> Posterior/Posterior <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op16_col" value="0"> Posterior/Posterior <br>
                                    <?php }?>

                                    <?php if($t_a->op_17 == 1){
                                    ?><input type="checkbox" name="op17_col" value="1" checked> Lado/Lado <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op17_col" value="0"> Lado/Lado <br>
                                    <?php }?>

                                </div>
                            </div>

                            <hr>

                            <h4><b>UBICACIÓN RELATIVA</b></h4>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">

                                    <?php if($u_rel->op_1 == 1){
                                    ?><input type="checkbox" name="op1_u" value="1" checked> Cruce con Semaforo Funcionando <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op1_u" value="0"> Cruce con Semaforo Funcionando <br>
                                    <?php }?>

                                    <?php if($u_rel->op_2 == 1){
                                    ?><input type="checkbox" name="op2_u" value="1" checked> Cruce con Semaforo Apagado <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op2_u" value="0"> Cruce con Semaforo Apagado <br>
                                    <?php }?>

                                    <?php if($u_rel->op_3 == 1){
                                    ?><input type="checkbox" name="op3_u" value="1" checked> Cruce regulado por Carabineros <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op3_u" value="0"> Cruce regulado por Carabineros <br>
                                    <?php }?>

                                    <?php if($u_rel->op_4 == 1){
                                    ?><input type="checkbox" name="op4_u" value="1" checked> Cruce con señal "Pare" <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op4_u" value="0"> Cruce con señal "Pare" <br>
                                    <?php }?>

                                    <?php if($u_rel->op_5 == 1){
                                    ?><input type="checkbox" name="op5_u" value="1" checked> Cruce con señal "Ceda el Paso" <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op5_u" value="0"> Cruce con señal "Ceda el Paso" <br>
                                    <?php }?>

                                    <?php if($u_rel->op_6 == 1){
                                    ?><input type="checkbox" name="op6_u" value="1" checked> Cruce sin Señalización <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op6_u" value="0"> Cruce sin Señalización <br>
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">

                                    <?php if($u_rel->op_7 == 1){
                                    ?><input type="checkbox" name="op7_u" value="1" checked> Tramo de Vía Recta <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op7_u" value="0"> Tramo de Vía Recta <br>
                                    <?php }?>

                                    <?php if($u_rel->op_8 == 1){
                                    ?><input type="checkbox" name="op8_u" value="1" checked> Puente <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op8_u" value="0"> Puente <br>
                                    <?php }?>

                                    <?php if($u_rel->op_9 == 1){
                                    ?><input type="checkbox" name="op9_u" value="1" checked> Tramo de Vía Curva Vertical <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op9_u" value="0"> Tramo de Vía Curva Vertical <br>
                                    <?php }?>

                                    <?php if($u_rel->op_10 == 1){
                                    ?><input type="checkbox" name="op10_u" value="1" checked> Acera o Berma <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op10_u" value="0"> Acera o Berma <br>
                                    <?php }?>

                                    <?php if($u_rel->op_11 == 1){
                                    ?><input type="checkbox" name="op11_u" value="1" checked> Tramo de Vía Curva Horizontal <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op11_u" value="0"> Tramo de Vía Curva Horizontal <br>
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-1 control-label"></label>

                                <div class="col-sm-3 checkbox">

                                    <?php if($u_rel->op_12 == 1){
                                    ?><input type="checkbox" name="op12_u" value="1" checked> Enlace a Nivel <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op12_u" value="0"> Enlace a Nivel <br>
                                    <?php }?>

                                    <?php if($u_rel->op_13 == 1){
                                    ?><input type="checkbox" name="op13_u" value="1" checked> Enlace a Desnivel <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op13_u" value="0"> Enlace a Desnivel <br>
                                    <?php }?>

                                    <?php if($u_rel->op_14 == 1){
                                    ?><input type="checkbox" name="op14_u" value="1" checked> Acceso no Habilitado <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op14_u" value="0"> Acceso no Habilitado <br>
                                    <?php }?>

                                    <?php if($u_rel->op_15 == 1){
                                    ?><input type="checkbox" name="op15_u" value="1" checked> Rotonda <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op15_u" value="0"> Rotonda <br>
                                    <?php }?>

                                    <?php if($u_rel->op_16 == 1){
                                    ?><input type="checkbox" name="op16_u" value="1" checked> Plaza de Peaje <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op16_u" value="0"> Plaza de Peaje <br>
                                    <?php }?>

                                    <?php if($u_rel->op_17 == 1){
                                    ?><input type="checkbox" name="op17_u" value="1" checked> Otros no Considerados <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op17_u" value="0"> Otros no Considerados <br>
                                    <?php }?>

                                </div>
                            </div>

                            <hr>

                            <h4><b>CONDICIONES DEL ENTERNO (CALZADA AFECTADA)</b></h4>
                            <br>

                            <div class="form-group">

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Concurrencia:</label>

                                <div class="col-sm-1 checkbox">

                                    <?php if($c_e->op_1 == 1){
                                    ?><input type="checkbox" name="op1_cc" value="1" checked> Carabineros <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op1_cc" value="0"> Carabineros <br>
                                    <?php }?>

                                    <?php if($c_e->op_2 == 1){
                                    ?><input type="checkbox" name="op2_cc" value="1" checked> Ambulancia <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op2_cc" value="0"> Ambulancia <br>
                                    <?php }?>

                                    <?php if($c_e->op_3 == 1){
                                    ?><input type="checkbox" name="op3_cc" value="1" checked> Bomberos <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op3_cc" value="0"> Bomberos <br>
                                    <?php }?>

                                    <?php if($c_e->op_4 == 1){
                                    ?><input type="checkbox" name="op4_cc" value="1" checked> Operadora <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op4_cc" value="0"> Operadora <br>
                                    <?php }?>

                                    <?php if($c_e->op_5 == 1){
                                    ?><input type="checkbox" name="op5_cc" value="1" checked> I.T.E. <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op5_cc" value="0"> I.T.E. <br>
                                    <?php }?>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Punto Duro:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="p_duro">

                                        <?php if($c_e->p_duro == 1){?>
                                        <option value="1">C/Defensa</option>
                                        <?php }else if($c_e->p_duro == 2){?>
                                        <option value="2">S/Defensa</option>
                                        <?php }else if($c_e->p_duro == 3){?>
                                        <option value="3">No Existe</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">C/Defensa</option>
                                        <option value="2">S/Defensa</option>
                                        <option value="3">No Existe</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Defensas:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="defensas">


                                        <?php if($c_e->defensas == 1){?>
                                        <option value="1">Mediana</option>
                                        <?php }else if($c_e->defensas == 2){?>
                                        <option value="2">Lateral Izquierda</option>
                                        <?php }else if($c_e->defensas == 3){?>
                                        <option value="3">Lateral Derecha</option>
                                        <?php }else if($c_e->defensas == 4){?>
                                        <option value="4">No Existe</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">Mediana</option>
                                        <option value="2">Lateral Izquierda</option>
                                        <option value="3">Lateral Derecha</option>
                                        <option value="4">No Existe</option>
                                    </select>
                                </div>
                                <br><br>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Desnivel:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="nivel">

                                        <?php if($c_e->desnivel == 1){?>
                                        <option value="1">Existe C/Prot</option>
                                        <?php }else if($c_e->desnivel == 2){?>
                                        <option value="2">Existe S/Prot</option>
                                        <?php }else if($c_e->desnivel == 3){?>
                                        <option value="3">No Existe</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">Existe C/Prot</option>
                                        <option value="2">Existe S/Prot</option>
                                        <option value="3">No Existe</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Cerco:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="cerco">

                                        <?php if($c_e->cerco == 1){?>
                                        <option value="1">Bueno</option>
                                        <?php }else if($c_e->cerco == 2){?>
                                        <option value="2">Regular</option>
                                        <?php }else if($c_e->cerco == 3){?>
                                        <option value="3">Malo</option>
                                        <?php }else if($c_e->cerco == 4){?>
                                        <option value="4">No Existe</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">Bueno</option>
                                        <option value="2">Regular</option>
                                        <option value="3">Malo</option>
                                        <option value="4">No Existe</option>
                                    </select>
                                </div>

                                <br><br>
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Trabajos:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="trabajos">

                                        <?php if($c_e->trabajos == 1){?>
                                        <option value="1">SI</option>
                                        <?php }else if($c_e->trabajos == 2){?>
                                        <option value="2">NO</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Banderero:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="bande">

                                        <?php if($c_e->banderero == 1){?>
                                        <option value="1">SI</option>
                                        <?php }else if($c_e->banderero == 2){?>
                                        <option value="2">NO</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                    </select>
                                </div>

                            </div>

                            <hr>

                            <h4><b>CONDICIÓN CALZADA / ESTADO VISIBILIDAD</b></h4>
                            <br>

                            <div class="form-group">

                                <label for="exampleInputEmail1" class="col-sm-1 control-label">Tipo:</label>

                                <div class="col-sm-2 checkbox">

                                    <?php if($c_c->op_1 == 1){
                                    ?><input type="checkbox" name="op1_con" value="1"  checked> Seca <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op1_con" value="0" > Seca <br>
                                    <?php }?>

                                    <?php if($c_c->op_2 == 1){
                                    ?><input type="checkbox" name="op2_con" value="1" checked> Humeda <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op2_con" value="0" > Humeda <br>
                                    <?php }?>

                                    <?php if($c_c->op_3 == 1){
                                    ?><input type="checkbox" name="op3_con" value="1" checked> Mojada <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op3_con" value="0" > Mojada <br>
                                    <?php }?>

                                    <?php if($c_c->op_4 == 1){
                                    ?><input type="checkbox" name="op4_con" value="1"  checked> Con Barro <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op4_con" value="0" > Con Barro <br>
                                    <?php }?>

                                    <?php if($c_c->op_5 == 1){
                                    ?><input type="checkbox" name="op5_con" value="1" checked> Nieve <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op5_con" value="0" > Nieve <br>
                                    <?php }?>

                                    <?php if($c_c->op_6 == 1){
                                    ?><input type="checkbox" name="op6_con" value="1"  checked> Aceite <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op6_con" value="0" > Aceite <br>
                                    <?php }?>

                                    <?php if($c_c->op_7 == 1){
                                    ?><input type="checkbox" name="op7_con" value="1"  checked> Escarcha <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op7_con" value="0" > Escarcha <br>
                                    <?php }?>

                                    <?php if($c_c->op_8 == 1){
                                    ?><input type="checkbox" name="op8_con" value="1"  checked> Gravilla <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op8_con" value="0" > Gravilla <br>
                                    <?php }?>

                                    <?php if($c_c->op_9 == 1){
                                    ?><input type="checkbox" name="op9_con" value="1"  checked> Otros <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op9_con" value="0" > Otros <br>
                                    <?php }?>

                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Luminosidad:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="lumi">


                                        <?php if($c_c->lumi == 1){?>
                                        <option value="1">Diurna</option>
                                        <?php }else if($c_c->lumi == 2){?>
                                        <option value="2">Nocturna</option>
                                        <?php }else if($c_c->lumi == 3){?>
                                        <option value="3">Amanecer</option>
                                        <?php }else if($c_c->lumi == 4){?>
                                        <option value="4">Atardecer</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">Diurna</option>
                                        <option value="2">Nocturna</option>
                                        <option value="3">Amanecer</option>
                                        <option value="4">Atardecer</option>
                                    </select>
                                </div>

                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Atmósfera:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="atmo">


                                        <?php if($c_c->atmo == 1){?>
                                        <option value="1">Despejado</option>
                                        <?php }else if($c_c->atmo == 2){?>
                                        <option value="2">Nublado</option>
                                        <?php }else if($c_c->atmo == 3){?>
                                        <option value="3">Lluvia</option>
                                        <?php }else if($c_c->atmo == 4){?>
                                        <option value="4">Llovizna</option>
                                        <?php }else if($c_c->atmo == 5){?>
                                        <option value="5">Neblina</option>
                                        <?php }else if($c_c->atmo == 6){?>
                                        <option value="6">Nieve</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
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
                                    <select class="form-control pull-right" name="luz">


                                        <?php if($c_c->luz == 1){
                                        ?>
                                        <option value="1">Apagada</option>
                                        <?php }else if($c_c->luz == 2){?>
                                        <option value="2">Encendida Suficientemente</option>
                                        <?php }else if($c_c->luz == 3){?>
                                        <option value="3">Encendida Insuficientemente</option>
                                        <?php }else if($c_c->luz == 4){?>
                                        <option value="4">No Existe en el Sector</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
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

                                    <?php if($o_pro->op_1 == 1){
                                    ?><input type="checkbox" name="op1_op" value="1" checked> Falla Humana <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op1_op" value="0"> Falla Humana <br>
                                    <?php }?>

                                    <?php if($o_pro->op_2 == 1){
                                    ?><input type="checkbox" name="op2_op" value="1" checked> Falla Mecánica <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op2_op" value="0"> Falla Mecánica <br>
                                    <?php }?>

                                    <?php if($o_pro->op_3 == 1){
                                    ?><input type="checkbox" name="op3_op" value="1" checked> Animal u Otro Obstaculo en la Vía
                                    <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op3_op" value="0"> Animal u Otro Obstaculo en la Vía <br>
                                    <?php }?>

                                    <?php if($o_pro->op_4 == 1){
                                    ?><input type="checkbox" name="op4_op" value="1" checked> Pavimento resvaladizo <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op4_op" value="0"> Pavimento resvaladizo <br>
                                    <?php }?>

                                    <?php if($o_pro->op_5 == 1){
                                    ?><input type="checkbox" name="op5_op" value="1" checked> Carga mal estibada <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op5_op" value="0"> Carga mal estibada <br>
                                    <?php }?>

                                    <?php if($o_pro->op_6 == 1){
                                    ?><input type="checkbox" name="op6_op" value="1" checked> Condición Climática <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op6_op" value="0"> Condición Climática <br>
                                    <?php }?>

                                    <?php if($o_pro->op_7 == 1){
                                    ?><input type="checkbox" name="op7_op" value="1" checked> No definida <br>
                                    <?php }else{?>
                                    <input type="checkbox" name="op7_op" value="0"> No definida <br>
                                    <?php }?>

                                </div>


                                <label for="exampleInputEmail1" class="col-sm-3 control-label">Velocidad Máxima del
                                    sector:</label>

                                <div class="col-sm-2">
                                    <select class="form-control pull-right" name="velocidad">


                                        <?php if($o_pro->vel_max == 1){
                                        ?>
                                        <option value="1">0-50 KM/H</option>
                                        <?php }else if($o_pro->vel_max == 2){?>
                                        <option value="2">50-80 KM/H</option>
                                        <?php }else if($o_pro->vel_max == 3){?>
                                        <option value="3">80-100 KM/H</option>
                                        <?php }else if($o_pro->vel_max == 4){?>
                                        <option value="4">100-120 KM/H</option>
                                        <?php }else{?>
                                        <option value="0">--------</option>
                                        <?php }?>

                                        <option value="0">--------</option>
                                        <option value="1">0-50 KM/H</option>
                                        <option value="2">50-80 KM/H</option>
                                        <option value="3">80-100 KM/H</option>
                                        <option value="4">100-120 KM/H</option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <input type="hidden" name="folio_acc" value="{{ $o_pro->sp_accidentes_id_accidente }}">
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
