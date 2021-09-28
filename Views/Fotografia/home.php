<h3 class="title mb-6">Registros sobre las Fotografias.</h3>
<a class="btn btn-primary" href="?controller=fotografia&action=create"> Create </a>
<table class="table" width="100%">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">IdAlbum</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha</th>
      <th scope="col">Fotografia</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($foto as $f) { ?>
    <tr>
      <th scope="row"><?php echo $f -> IdFoto; ?></th>
      <td><?php echo $f -> IdAlbum; ?><td>
      <td><?php echo $f -> Nombre; ?></td>
      <td><?php echo $f -> Fecha; ?></td>
      <td><img src="?controller=fotografia&action=imageView&id=<?php echo $a -> IdAlbum; ?>" /></td>
      <td><?php echo $f -> Estado; ?></td>
      <td>
        <a class="btn btn-warning" href="?controller=fotografia&action=edit&id=<?php echo $a -> IdAlbum; ?>">
        Editar
        </a>
        <a class="btn btn-danger" href="?controller=fotografia&action=delete&id=<?php echo $a -> IdAlbum; ?>">
        Eliminar
        </a> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>