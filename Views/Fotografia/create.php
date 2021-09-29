<form method="post" action="" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="input1" class="form-label">Nombre: </label>
    <input type="text" name="nombre" class="form-control" id="input1" aria-describedby="InputHelp">
    <div id="emailHelp" class="form-text">Ingrese el nombre de la foto.</div>
  </div>
  <div class="mb-3">
    <label for="input1" class="form-label">Fecha: </label>
    <input type="date" name="fecha" class="form-control" id="input1" aria-describedby="InputHelp">
    <div id="emailHelp" class="form-text">Ingrese el nombre de la foto.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Fotografia</label>
    <input type="file" name="archivoF" class="form-control" id="exampleInput" aria-describedby="InputFoto">
    <div id="emailHelp" class="form-text">Aquí usted puede subir la fotografia que usted desee.</div>
  </div>
  <div class="mb-3">
    <select name="estado" class="form-select" aria-label="Default select example">
      <option value="0" selected>Estado:</option>
      <option value="1">Activo</option>
      <option value="2">En proceso</option>
      <option value="3">Inactivo</option>
    </select>
  </div>
    <div class="mb-3">
      <select name="album" class="form-select" aria-label="Default select example">
        <option value="0" selected>Escoga el album</option>
        <?php foreach($album as $al){ ?>
        <option value="<?php echo $al -> IdAlbum; ?>"><?php echo $al -> Nombre; ?></option>
        <?php } ?>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Create</button>
  <a name="cancel" class="btn btn-warning" href="index.php?controller=fotografia&action=home">Cancelar</a>
</form>