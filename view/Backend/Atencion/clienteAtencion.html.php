 <h1 class=""><?= $title ?></h1><br>
 

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID Solicitud</th>
          <th>Nombre Cliente</th>
          <th>Nombre Abogado</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Estado</th>
          <th></th>
          <th></th>
        </tr>
      </thead>


      <tbody>

        <?php foreach($atenciones as $row): ?>
          <?php $atencion_id = $row['id'] ?>
          <?php $hora = strtotime($row['hora']); ?>
          <?php $fecha = strtotime($row['fecha']); ?>

          <tr>
            <td><?= $row['id_atencion'] ?></td>
            <td><?= $row['nombre_cliente']." " . $row['apellido_cliente']?></td>
            <td><?= $row['nombre_abogado'] ." " . $row['apellido_abogado'] ?></td>
             <td><?= date("d-m-Y", $fecha)?></td>
            <td><?= date("H:i", $hora) ?></td>
            <td><?= $row['estado'] ?></td>
            <td><?= $row['direccion'] ?></td>
            <!-- Botones CRUD :) -->

                                             
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