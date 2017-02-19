<?php $__env->startSection('htmlheader_title'); ?>
	Nuevo Accidente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
	ACCIDENTES - SAOPSE - SACYR OPERACIONES Y SERVICIOS CHILE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="row">
<div class="col-md-10">
              <!-- Horizontal Form -->
              <div class="box box-danger">

                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRO DE NUEVO ACCIDENTE</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="form" action="<?php echo e(url('Accidentes/GuardarNuevo')); ?>" role="form" method="POST">
                  
                  <div class="box-body">

	                  <div class="form-group">
	                  <label for="exampleInputEmail1" class="col-sm-3 control-label">Seleccione la Ruta:</label>
	                  	<div class="col-sm-8">
	                  	<select class="form-control pull-right" name="ruta">
	                  		<?php  foreach ($concesiones as $cs) { ?>
	                  			<option class="form-control pull-right" value="<?php echo $cs->id_ruta ?>"><?php echo $cs->nombre_conc ?> | <?php echo $cs->nombre_ruta ?></option>
							<?php }
							?>
	                  	</select>
	                  	</div>
	                </div>     

					<div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Fecha del Accidente:</label>
			                    <div class="col-sm-8">
			                    	<input type="date" class="form-control pull-right" name="fecha">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Hora del Incidente:</label>
			                    <div class="col-sm-8">
			                    	<input type="time" class="form-control pull-right" name="hora">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">PK de la Ruta:</label>
			                    <div class="col-sm-1">
			                    	<input type="text" class="form-control pull-right" name="pk1">
			                   	</div>
			                   	<div class="col-sm-1">
			                    	<input type="text" class="form-control pull-right" name="pk2">
			                   	</div>
		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Ruta:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r10" value="1" class="minimal" checked> Troncal <br>
			                    	 <input type="radio" name="r10" value="2" class="minimal"> Ramal <br>
			                   	</div>
		            </div>


		            <div class="form-group">

		            		<label for="exampleInputEmail1" class="col-sm-3 control-label">Grado de Magnitud:</label>
		            		
		            		<div class="col-sm-8">
			                  <div class="checkbox">
			                    <label>
			                      <input type="checkbox">
			                      Victimas Fatales.
			                    </label>
			                  </div>

			                  <div class="checkbox">
			                    <label>
			                      <input type="checkbox">
			                      Afecta a más de 1 pista de la vía.
			                    </label>
			                  </div>
			               </div>
			        </div>

					<hr>

			        <div class="form-group">       
			               <label for="exampleInputEmail1" class="col-sm-3 control-label">Grado de Magnitud II:</label>
			               
			               <div class="col-sm-8">
			               <div class="checkbox">
			                    <label>
			                      <input type="checkbox">
			                      Corte de Tránsito
			                    </label>
			               </div>
			               </div>

			               <label for="exampleInputEmail1" class="col-sm-3 control-label">Hora de Inicio del Corte:</label>
			               <div class="col-sm-8">
			                    	<input type="time" class="form-control pull-right" name="hora_ini">
			               </div>
			               <label for="exampleInputEmail1" class="col-sm-3 control-label">Hora de Fin del Corte:</label>
			               <div class="col-sm-8">
			                    	<input type="time" class="form-control pull-right" name="hora_fin">
			               </div>

                	</div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">By Pass:</label>
			                    <div class="col-sm-8">
			                    	 <input type="radio" name="r1" value="1" class="minimal" checked> Si <br>
			                    	 <input type="radio" name="r1" value="0" class="minimal"> No <br>

			                    	 <P><b>NOTA:</b> Si marcó una o mas alternativas, esta ficha debe ser enviada a la brevedad a la ITE.</P>
			                   	</div>
		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Tipo de Accidente:</label>
			                    <div class="col-sm-2">
			                    <center><p><b>Tipo:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Atropello
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Caida
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Volcamiento
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Incendio
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Otro
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Colisión:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Frontal
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Lateral
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Por Alcance
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Perpendicular
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Impacto con Animal
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Colisión con Objeto:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Frontal
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Lateral
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Posterior
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Colisión con Vehículo Detenido:</b></p></center>
				                    <select class="form-control pull-right">
					                    <option class="form-control pull-right">Frente/Frente</option>
					                    <option class="form-control pull-right">Frente/Lado</option>
					                    <option class="form-control pull-right">Frente/Posterior</option>
					                    <option class="form-control pull-right">Lado/Frente</option>
					                    <option class="form-control pull-right">Lado/Lado</option>
					                    <option class="form-control pull-right">Lado/Posterior</option>
					                    <option class="form-control pull-right">Posterior/Frente</option>
					                    <option class="form-control pull-right">Posterior/Lado</option>
					                    <option class="form-control pull-right">Posterior/Posterior</option>
				                  	</select>
			                   	</div>
		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Ubicación Relativa:</label>
			                    <div class="col-sm-3">
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce con semáforo funcionando
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce con semáforo apagado
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce regulado con carabineros
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce regulado con señal 'Pare'
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce con señal 'Ceda el Paso'
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Cruce sin señalización
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-3">
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Tramo de via recta
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Puente
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Tramo de vía curva vertical
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Acera o Berma
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Tramo de vía curva horizontal
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Enlace a nivel
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Enlace a desnivel
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Acceso 'NO' habilitado
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Retorno
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Plaza de Peaje
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Otros no considerados
					                    </label>
				                    </div>
			                   	</div>

		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Condiciones del Entorno:</label>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Punto Duro:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      C/Defensa
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      S/Defensa
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      No Existe
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Defensas:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Mediana
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Izquierda
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Derecha
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      No Existe
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Desnivel:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      C/Prot.
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      S/Prot.
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      No Existe
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Cerco:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Bueno
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Regular
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Malo
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      N/A
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Trabajos:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="radio" name="r5" class="minimal" checked> Si <br>
			                    	      <input type="radio" name="r5" class="minimal"> No <br>
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Banderero:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="radio" name="r4" class="minimal" checked> Si <br>
			                    	      <input type="radio" name="r4" class="minimal"> No <br>
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Velocidad Máxima:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="radio" name="r3" class="minimal" checked> 0 - 50 <br>
			                    	      <input type="radio" name="r3" class="minimal"> 50 - 80 <br>
			                    	      <input type="radio" name="r3" class="minimal"> 80 - 100 <br>
			                    	      <input type="radio" name="r3" class="minimal"> 100 - 120<br>
					                    </label>
				                    </div>
			                   	</div>

		            </div>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Concurrencia:</label>
			                    <div class="col-sm-8">
			                    	 <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Carabineros
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Ambulancia
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Bomberos
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Operadora
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      ITE
					                    </label>
				                    </div>
			                   	</div>
		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Consecuencias:</label>
			               		
			               		<div class="col-sm-1">
			                   	<center><p><b>Muertos:</b></p></center>
			                   		<label>Conductores:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Pasajeros:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Peatones:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Graves:</b></p></center>
			                   		<label>Conductores:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Pasajeros:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Peatones:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>M. Graves:</b></p></center>
			                   		<label>Conductores:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Pasajeros:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Peatones:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Leves:</b></p></center>
			                   		<label>Conductores:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Pasajeros:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Peatones:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">
			                   	</div>

			                   	<div class="col-sm-1">
			                   	<center><p><b>Ilesos:</b></p></center>
			                   		<label>Conductores:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Pasajeros:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">

				                    <label>Peatones:</label>
				                    <input type="text" class="form-control pull-right" name="pk2">
			                   	</div>

		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Condición de la Calzada:</label>
			                    <div class="col-sm-2">
			                    	 <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Seca
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Humeda
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Mojada
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Con barro
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Con nieve
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                    	 <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Con Aceite
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Escarcha
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Gravilla
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Otros
					                    </label>
					                </div>
			                   	</div>
		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Estado de Visibilidad:</label>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Luminosidad:</b></p></center>
				                    <select class="form-control pull-right">
					                    <option class="form-control pull-right">Diurna</option>
					                    <option class="form-control pull-right">Nocturna</option>
					                    <option class="form-control pull-right">Amanecer</option>
					                    <option class="form-control pull-right">Atardecer</option>
				                  	</select>
			                   	</div>


			                   	<div class="col-sm-2">
			                   	<center><p><b>Estado Atmosférico:</b></p></center>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Despejado
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Nublado
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Lluvia
					                    </label>
				                    </div>|
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Llovizna
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Neblina
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Nieve
					                    </label>
				                    </div>
			                   	</div>

			                   	<div class="col-sm-2">
			                   	<center><p><b>Luz Artificial:</b></p></center>
				                    <select class="form-control pull-right">
					                    <option class="form-control pull-right">Apagada</option>
					                    <option class="form-control pull-right">Encendida Suficientemente</option>
					                    <option class="form-control pull-right">Encendida Insuficientemente</option>
					                    <option class="form-control pull-right">Sin Luz</option>
				                  	</select>
			                   	</div>

		            </div>

		            <hr>

		            <div class="form-group" >
			               	<label for="exampleInputEmail1" class="col-sm-3 control-label">Origen Probable:</label>


			                   	<div class="col-sm-2">
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Falla Humana
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Falla Mecánica
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Reventón de neumático
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Peatón en la vía
					                    </label>
				                    </div>
			                   	</div>


			                   	<div class="col-sm-2">
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Animal u Obstaculo en la Vía
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Pavimento Resvaladizo
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Carga mal estibada
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      Condición Climática
					                    </label>
				                    </div>
				                    <div class="checkbox">
					                    <label>
					                      <input type="checkbox">
					                      No Definida
					                    </label>
				                    </div>
			                   	</div>

		            </div>

		            <hr>

		           	<div class="form-group" >
			               		<label for="exampleInputEmail1" class="col-sm-3 control-label">Dinámica del Accidente:</label>
			                    <div class="col-sm-8">
			                    	 <textarea class="form-control" rows="5" placeholder="Descripción del Accidente hasta 1500 Caracteres ..."></textarea>
			                </div>
		            </div>

					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                    <button name="boton" type="submit" class="btn btn-info pull-right" onClick="esrut(document.form.rut.value)">Ingresar Incidente</button>
                  </div><!-- /.box-footer -->

				</div>
                </form><!-- /.box -->
</div>

<div class="col-md-2">
    <a class="btn btn-app btn" href="/Accidentes/Mostrar">
    <i class="fa fa-list-ul"></i> Ver lista de Incidentes
    </a>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>