@extends('layouts.app')

@section('htmlheader_title')
	Cotización
@endsection

@section('contentheader_title')
	COTIZACIONES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

<section class="invoice">
<div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            Valorización N°: 
            <small class="pull-right">Fecha: </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <strong>Sacyr Operación y Servicio S.A.</strong>
          <p>Gestión, Conservación y Explotación de Obras Públicas <br>
          RUT: 76.125.157-0 <br>
          Serrano 14, Piso 2, Oficina 202, Santiago Centro
          </p>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <strong>Señor(es): <?php echo $con -> nombre_conc; ?> </strong>
          <p>RUT: <?php echo $con -> rut; ?><br>
          Giro: <?php echo $con -> giro; ?><br>
          Dirección: <?php echo $con -> direccion; ?>
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
		<hr>
      <!-- Table row -->

  <center><h2>Valorización del Servicio</h2></center>

  <center><p> <?php echo $cot->detalle ?> </p></center>

    <center>
        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#materiales"><i class="fa fa-plus"></i> Agregar Material</button>

        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#personal"><i class="fa fa-plus"></i> Agregar Personal</button>

        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#maquinaria"><i class="fa fa-plus"></i> Agregar Maquinaria</button>

        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#otros"><i class="fa fa-plus"></i> Agregar Otros</button>
    </center>
    <hr>
  <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Remoción - $</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
               <table class="table table-striped">
                <thead>
                <tr>
                  <th>ITEM</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD</th>
                  <th>DETALLE</th>
                  <th>TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach ($rem1 as $rem1) { ?>
                <tr>
                  <td>1.</td>
                  <td><?php echo $rem1->cantidad?></td>
                  <td><?php echo $rem1->unidad?></td>
                  <td><?php echo $rem1->material?></td>
                  <th>$<?php echo $rem1->subtotal?></th>
                </tr>
                <?php }?>

                <?php  foreach ($rem2 as $rem2) { ?>
                <tr>
                  <td>1.</td>
                  <td><?php echo $rem2->cantidad?></td>
                  <td>Hr.</td>
                  <td><?php echo $rem2->maquinaria?></td>
                  <th>$<?php echo $rem2->subtotal?></th>
                </tr>
                <?php }?>

                <?php  foreach ($rem3 as $rem3) { ?>
                <tr>
                  <td>1.</td>
                  <td><?php echo $rem3->cantidad?></td>
                  <td>Hr.</td>
                  <td><?php echo $rem3->personal?></td>
                  <th>$<?php echo $rem3->subtotal?></th>
                </tr>
                <?php }?> 

                <?php  foreach ($rem4 as $rem4) { ?>
                <tr>
                  <td>1.</td>
                  <td><?php echo $rem4->cantidad?></td>
                  <td>Hr.</td>
                  <td><?php echo $rem4->item?></td>
                  <th>$<?php echo $rem4->valor?></th>
                </tr>
                <?php }?>
                
                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
    </div>

    <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Materiales - $</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
                <table class="table table-striped">
                <thead>
                <tr>
                  <th>ITEM</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD</th>
                  <th>DETALLE</th>
                  <th>TOTAL</th>
                </tr>
                </thead>
                    <tbody>
                    <?php  foreach ($mat1 as $mat1) { ?>
                    <tr>
                        <td>2.</td>
                        <td><?php echo $mat1->cantidad?></td>
                        <td><?php echo $mat1->unidad?></td>
                        <td><?php echo $mat1->material?></td>
                        <th>$<?php echo $mat1->subtotal?></th>
                    </tr>
                    <?php }?>

                    <?php  foreach ($mat2 as $mat2) { ?>
                    <tr>
                        <td>2.</td>
                        <td><?php echo $mat2->cantidad?></td>
                        <td>Hr.</td>
                        <td><?php echo $mat2->maquinaria?></td>
                        <th>$<?php echo $mat2->subtotal?></th>
                    </tr>
                    <?php }?>

                    <?php  foreach ($mat3 as $mat3) { ?>
                    <tr>
                        <td>2.</td>
                        <td><?php echo $mat3->cantidad?></td>
                        <td>Hr.</td>
                        <td><?php echo $mat3->personal?></td>
                        <th>$<?php echo $mat3->subtotal?></th>
                    </tr>
                    <?php }?>

                    <?php  foreach ($mat4 as $mat4) { ?>
                    <tr>
                        <td>2.</td>
                        <td><?php echo $mat4->cantidad?></td>
                        <td>Hr.</td>
                        <td><?php echo $mat4->item?></td>
                        <th>$<?php echo $mat4->valor?></th>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
    </div>

    <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Transporte - $</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
            <table class="table table-striped">
                <thead>
                <tr>
                  <th>ITEM</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD</th>
                  <th>DETALLE</th>
                  <th>TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <?php  foreach ($tra1 as $tra1) { ?>
                <tr>
                    <td>2.</td>
                    <td><?php echo $tra1->cantidad?></td>
                    <td><?php echo $tra1->unidad?></td>
                    <td><?php echo $tra1->material?></td>
                    <th>$<?php echo $tra1->subtotal?></th>
                </tr>
                <?php }?>

                <?php  foreach ($tra2 as $tra2) { ?>
                <tr>
                    <td>2.</td>
                    <td><?php echo $tra2->cantidad?></td>
                    <td>Hr.</td>
                    <td><?php echo $tra2->maquinaria?></td>
                    <th>$<?php echo $tra2->subtotal?></th>
                </tr>
                <?php }?>

                <?php  foreach ($tra3 as $tra3) { ?>
                <tr>
                    <td>2.</td>
                    <td><?php echo $tra3->cantidad?></td>
                    <td>Hr.</td>
                    <td><?php echo $tra3->personal?></td>
                    <th>$<?php echo $tra3->subtotal?></th>
                </tr>
                <?php }?>

                <?php  foreach ($tra4 as $tra4) { ?>
                <tr>
                    <td>2.</td>
                    <td><?php echo $tra4->cantidad?></td>
                    <td>Hr.</td>
                    <td><?php echo $tra4->item?></td>
                    <th>$<?php echo $tra4->valor?></th>
                </tr>
                <?php }?>
                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
    </div>

    <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Señalización - $</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>ITEM</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD</th>
                  <th>DETALLE</th>
                  <th>TOTAL</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
    </div>

    <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Instalación - $</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-chevron-down"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>ITEM</th>
                  <th>CANTIDAD</th>
                  <th>UNIDAD</th>
                  <th>DETALLE</th>
                  <th>TOTAL</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
    </div>

      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <strong>NETO :</strong>
          <p><strong>I.V.A.  :</strong><br>
          <strong>TOTAL:</strong>
          </p>
        </div>
        <!-- /.col -->
      </div>


      <!-- /.row -->
      <hr>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Valorizacion</a>

          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Valorizacion con Detalle</a>

          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Valorizacion</a>
          
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generar Informe en PDF
          </button>
        </div>
      </div>


<div class="modal fade" id="materiales" 
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
        id="favoritesModalLabel">MATERIALES</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" name="form" action="{{ url('Material/Agregar_Valorizacion') }}" role="form" method="POST" enctype="multipart/form-data">
                  
              <div class="box-body">

                  <P>AGREGAR NUEVO MATERIAL A LA VALORIZACIÓN</P>  <br> 

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Item:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="material">
                        <?php  foreach ($mat as $mat) { ?>
                          <option class="form-control pull-right" value="<?php echo $mat->id_materiales ?>"><?php echo $mat->material ?></option>
                      <?php }
                      ?>
                      </select>
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Cantidad:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="number" name="cantidad" min="1" required>
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Categoría:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="actividad">
                          <option class="form-control pull-right" value="1">Remoción</option>
                          <option class="form-control pull-right" value="2">Materiales</option>
                          <option class="form-control pull-right" value="3">Transporte</option>
                          <option class="form-control pull-right" value="4">Señalización</option>
                          <option class="form-control pull-right" value="5">Instalación</option>
                      </select>
                          </div>
                </div>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div><!-- /.box-body -->
                
                
      </div>
      <div class="modal-footer">
        <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Documento</button>
                </div><!-- /.box-footer -->
                </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="personal" 
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
        id="favoritesModalLabel">PERSONAL</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" name="form" action="{{ url('Personal/Agregar_Valorizacion') }}" role="form" method="POST" enctype="multipart/form-data">
                  
              <div class="box-body">

                  <P>AGREGAR NUEVO PERSONAL A LA VALORIZACIÓN</P>  <br> 


                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Item:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="personal">
                        <?php  foreach ($per as $per) { ?>
                          <option class="form-control pull-right" value="<?php echo $per->id_personal ?>"><?php echo $per->personal ?></option>
                      <?php }
                      ?>
                      </select>
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Cantidad:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="number" name="cantidad">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Categoría:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="actividad">
                          <option class="form-control pull-right" value="1">Remoción</option>
                          <option class="form-control pull-right" value="2">Materiales</option>
                          <option class="form-control pull-right" value="3">Transporte</option>
                          <option class="form-control pull-right" value="4">Señalización</option>
                          <option class="form-control pull-right" value="5">Instalación</option>
                      </select>
                          </div>
                </div>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div><!-- /.box-body -->
                
                
      </div>
      <div class="modal-footer">
        <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Documento</button>
                </div><!-- /.box-footer -->
                </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="maquinaria" 
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
        id="favoritesModalLabel">MAQUINARIA</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" name="form" action="{{ url('Maquinaria/Agregar_Valorizacion') }}" role="form" method="POST" enctype="multipart/form-data">
                  
              <div class="box-body">

                  <P>AGREGAR NUEVA MAQUINARIA A LA VALORIZACIÓN</P>  <br> 


                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Item:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="maquinaria">
                        <?php  foreach ($maq as $maq) { ?>
                          <option class="form-control pull-right" value="<?php echo $maq->id_maquinaria ?>"><?php echo $maq->maquinaria ?></option>
                      <?php }
                      ?>
                      </select>
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Cantidad:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="number" name="cantidad">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Categoría:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="actividad">
                          <option class="form-control pull-right" value="1">Remoción</option>
                          <option class="form-control pull-right" value="2">Materiales</option>
                          <option class="form-control pull-right" value="3">Transporte</option>
                          <option class="form-control pull-right" value="4">Señalización</option>
                          <option class="form-control pull-right" value="5">Instalación</option>
                      </select>
                          </div>
                </div>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div><!-- /.box-body -->
                
                
      </div>
      <div class="modal-footer">
        <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Documento</button>
                </div><!-- /.box-footer -->
                </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="otros" 
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
        id="favoritesModalLabel">OTROS</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" name="form" action="{{ url('Otros/Agregar_Valorizacion') }}" role="form" method="POST" enctype="multipart/form-data">
                  
              <div class="box-body">

                <P>AGREGAR OTROS A LA VALORIZACIÓN</P>  <br> 

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">ITEM:</label>
                          <div class="col-sm-6">
                          <input class="form-control pull-right" type="text" name="item">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">VALOR:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="text" name="valor">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">UNIDAD:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="text" name="unidad">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">CANTIDAD:</label>
                          <div class="col-sm-3">
                          <input class="form-control pull-right" type="number" name="cantidad">
                          </div>
                </div>

                <div class="form-group" >
                      <label for="exampleInputEmail1" class="col-sm-2 control-label">Categoría:</label>
                          <div class="col-sm-6">
                          <select class="form-control pull-right" name="actividad">
                          <option class="form-control pull-right" value="1">Remoción</option>
                          <option class="form-control pull-right" value="2">Materiales</option>
                          <option class="form-control pull-right" value="3">Transporte</option>
                          <option class="form-control pull-right" value="4">Señalización</option>
                          <option class="form-control pull-right" value="5">Instalación</option>
                      </select>
                          </div>
                </div>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div><!-- /.box-body -->
                
                
      </div>
      <div class="modal-footer">
        <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right">Cargar Documento</button>
                </div><!-- /.box-footer -->
                </form>
      </div>
    </div>
  </div>
</div>

</section>
@endsection
