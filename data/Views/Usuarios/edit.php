<form method="post" action="">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
    <input type="text" value="<?php echo $user -> Name; ?>" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ingrese el nombre del Usuario.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" value="<?php echo $user -> LastName; ?>" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ingrese el apellido del Usuario.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input type="email" value="<?php echo $user -> Email; ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ingrese el email.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de Usuario: </label>
    <input type="text" value="<?php echo $user -> Usuario; ?>" class="form-control" name="nameus" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ingrese su username.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="passw1" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password Reconfirmación</label>
    <input type="password" name="passw2" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <select name="estado" class="form-select" aria-label="Default select example">
      <option value="0" selected>Estado</option>
      <option value="1">Activo</option>
      <option value="2">Confimacion</option>
      <option value="3">Inactivo</option>
    </select>
  </div>
  <div class="mb-3">
    <select name="rol" class="form-select" aria-label="Default select example">
      <option selected>Escoja el rol: <?php echo $user -> Rol; ?>  </option>
      <option value="Admin">Administrador</option>
      <option value="User">Usuario</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a name="cancel" class="btn btn-warning" href="index.php?controller=usuario&action=home">Cancelar</a>
</form>