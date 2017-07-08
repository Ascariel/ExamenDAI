<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center"><?=$title?></h1>
			<br>
			<form role="form" name="abogado" action="/Backend/abogado/create" method="post">

				<div class="form-group">
					Rut<input type="text" required=""  name="abogado[rut]" class="form-control ">
				</div>

				<div class="form-group">
					Nombre <input type="text" required="" value="" name="abogado[nombre]" class="form-control ">
				</div>
				<div class="form-group">
					Apellido <input type="text" required=""  name="abogado[apellido]" class="form-control ">
				</div>

				<div class="form-group">
					Especialidad
					<select name="abogado[especialidad]" class="form-control">
						<option value="Civil">Civil</option>
						<option value="Familia">Familia</option>
						<option value="Penalista">Penalista</option>
					</select>
				</div>

				<div class="form-group">
					Fecha contratacion <input type="date" required="" name="abogado[fecha_contratacion]" class="form-control ">
				</div>  

				<div class="form-group">

					Valor Hora <input type="number" required="" name="abogado[valor_hora]" class=form-control>

				</div>


				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-block">Registrar</button>
					</div>
					<div class="col-md-6">
						<a class="btn btn-default btn-block" href="/backend/abogado">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>