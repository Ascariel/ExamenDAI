    <h1 class="">Estadisticas Clientes</h1><br>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Rut</th>
          <!-- <th>Fecha Creacion</th> -->
          <th>Telefono</th>
          <th>Direccion</th>
          <th></th>
        </tr>
      </thead>


      <tbody>
        <?php foreach($clientes as $row): ?>
          <?php $usuario_id = $row['id'] ?>
          
          <tr>
            <td><?= $usuario_id ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['apellido'] ?></td>
            <td><?= $row['rut'] ?></td>
            <td><?= $row['telefonos'] ?></td>
            <td><?= $row['direccion'] ?></td> 
            <!-- <td><?= $valor_total ?></td>           -->
          </tr>
        <?php endforeach ?>
        <tr>
            <td><b>Total Clientes:</b>  </td>
            <td> <b> <?= count($clientes)  ?></b></td>
        </tr>       
      </tbody>

    </table>


    <br><br>
     <h1 class="">Estadisticas Atenciones</h1><br>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID Solicitud</th>
          <th>Nombre Cliente</th>
          <th>Nombre Abogado</th>
          <th>Fecha</th>
          <th>Valor Hora</th>
          <th>Hora</th>
          <th>Estado</th>
        </tr>
      </thead>


      <tbody>
     
        <?php foreach($atenciones as $row): ?>
          <?php $atencion_id = $row['id'] ?>
          <?php $hora = strtotime($row['hora']); ?>
          <?php $valor_total = $row['valor_total'] ?>

          <tr>
            <td><?= $row['id_atencion'] ?></td>
            <td><?= $row['nombre_cliente']." " . $row['apellido_cliente']?></td>
            <td><?= $row['nombre_abogado'] ." " . $row['apellido_abogado'] ?></td>
            <td><?= $row['fecha'] ?></td>
            <td><?= $row['valor_hora'] ?></td>
            <td><?= date("H:i", $hora) ?></td>
            <td><?= $row['estado'] ?></td>
            <td><?= $row['direccion'] ?></td>                                         
          </tr>
        <?php endforeach ?>

        <tr>
            <td><b>Total Atenciones:</b>  </td>
            <td> <b> <?= count($atenciones)  ?></b></td>
        </tr>   
        <tr>
            <td><b>Valor Total</b>  </td>
            <td> <b><?= $valor_total ?></b></td>
        </tr>                
         
      </tbody>

    </table>

