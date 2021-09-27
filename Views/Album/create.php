<form method="post" action = "">
    <div class="mb-3">
      <select name="user" class="form-select" aria-label="Default select example">
        <option value="0" selected>IdUsuario</option>
        <?php foreach($user as $u) { ?>
        <option value="<?php echo $u -> IdUser; ?>"><?php echo $u -> Name . " " . $u -> LastName; ?></option>
        <?php } ?>
      </select>
    </div>
  <div class="mb-3">
    <label for="nameInput" class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="name" id="nameInput" aria-describedby="emailHelp">
    <div id="nameInputHelp" class="form-text">En este campo se coloca el nombre del albúm.</div>
  </div>
  <div class="mb-3">
    <label for="dateInput" class="form-label">Fecha:</label>
    <input name="fecha" type="date" class="form-control" id="dateInput">
  </div>
  <div class="mb-3">
    <select name="estado" class="form-select" aria-label="Default select example">
      <option value="0" selected>Estado: </option>
      <option value="1">Activo</option>
      <option value="2">Inactivo</option>
      <option value="3">Eliminado</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
  <a class="btn btn-danger" name="cancel" href="index.php?controller=album&action=home">Cancelar</a>
</form>