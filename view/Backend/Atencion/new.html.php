

<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>Crear Solicitud</h1>
	
			<br>
			<form role="form" name="atencion" action="/Backend/atencion/create" method="post">
                <input type="hidden" name="atencion[estado]" value="Agendada">     

				<div class="form-group">
					Fecha<input type="date" required="" name="atencion[fecha]" class="form-control ">
				</div>  

					<div class="form-group">
					Hora<input type="time" required="" name="atencion[hora]" class="form-control" min="09:00" max="18:00" step="1800" ">
				</div>  

				<label>Cliente</label>
				<div class="form-group">
					<select name="atencion[id_cliente]" class="form-control">
						<?php foreach ($clientes as $cliente): ?>
							<option value="<?= $cliente['id'] ?>"><?= $cliente['nombre'] ?> <?= $cliente['apellido'] ?></option>
						<?php endforeach ?>
					</select>	
				</div> 	

				<label>Abogado</label>
				<div class="form-group">
					<select name="atencion[id_abogado]" class="form-control">
						<?php foreach ($abogados as $abogado): ?>
							<option value="<?= $abogado['id_abogado'] ?>"><?= $abogado['nombre'] ?> <?= $abogado['apellido'] ?></option>
						<?php endforeach ?>
					</select>	
				</div>				 			              

				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-block">Registrar</button>
					</div>
					<div class="col-md-6">
						<a class="btn btn-default btn-block" href="/backend/atencion">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>