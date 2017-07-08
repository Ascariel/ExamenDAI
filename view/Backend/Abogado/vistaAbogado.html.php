<h1 class=""><?=$title?></h1><br>
   
    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >

          <th>Rut</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Especialidad</th>
          <th>Valor Hora</th>
          <th></th>
        </tr>
      </thead>


      <tbody>

        <?php foreach ($abogados as $row): ?>
          <?php $abogado_id = $row['id']?>

          <tr>
            <td><?=$row['rut']?></td>
            <td><?=$row['nombre']?></td>
            <td><?=$row['apellido']?></td>
            <td><?=$row['especialidad']?></td>
            <td><?=$row['valor_hora']?></td>
            <!-- Botones CRUD :) -->
          
          </tr>
        <?php endforeach?>
      </tbody>

    </table>