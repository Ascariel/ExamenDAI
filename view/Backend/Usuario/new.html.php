<div class="container">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center"><?=$title?></h1>
			<br>
			<form role="form" name="usuario" action="/Backend/usuario/create" method="post">
                              
				<div class="form-group">
					Rut<input type="text" required="" name="usuario[rut]" class="form-control ">
				</div>  
				<div class="form-group">
					Password<input type="password" required="" name="usuario[password]" class="form-control ">
				</div>              
				<div class="form-group">
					Nombre <input type="text" required="" value="" name="usuario[nombre]" class="form-control ">
				</div>         
				<div class="form-group">
					Apellido <input type="text" required=""  name="usuario[apellido]" class="form-control ">
				</div>          
				<div class="form-group">
					Direccion <input type="text" required="" name="usuario[direccion]" class="form-control ">
				</div> 
				<div class="form-group">
					Telefono <input type="text" required="" name="usuario[telefonos]" class="form-control ">
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
						<button type="submit" class="btn btn-success btn-block">Registrar</button>
					</div>
					<div class="col-md-6">
						<a class="btn btn-default btn-block" href="#">Volver</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>