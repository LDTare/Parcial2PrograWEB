<form>
    <div class="mb-3">
      <select name="album" class="form-select" aria-label="Default select example">
        <option value="0" selected>Escoga el album</option>
        <?php foreach($album as $al){ ?>
        <option value="<?php echo $al -> IdAlbum; ?>">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <?php } ?>
      </select>
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>