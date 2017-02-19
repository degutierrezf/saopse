@extends('layouts.app')

@section('htmlheader_title')
	Inicio
@endsection


@section('main-content')

	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">N° Accidentes</span>
					<span class="info-box-number"></span>
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
					<span class="info-box-number"></span>
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
					<span class="info-box-number"></span>
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
					<span class="info-box-number"></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>

	<hr>

	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">N° Incidentes</span>
					<span class="info-box-number"></span>
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
					<span class="info-box-text">Incidentes Daño</span>
					<span class="info-box-number"></span>
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
					<span class="info-box-text">Incidentes SIN Daño</span>
					<span class="info-box-number"></span>
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
					<span class="info-box-number"></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
	</div>

	<section class="content-header">
		<h1>
			Agenda
			<small>Actividades Programadas</small>
		</h1>
	</section>

	<br>

	<div class="row">
		<div class="col-md-12">
			<!-- The time line -->
			<ul class="timeline">
				<!-- timeline time label -->
				<li class="time-label">
                  <span class="bg-red">
                    19 Feb. 2017
                  </span>
				</li>
				<!-- /.timeline-label -->
				<!-- timeline item -->
				<li>
					<i class="fa fa-envelope bg-blue"></i>

					<div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

						<h3 class="timeline-header"><a href="#">Incidente N° - 1</a> Contactar al liquidador</h3>

						<div class="timeline-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque ea, eligendi enim facere illum in, ipsa laborum modi nam nihil nulla provident repudiandae sit. Ab aperiam optio voluptate.
						</div>
						<div class="timeline-footer">
							<a class="btn btn-primary btn-flat btn-xs"><i class="fa fa-check"></i> Gestión Realizada</a>
							<a class="btn btn-warning btn-xs"><i class="fa fa-clock-o"></i> Asignar Nueva Fecha</a>
							<a class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Eliminar Gestión</a>
						</div>
					</div>
				</li>
				<!-- END timeline item -->
				<!-- timeline item -->
				<li>
					<i class="fa fa-file-pdf-o bg-blue"></i>

					<div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 16:03</span>

						<h3 class="timeline-header"><a href="#">Accidente N° - 6</a> Enviar Cotización al Usuario</h3>

						<div class="timeline-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque ea, eligendi enim facere illum in, ipsa laborum modi nam nihil nulla provident repudiandae sit. Ab aperiam optio voluptate.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cum doloribus eaque, eius enim error esse fugiat impedit incidunt neque nulla officiis quae quaerat quidem quis saepe sunt tempora vitae.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ipsam modi nesciunt perferendis quaerat quam ratione saepe. Autem eligendi maiores porro quod, sit voluptatum! In maiores necessitatibus reiciendis voluptate voluptatem!
						</div>
						<div class="timeline-footer">
							<a class="btn btn-primary btn-flat btn-xs"><i class="fa fa-check"></i> Gestión Realizada</a>
							<a class="btn btn-warning btn-xs"><i class="fa fa-clock-o"></i> Asignar Nueva Fecha</a>
							<a class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Eliminar Gestión</a>
						</div>
					</div>
				</li>
				<!-- END timeline item -->
				<!-- timeline item -->
				<li>
					<i class="fa fa-paperclip bg-blue"></i>

					<div class="timeline-item">
						<span class="time"><i class="fa fa-clock-o"></i> 17:22</span>

						<h3 class="timeline-header"><a href="#">Accidente N° - 7</a> Solicitar Soap del Vehículo</h3>

						<div class="timeline-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi cumque ea, eligendi enim facere illum in, ipsa laborum modi nam nihil nulla provident repudiandae sit. Ab aperiam optio voluptate.
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi commodi corporis deleniti, doloribus ea eligendi ex hic incidunt ipsa nemo odio odit porro praesentium sed, tempore ullam vitae, voluptatem.
						</div>
						<div class="timeline-footer">
							<a class="btn btn-primary btn-flat btn-xs"><i class="fa fa-check"></i> Gestión Realizada</a>
							<a class="btn btn-warning btn-xs"><i class="fa fa-clock-o"></i> Asignar Nueva Fecha</a>
							<a class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Eliminar Gestión</a>
						</div>
					</div>
				</li>
				<!-- END timeline item -->
			</ul>
		</div>
		<!-- /.col -->
	</div>

@endsection
