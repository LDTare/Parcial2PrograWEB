<h3 class="title mb-6">Registros sobre las Fotografias.</h3>
<a class="btn btn-primary" href="?controller=fotografia&action=create"> Create </a>
<table class="table" width="200%" style="height: 100%;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th >IdAlbum</th>
      <th >Nombre</th>
      <th >Fecha</th>
      <th >Fotografia</th>
      <th >Estado</th>
      <th >Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($foto as $f) { ?>
    <tr>
      <th scope="row"><?php echo $f -> IdFoto; ?></th>
      <td><?php echo $f -> IdAlbum; ?><td>
      <td><?php echo $f -> Name; ?></td>
      <td><?php echo $f -> Fecha; ?></td>
      <td><img width="100" src="data:<?php echo $f->DataFoto;?>;base64,<?php echo base64_encode($f->Foto);?>" /></td>
      <td><?php echo $f -> Estado; ?></td>
      <td>
        <a class="btn btn-warning" href="?controller=fotografia&action=edit&id=<?php echo $f -> IdFoto; ?>">
        Editar
        </a>
        <a class="btn btn-danger" href="?controller=fotografia&action=delete&id=<?php echo $f -> IdFoto; ?>">
        Eliminar
        </a> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>