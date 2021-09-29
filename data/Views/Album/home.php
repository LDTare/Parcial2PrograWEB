<h3 class="title mb-6">Registros sobre los Albumes.</h3>
<a class="btn btn-primary" href="?controller=album&action=create"> Create </a>
<table class="table" width="100%">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">IdUser</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($album as $a) { ?>
    <tr>
      <th scope="row"><?php echo $a -> IdAlbum ?></th>
      <td><?php echo $a -> IdUser ?></td>
      <td><?php echo $a -> Nombre ?></td>
      <td><?php echo $a -> Fecha ?></td>
      <td><?php echo $a -> Estado ?></td>
      <td>
        <a class="btn btn-warning" href="?controller=album&action=edit&id=<?php echo $a -> IdAlbum ?>">
        Editar
        </a>
        <a class="btn btn-danger" href="?controller=album&action=delete&id=<?php echo $a -> IdAlbum ?>">
        Eliminar
        </a> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>