<h1 class=""><?=$title?></h1><br>
    <a href="/backend/abogado/new" class="btn btn-xs btn-info">Ingresar Abogado</a>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >

          <th>Rut</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Especialidad</th>
          <th>Valor Hora</th>
          <th>Fecha Contratacion</th>
          <th></th>
        </tr>
      </thead>


      <tbody>

        <?php foreach ($abogados as $row): ?>
          <?php $abogado_id = $row['id']?>

           <?php $fecha = strtotime($row['fecha_contratacion']); ?>
          
          <tr>
            <td><?=$row['rut']?></td>
            <td><?=$row['nombre']?></td>
            <td><?=$row['apellido']?></td>
            <td><?=$row['especialidad']?></td>
            <td><?=$row['valor_hora']?></td>
             <td><?= date("d-m-Y", $fecha)?></td>
            <!-- Botones CRUD :) -->
            <td>
                <a href="/backend/abogado/edit?id=<?=$abogado_id?>" class="btn btn-success  btn-xs btn-block">Editar</a>
            </td>
            <td>
                <a href="/backend/abogado/delete?id=<?=$abogado_id?>" class="btn btn-danger  btn-xs btn-block eliminar">Eliminar</a>
            </td>
          </tr>
        <?php endforeach?>
      </tbody>

    </table>