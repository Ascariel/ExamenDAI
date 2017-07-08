    <h1 class=""><?= $title ?></h1><br>
    <a href="/backend/usuario/new" class="btn btn-xs btn-info">Ingresar Usuario</a>
    <a href="/backend/atencion/new" class="btn btn-danger  btn-xs eliminar">Generar Atencion</a>

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



























    <h1 class=""><?= $title ?></h1><br>
    <a href="/backend/atencion/new" class="btn btn-xs btn-info">Nueva Atencion</a>

    <table id="category_table" class="table data-table table-hover table-striped table-condensed ">
      <thead >
        <tr >
          <th>ID Solicitud</th>
          <th>Nombre Cliente</th>
          <th>Nombre Abogado</th>
          <th>Estado</th>
          <th></th>
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
            <td> 
                <a href="/backend/atencion/realizada?id=<?= $row['id_atencion']?>&estado=Realizada" class="btn btn-info  btn-xs btn-block eliminar">Realizada</a>                  
            </td>                                             
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>

