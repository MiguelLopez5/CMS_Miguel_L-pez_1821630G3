<div class="w-100 d-flex">
    <h1>Publicaciones</h1>
    <?php
      if($_SESSION['user']->id_role=="1"){
    ?>
    <a class="btn btn-secondary ml-auto" href="?controller=admin&method=createPublication">Nueva publicación</a>
    <?php
      }
      elseif ($_SESSION['user']->id_role=="2") {
    ?>
        <a class="btn btn-secondary ml-auto" href="?controller=teacher&method=createPublication">Nueva publicación</a>
    <?php
      }
    ?>
</div>

<div class="d-grid grid-columns-xl-5 grid-columns-l-4 grid-columns-m-3 grid-columns-s-2 grid-columns-xs-1">
    <?php
        foreach(parent::showOwn($_SESSION['user']->id) as $publi):
    ?>
    <div class="grid-item card mx-auto mb-1">
        <h3><?= $publi->title ?></h3>
        <p class="mb-1"><?= $publi->description ?></p>
        <p class="mb-1"><img src="<?= $publi->url_image ?>" alt="Imagen de la publicación"></p>
        <p class="mb-1"><b><?= $publi->name ?></b></p>
        <p class="d-flex fx-center">
            <a href="?controller=admin&method=editPublication&idpub=<?= $publi->idP ?>">
                <button class="btn btn-green mx-1">Editar</button>
            </a>
            <a href="?controller=publi&method=delete&idpub=<?= $publi->idP ?>">
                <button class="btn btn-red mx-1">Borrar</button>
            </a>
        </p>
    </div>
    <?php endforeach; ?>
</div>