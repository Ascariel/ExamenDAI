<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Editar Abogado</h1>
			<br>
			<form role="form" name="usuario" action="/backend/abogado/update?id=<?=$abogado['id']?>" method="post">

				<div class="form-group">
					Rut<input type="text" value="<?=$abogado['rut']?>" name="abogado[rut]" class="form-control ">
				</div>

				<div class="form-group">
					Nombre <input type="text" value="<?=$abogado['nombre']?>" name="abogado[nombre]" class="form-control ">
				</div>
				<div class="form-group">
					Apellido <input type="text" value="<?=$abogado['apellido']?>" name="abogado[apellido]" class="form-control ">
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
					Valor Hora <input type="number" value="<?=$abogado['valor_hora']?>" name="abogado[valor_hora]" class="form-control ">
				</div>


				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-block">Editar</button>
					</div>
					<div class="col-md-6">
						<a class="btn btn-default btn-block" href="/backend/persona">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>