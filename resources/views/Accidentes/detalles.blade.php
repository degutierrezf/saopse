@extends('layouts.app')

@section('htmlheader_title')
	Inicio
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
        <div class="col-sm-4 invoice-col">
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
          <strong>INCIDENTE:</strong>
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
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <strong>GESTIÓN:</strong>
          <table class="table table-striped">
          	<tr>
          		<td><form action="{{ url('Autos/Nuevo') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" >AGREGAR AUTO INVOLUCRADO</button>
                  </form>
              </td>
          	</tr>
          	<tr>
          		<td><form action="{{ url('Documentos/Cargar') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" >AGREGAR NUEVO DOCUMENTO</button>
                  </form>
              </td>
          	</tr>
          	<tr>
          		              <td><form action="{{ url('Fotos/Cargar') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" >AGREGAR NUEVAS FOTOGRAFíAS</button>
                  </form>
              </td>
          	</tr>

            <tr>
              <td><form action="{{ url('Gestiones/Nuevo') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" >AGREGAR NUEVAS GESTIONES</button>
                  </form>
              </td>
            </tr>
            <tr>
              <td><form action="{{ url('Cotizacion/Nuevo') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_accidente" value="<?php echo $inc->id_accidente?>">
                        <button type="submit" >AGREGAR COTIZACIÓN</button>
                  </form>
              </td>
            </tr>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
		<hr>
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
        	<p class="lead"><i class="fa fa-car"></i> <b>VEHÍCULOS INVOLUCRADOS:</b></p>
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
        	<p class="lead"><i class="fa fa-file"></i> <b>DOCUMENTOS:</b></p>
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
        	<p class="lead"><i class="fa fa-photo"></i> <b>REGISTRO FOTOGRÁFICO:</b></p>
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
          <p class="lead"><i class="fa fa-pencil"></i> <b>GESTIONES:</b></p>
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
            <?php  foreach ($gt as $ges) { ?>
              <tr>
                <td><?php echo $ges->id_gestiones_i?></td>
                <td><?php echo $ges->fecha?></td>
                <td><?php echo $ges->tipo_gestion?></td>
                <td><?php echo $ges->gestion?></td>
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
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Ficha</a>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generar Informe en PDF
          </button>
        </div>
      </div>
</section>
@endsection
