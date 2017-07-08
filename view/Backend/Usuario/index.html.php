    <h1 class=""><?= $title ?></h1><br>
    <a href="/backend/usuario/new" class="btn btn-xs btn-info">Ingresar Usuario</a>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Rut</th>
          <th>Perfil</th>
          <!-- <th>Fecha Creacion</th> -->
          <th>Telefono</th>
          <th>Direccion</th>
          <th></th>
        </tr>
      </thead>


      <tbody>

        <?php foreach($usuarios as $row): ?>
          <?php $usuario_id = $row['id'] ?>

          <tr>
            <td><?= $usuario_id ?></td>
            <td><?=  ucwords($row['nombre']) ?></td>
            <td><?= $row['apellido'] ?></td>
            <td><?= $row['rut'] ?></td>
            <td><?= $row['rol'] ?></td>
            <!-- <td><?= $row['fecha_nacimiento'] ?></td>  -->
            <td><?= $row['telefonos'] ?></td>
            <td><?= $row['direccion'] ?></td>
            <!-- Botones CRUD :) -->
            <td>
                <a href="/backend/usuario/edit?id=<?=$usuario_id?>" class="btn btn-success  btn-xs btn-block">Editar</a>
            </td>
            <td>
                <a href="/backend/usuario/delete?id=<?=$usuario_id?>" class="btn btn-danger  btn-xs btn-block eliminar">Eliminar</a>                  
            </td>            
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>


<!-- <script type="text/javascript">
  $(function(){
   $("table.data-table").DataTable({
     "dom": "f"
   });
  });  
</script> -->