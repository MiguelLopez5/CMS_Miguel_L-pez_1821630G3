<style>
    .drum{
        width: 100%;
        display: flex;
        border-bottom: 2px solid #FAFAFA;
        padding: 4%;
    }
    h1{
        width: 75%;
    }
    .link{
        border: 2px solid #999999;
        border-radius: 5px;
        padding: 5px;
        height: 100%;
    }
    .org{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        justify-content: center;
        align-items: center;
    }
    .ind{
        display: flex;
        flex-direction: column;
        width: 90%;
        height: auto;
        padding: 4%;
        border: 2px solid #999999;
        border-radius: 5px;
        padding: auto;
    }
    img{
        height: 100%;
        width: 50%;
    }
    .imagen{
        text-align: center;
    }
</style>
<div class="drum">
    <h1>Publicaciones</h1>
    <?php
      if($_SESSION['user']->id_role=="1"){
    ?>
    <a class="link" href="?controller=admin&method=createPublication">Nueva publicación</a>
    <?php
      }
      elseif ($_SESSION['user']->id_role=="2") {
    ?>
        <a class="link" href="?controller=teacher&method=createPublication">Nueva publicación</a>
    <?php
      }
    ?>
</div>

<div class="org">
    <?php
        foreach(parent::showOwn($_SESSION['user']->id) as $publi):
    ?>
    <div class="ind">
        <p><?= $publi->idP ?></p>
        <p><?= $publi->title ?></p>
        <p><?= $publi->description ?></p>
        <p class="imagen"><img src="<?= $publi->url_image ?>" alt="Imagen de la publicación"></p>
        <p><?= $publi->name ?></p>
        <p>
            <a href="?controller=admin&method=editPublication&idpub=<?= $publi->idP ?>">
                <button class="btn btn-outline-green">Editar</button>
            </a>
            <a href="?controller=publi&method=delete&idpub=<?= $publi->idP ?>">
                <button class="btn btn-outline-red">Borrar</button>
            </a>
        </p>
    </div>
    <?php endforeach; ?>
</div>
