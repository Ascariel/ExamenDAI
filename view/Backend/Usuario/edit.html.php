<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Editar Usuario</h1>
			<br>
			<form role="form" name="usuario" action="/backend/usuario/update?id=<?= $usuario['id'] ?>" method="post">
                              
				<div class="form-group">
					Rut<input type="text"  value="<?= $usuario['rut'] ?>" required="" name="usuario[rut]" class="form-control ">
				</div>  
<!-- 				<div class="form-group">
					Password<input type="text" value="<?= $usuario['password'] ?>" name="usuario[password]" class="form-control ">
				</div>  -->             
				<div class="form-group">
					Nombre <input type="text" value="<?= $usuario['nombre'] ?>" required="" name="usuario[nombre]" class="form-control ">
				</div>         
				<div class="form-group">
					Apellido <input type="text" value="<?= $usuario['apellido'] ?>" required="" name="usuario[apellido]" class="form-control ">
				</div>          
				<div class="form-group">
					Direccion <input type="text" value="<?= $usuario['direccion'] ?>" required="" name="usuario[direccion]" class="form-control ">
				</div> 
				<div class="form-group">
					Telefono <input type="text" value="<?= $usuario['telefonos'] ?>" required="" name="usuario[telefonos]" class="form-control ">
				</div> 	

				<div class="form-group">
					<select name="usuario[tipo_persona]" class="form-control">
						<option value="NATURAL">NATURAL</option>
						<option value="JURIDICA">JURIDICA</option>
					</select>	
				</div> 	

				<div class="form-group">
					<select name="usuario[rol]" class="form-control">
						<option value="CLIENTE">CLIENTE</option>
						<option value="SECRETARIA">SECRETARIA</option>
						<option value="ADMINISTRADOR">ADMINISTRADOR</option>
						<option value="GERENTE">GERENTE</option>
					</select>	
				</div> 			              

				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-block">Editar</button>
					</div>
					<div class="col-md-6">
						<a class="btn btn-default btn-block" href="/backend/usuario">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>