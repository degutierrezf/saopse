@extends('layouts.app')

@section('htmlheader_title')
	Mostrar Incidentes
@endsection

@section('contentheader_title')
	Mostrar Incidentes - Administrador
@endsection

@section('main-content')

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">N° Incidentes Totales</span>
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
              <span class="info-box-text">N° Incidentes CON Daño</span>
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
              <span class="info-box-text">N° Incidentes SIN Daño</span>
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
              <span class="info-box-text">Incidentes Abiertos</span>
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
              <h3 class="box-title">Listado General de Incidentes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Folio</th>
                  <th>Fecha / Hora</th>
                  <th>Concesión / Ruta</th>
                  <th>Tipo Incidente</th>
                  <th>Daños</th>
                  <th>Nota</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($listado as $cs) { ?>
                  <tr>
                  <td><form action="{{ url('Incidentes/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_incidente" value="<?php echo $cs->id_incidentes?>">
                        <button type="submit" ><?php echo $cs->id_incidentes?></button></form>
                  </td>
                  <td><?php echo $cs->folio?></td>
                  <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                  <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                  <td><?php echo $cs->tipo?></td>
                  <td><?php echo $cs->dannos?></td>
                  <th><?php echo $cs->nota?></th>
                  <td><form action="{{ url('Incidentes/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_incidente" value="<?php echo $cs->id_incidentes?>">
                        <button type="submit" >VER FICHA</button></form>
                  </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Folio</th>
                  <th>Fecha / Hora</th>
                  <th>Concesión / Ruta</th>
                  <th>Tipo Incidente</th>
                  <th>Daños</th>
                  <th>Nota</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
</div>

@endsection
