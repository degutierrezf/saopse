@extends('layouts.app')

@section('htmlheader_title')
	Aseguradoras
@endsection

@section('contentheader_title')
	ASEGURADORAS - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

    <div class="row">
    <div class="col-md-2">
        <a class="btn btn-app btn" href="/Aseguradoras/Nuevo">
            <i class="fa fa-plus-square"></i> Ingresar nueva Aseguradora
        </a>
    </div>
    </div>


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
                  <td><form action="{{ url('Aseguradoras/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id_aseguradora" value="<?php echo $cs->id_aseguradora?>">
                        <button type="submit" ><?php echo $cs->id_aseguradora?></button></form>
                  </td>
                  <td><?php echo $cs->nombre_aseg?></td>
                  <td><?php echo $cs->nombre_contacto?></td>
                  <td><?php echo $cs->fono_contacto?></td>
                  <th><?php echo $cs->correo_contacto?></th>
                  <td><form action="{{ url('Aseguradoras/Detalles') }}" role="form" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
@endsection
