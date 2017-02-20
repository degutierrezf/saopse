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
			<small>Actividades programadas para el día</small>
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
                    <?php echo date('d-M-Y'); ?>
                  </span>
				</li>
				<!-- /.timeline-label -->
				<!-- timeline item -->
                <?php  foreach ($ges as $ges) { ?>
				<li>
					<i class="fa fa-envelope bg-blue"></i>

					<div class="timeline-item">
						<span class="time">Creado el: <i class="fa fa-clock-o"></i> <?php echo date('d-M-Y H:i:s', strtotime($ges->fec_crea))?></span>

						<h3 class="timeline-header"><a href="#"><?php if($ges->ac_o_in == 1){echo 'Accidente'; }else{echo 'Incidente';  }  ?> N° - <?php echo $ges->id_in_o_ac?></a> <?php echo $ges->asunto?></h3>

						<div class="timeline-body">
                            <?php echo $ges->texto?>
						</div>
						<div class="timeline-footer">
							<a class="btn btn-primary btn-flat btn-xs"><i class="fa fa-check"></i> Gestión Realizada</a>
							<a class="btn btn-warning btn-flat btn-xs"><i class="fa fa-clock-o"></i> Asignar Nueva Fecha</a>
							<a class="btn btn-danger btn-flat btn-xs"><i class="fa fa-close"></i> Eliminar Gestión</a>
						</div>
					</div>
				</li>
            	<?php }  ?>
				<!-- END timeline item -->
			</ul>
		</div>
		<!-- /.col -->
	</div>

@endsection
