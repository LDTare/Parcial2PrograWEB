<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album <?php echo $album -> Name; ?></h1>
        <p class="lead text-muted">Aquí podras ver todas las fotos de esté album, no te preocupes si necesitas tiempo para llenar con fotos, poco a poco.</p>
        <p>
          <a href="?controller=album&action=edit&id=<?php echo $album -> IdAlbum; ?>" class="btn btn-primary my-2">Editar</a>
          <a href="?controller=fotografia&action=create&idAlbum=<?php echo $album -> IdAlbum; ?>" class="btn btn-secondary my-2">Agregar fotografias</a>
        </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($gal as $g){ ?>
                <?php if($g -> Estado == 4){ ?>

                <div class="col">
                <div class="card mb-3">
                    <img src="data:<?php echo $g->DataFoto;?>;base64,<?php echo base64_encode($g->Foto);?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Foto: <?php echo $g -> Name;?></h5>
                        <p class="card-text"><small class="text-muted">Fecha: <?php echo $g -> Fecha; ?></small></p>
                            <a href="?controller=fotografia&action=edit&id=<?php echo $g -> IdFoto; ?>&idAlbum=<?php echo $g -> IdAlbum; ?>" class="btn btn-primary my-2">Editar</a>
                            <a href="?controller=fotografia&action=delete&id=<?php echo $g -> IdFoto; ?>&idAlbum=<?php echo $g -> IdAlbum; ?>" class="btn btn-secondary my-2">Eliminar</a>
                    </div>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
  </div>