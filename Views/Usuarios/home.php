<h3 class="title mb-6">Registros sobre las Usuarios.</h3>
<a class="btn btn-primary" href="?controller=usuario&action=create"> Create </a>
<table class="table" width="100%">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">NameUser</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Rol</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($user as $us) { ?>
    <tr>
      <th scope="row"><?php echo $us -> IdUser; ?></th>
      <th scope="row"><?php echo $us -> Name; ?></th>
      <th scope="row"><?php echo $us -> LastName; ?></th>
      <th scope="row"><?php echo $us -> Email; ?></th>
      <th scope="row"><?php echo $us -> Usuario; ?></th>
      <th scope="row"><?php echo $us -> Password; ?></th>
      <th scope="row"><?php echo $us -> Rol; ?></th>
      <th scope="row"><?php echo $us -> Estado; ?></th>
      <td>
        <a class="btn btn-warning" href="?controller=usuario&action=edit&id=<?php echo $us -> IdUser; ?>">
        Editar
        </a>
        <a class="btn btn-danger" href="?controller=usuario&action=delete&id=<?php echo $us -> IdUser; ?>">
        Eliminar
        </a> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>