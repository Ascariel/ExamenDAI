    <h1 class=""><?= $title ?></h1><br>
    <a href="/backend/atencion/new" class="btn btn-xs btn-info">Nueva Atencion</a>

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
        </tr>
      </thead>


      <tbody>

        <?php foreach($atenciones as $row): ?>
          <?php $atencion_id = $row['id'] ?>

          <tr>
            <td><?= $row['id_atencion'] ?></td>
            <td><?= $row['nombre_cliente']." " . $row['apellido_cliente']?></td>
            <td><?= $row['nombre_abogado'] ." " . $row['apellido_abogado'] ?></td>
            <td><?= $row['fecha'] ?></td>
            <td><?= $row['hora'] ?></td>
            <td><?= $row['estado'] ?></td>
            <td><?= $row['direccion'] ?></td>
            <!-- Botones CRUD :) -->

            <td>
                <a href="/backend/atencion/anular?id=<?= $row['id_atencion']?>&estado=Anulada" class="btn btn-danger  btn-xs btn-block eliminar">Anular</a>                  
            </td> 
            <td>
                <a href="/backend/atencion/perdida?id=<?= $row['id_atencion']?>&estado=Perdida" class="btn btn-warning  btn-xs btn-block eliminar">Perdida</a>                  
            </td> 
            <td>
                <a href="/backend/atencion/confirmar?id=<?= $row['id_atencion']?>&estado=Confirmada" class="btn btn-success  btn-xs btn-block eliminar">Confirmar</a>                  
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