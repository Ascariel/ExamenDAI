<h3>Filtros</h3>
<br>
<form method="GET" action="/backend/usuario/estadisticas">
				<div class="row">
						<div class="col-md-2">
								<!-- <label>Estado Atencion</label> -->
								<select class="form-control" name="atenciones[estado]">
										<option value="">Por Estado</option>
										<option value="Agendada">Agendada</option>
										<option value="Perdida">Perdida</option>
										<option value="Confirmada">Confirmada</option>
										<option value="Anulada">Anulada</option>
								</select>                
						</div>
						
						<div class="col-md-2">
								<!-- <label>Especialidad</label> -->
								<select class="form-control" name="atenciones[especialidad]">
										<option value="">Por Especialidad</option>
										<option value="Civil">Civil</option>
										<option value="Familia">Familia</option>
										<option value="Penalista">Penalista</option>
								</select>                
						</div>

						<div class="col-md-2">
								<select name="atenciones[id_abogado]" class="form-control">
										<option value="">Por Abogado</option>
										<?php foreach ($abogados as $abogado): ?>
												<option value="<?= $abogado['id'] ?>"><?= $abogado['nombre'] ?> <?= $abogado['apellido'] ?></option>
										<?php endforeach ?>
								</select>                
						</div>
						
						<div class="col-md-2">
								<!-- <label>Tipo Persona</label> -->
								<select class="form-control" name="clientes[tipo_persona]">
										<option value="">Por Tipo Persona</option>
										<option value="Juridica">Juridica</option>
										<option value="Natural">Natural</option>
								</select>                
						</div>

							
						<div class="col-md-6">
						</div>

						<div class="col-md-12"></div>

						<div class="col-md-2">
						<br>
								<a href="/backend/usuario/estadisticas" class="btn btn-default btn-block btn-sm">Limpiar Filtros</a>
						</div>
						<div class="col-md-2">
								<br>
								<input type="submit" value="Filtrar" class="btn-sm btn btn-block btn-primary" name=""> 
						</div>
						<div class="col-md-8"></div>            
				</div>

		
			
</form>		


		 <h3 class="">Estadisticas Atenciones</h3><br>

		<table id="category_table" class="table data-table table-hover table-striped table-condensed ">
			<thead >
				<tr >
					<th>ID Solicitud</th>
					<th>Nombre Cliente</th>
					<th>Nombre Abogado</th>
					<th>Fecha</th>
					<th>Valor Hora</th>
					<th>Hora</th>
					<th>Especialidad</th>
					<th>Estado</th>
				</tr>
			</thead>


			<tbody>
		 
				<?php foreach($atenciones as $row): ?>
					<?php $atencion_id = $row['id'] ?>
					<?php $hora = strtotime($row['hora']); ?>

					<tr>
						<td><?= $row['id_atencion'] ?></td>
						<td><?= $row['nombre_cliente']." " . $row['apellido_cliente']?></td>
						<td><?= $row['nombre_abogado'] ." " . $row['apellido_abogado'] ?></td>
						<td><?= $row['fecha'] ?></td>
						<td><?= $row['valor_hora'] ?></td>
						<td><?= date("H:i", $hora) ?></td>
						<td><?= $row['especialidad'] ?></td>
						<td><?= $row['estado'] ?></td>
						<td><?= $row['direccion'] ?></td>                                         
					</tr>
				<?php endforeach ?>

				<tr>
						<td><b>Total Atenciones:</b>  </td>
						<td> <b> <?= count($atenciones)  ?></b></td>
				</tr>   
				<tr>
						<td><b>Valor Total</b>  </td>
						<td> <b><?= $valor_total_atenciones ?></b></td>
				</tr>                
				 
			</tbody>

		</table>

<hr>

		<h3 class="">Estadisticas Clientes</h3><br>

		<table id="category_table" class="table data-table table-hover table-striped table-condensed ">
			<thead >
				<tr >
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Rut</th>
					<th>Tipo Persona</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th></th>
				</tr>
			</thead>


			<tbody>
				<?php foreach($clientes as $row): ?>
					<?php $usuario_id = $row['id'] ?>
					
					<tr>
						<td><?= $usuario_id ?></td>
						<td><?=  ucwords($row['nombre']) ?></td>
						<td><?= $row['apellido'] ?></td>
						<td><?= $row['rut'] ?></td>
						<td><?= $row['tipo_persona'] ?></td>
						<td><?= $row['telefonos'] ?></td>
						<td><?= $row['direccion'] ?></td> 
					</tr>
				<?php endforeach ?>
				<tr>
						<td><b>Total Clientes:</b>  </td>
						<td> <b> <?= count($clientes)  ?></b></td>
				</tr>       
			</tbody>

		</table>


		<hr>
