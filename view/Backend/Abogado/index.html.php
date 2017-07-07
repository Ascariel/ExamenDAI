<h1 class=""><?=$title?></h1><br>
    <a href="/backend/abogado/new" class="btn btn-xs btn-info">Ingresar Abogado</a>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >

          <th>Rut</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Especialidad</th>
          <th>Fecha Contratacion</th>
          <th>Valor Hora</th>
          <th></th>
        </tr>
      </thead>


      <tbody>

        <?php foreach ($usuarios as $row): ?>
          <?php $usuario_id = $row['id']?>

          <tr>
            <td><?=$usuario_id?></td>
            <td><?=$row['rut']?></td>
            <td><?=$row['nombre']?></td>
            <td><?=$row['apellido']?></td>
            <td><?=$row['fecha_contratacion']?></td>
            <td><?=$row['valor_hora']?></td>
            <!-- Botones CRUD :) -->
            <td>
                <a href="/backend/usuario/edit?id=<?=$usuario_id?>" class="btn btn-success  btn-xs btn-block">Editar</a>
            </td>
            <td>
                <a href="/backend/usuario/delete?id=<?=$usuario_id?>" class="btn btn-danger  btn-xs btn-block eliminar">Eliminar</a>
            </td>
          </tr>
        <?php endforeach?>
      </tbody>

    </table>