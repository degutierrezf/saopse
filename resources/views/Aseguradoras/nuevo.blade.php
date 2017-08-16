@extends('layouts.app')

@section('htmlheader_title')
    Nuevo Accidente
@endsection

@section('contentheader_title')
    ACCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-10">
            <!-- Horizontal Form -->
            <div class="box box-danger">

                <div class="box-header with-border">
                    <h3 class="box-title">REGISTRO DE NUEVO ACCIDENTE -- INFORME PRELIMINAR --</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" name="form" action="{{ url('Aseguradoras/GuardarNuevo') }}" role="form" method="POST">

                    <div class="box-body">

                        <div class="form-group" >
                            <label for="exampleInputEmail1" class="col-sm-2 control-label">Aseguradora:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control pull-right" name="nombre_aseg" placeholder="Nombre de la Aseguradora">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label for="exampleInputEmail1" class="col-sm-2 control-label">Contacto:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control pull-right" name="nombre_contacto" placeholder="Nombre del Contacto">
                            </div>
                        </div>

                        <div class="form-group" >
                            <label for="exampleInputEmail1" class="col-sm-2 control-label">Fono:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control pull-right" name="fono" placeholder="Teléfono del Contacto">
                            </div>
                            <label for="exampleInputEmail1" class="col-sm-1 control-label">Correo:</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control pull-right" name="mail" placeholder="Correo Electrónico del Contacto">
                            </div>
                        </div>
                        <hr>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                            <button name="boton" type="submit" class="btn btn-danger pull-right">Ingresar Aseguradora</button>
                        </div>


                    </div>
                </form>


            </div>
        </div>

        <div class="col-md-2">
            <a class="btn btn-app btn" href="/Aseguradoras">
                <i class="fa fa-list-ul"></i> Ver lista de Aseguradoras
            </a>
        </div>
    </div>


@endsection
