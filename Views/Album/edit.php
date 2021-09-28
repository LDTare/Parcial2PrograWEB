<form method="post" action = "">
    <div class="mb-3">
      <select name="user" class="form-select" aria-label="Default select example">
        <option value="0" selected>IdUsuario <?php echo $album -> IdUser; ?></option>
        <?php foreach($user as $u) { ?>
        <option value="<?php echo $u -> IdUser; ?>"><?php echo $u -> Name . " " . $u -> LastName; ?></option>
        <?php } ?>
      </select>
    </div>
  <div class="mb-3">
    <label for="nameInput" class="form-label">Nombre:</label>
    <input  value="<?php echo $album -> Nombre; ?>" type="text" class="form-control" name="name" id="nameInput" aria-describedby="emailHelp">
    <div id="nameInputHelp" class="form-text">En este campo se coloca el nombre del albúm.</div>
  </div>
  <div class="mb-3">
    <label for="dateInput" class="form-label">Fecha:</label>
    <input value="<?php echo $album -> Fecha; ?>" name="fecha" type="date" class="form-control" id="dateInput">
  </div>
  <div class="mb-3">
    <select class="form-select" name="estado" aria-label="Default select example">
      <option value="0" selected>Estado: Anterior... <?php echo $album -> Estado; ?> </option>
      <option value="1">Activo</option>
      <option value="2">Inactivo</option>
      <option value="3">Eliminado</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a class="btn btn-danger" name="cancel" href="index.php?controller=album&action=home">Cancelar</a>
</form>