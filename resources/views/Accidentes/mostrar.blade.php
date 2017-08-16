@extends('layouts.app')

@section('htmlheader_title')
	Mostrar Accidentes
@endsection

@section('contentheader_title')
	Mostrar Accidentes - Administrador
@endsection

@section('main-content')

<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">N° Accidentes</span>
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
              <span class="info-box-text">Accidentes Daño</span>
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
              <span class="info-box-text">Accidentes SIN Daño</span>
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


<div class="body">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Ruta - Valles del Desierto</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fecha / Hora</th>
                    <th>Concesión / Ruta</th>
                    <th>PK1 / PK 2</th>
                    <th>Corte de Transito</th>
                    <th>¿By Pass?</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($vdd as $cs) { ?>
                <tr>
                    <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                    <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                    <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                    <td></td>
                    <th></th>
                    <td>
                        <form action="{{ url('Accidentes/Complemento') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-danger btn-xs" type="submit" >Ficha Complementaria</button></form>

                        <form action="{{ url('Accidentes/Detalles') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-primary btn-xs" type="submit" >Documentos & Otros</button></form>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
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
    <!-- /.box -->
</div>

<div class="body">
    <div class="box box-warning box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Ruta - Valles del Biobío</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fecha / Hora</th>
                    <th>Concesión / Ruta</th>
                    <th>PK1 / PK 2</th>
                    <th>Corte de Transito</th>
                    <th>¿By Pass?</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($vbb as $cs) { ?>
                <tr>
                    <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                    <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                    <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                    <td></td>
                    <th></th>
                    <td>
                        <form action="{{ url('Accidentes/Complemento') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-danger btn-xs" type="submit" >Ficha Complementaria</button></form>

                        <form action="{{ url('Accidentes/Detalles') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-primary btn-xs" type="submit" >Documentos & Otros</button></form>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
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
    <!-- /.box -->
</div>

<div class="body">
    <div class="box box-primary box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Ruta - Ruta del Limarí</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fecha / Hora</th>
                    <th>Concesión / Ruta</th>
                    <th>PK1 / PK 2</th>
                    <th>Corte de Transito</th>
                    <th>¿By Pass?</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($rdl as $cs) { ?>
                <tr>
                    <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                    <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                    <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                    <td></td>
                    <th></th>
                    <td>
                        <form action="{{ url('Accidentes/Complemento') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-danger btn-xs" type="submit" >Ficha Complementaria</button></form>

                        <form action="{{ url('Accidentes/Detalles') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-primary btn-xs" type="submit" >Documentos & Otros</button></form>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
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
    <!-- /.box -->
</div>

<div class="body">
    <div class="box box-info box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Ruta - Rutas del Desierto</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fecha / Hora</th>
                    <th>Concesión / Ruta</th>
                    <th>PK1 / PK 2</th>
                    <th>Corte de Transito</th>
                    <th>¿By Pass?</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($rdd as $cs) { ?>
                <tr>
                    <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                    <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                    <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                    <td></td>
                    <th></th>
                    <td>
                        <form action="{{ url('Accidentes/Complemento') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-danger btn-xs" type="submit" >Ficha Complementaria</button></form>

                        <form action="{{ url('Accidentes/Detalles') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-primary btn-xs" type="submit" >Documentos & Otros</button></form>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
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
    <!-- /.box -->
</div>

<div class="body">
    <div class="box box-danger box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Ruta - Ruta del Algarrobo</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Fecha / Hora</th>
                    <th>Concesión / Ruta</th>
                    <th>PK1 / PK 2</th>
                    <th>Corte de Transito</th>
                    <th>¿By Pass?</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php  foreach ($rda as $cs) { ?>
                <tr>
                    <td><?php echo $cs->fecha?> / <?php echo $cs->hora?></td>
                    <td><?php echo $cs->nombre_conc?> - <?php echo $cs->nombre_ruta?></td>
                    <td><?php echo $cs->pk1?> - <?php echo $cs->pk2?></td>
                    <td></td>
                    <th></th>
                    <td>
                        <form action="{{ url('Accidentes/Complemento') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-danger btn-xs" type="submit" >Ficha Complementaria</button></form>

                        <form action="{{ url('Accidentes/Detalles') }}" role="form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_accidente" value="<?php echo $cs->id_accidente?>">
                            <button class="btn btn-primary btn-xs" type="submit" >Documentos & Otros</button></form>
                    </td>
                </tr>
                <?php }
                ?>
                </tbody>
                <tfoot>
                <tr>
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
    <!-- /.box -->
</div>





@endsection
