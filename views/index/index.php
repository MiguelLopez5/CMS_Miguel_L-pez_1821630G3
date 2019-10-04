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
        border: 2px solid #FAFAFA;
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
        height: 95%;
        padding: 4%;
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
	</div>

	<div class="org">
	    <?php
	        foreach(parent::show() as $publi):
	    ?>
	    <div class="ind">
	        <p><?= $publi->title ?></p>
	        <p><?= $publi->description ?></p>
	        <p class="imagen"><img src="<?= $publi->url_image ?>" alt="Imagen de lapublicación"></p>
	        <p><?= $publi->name ?></p>
	    </div>
	    <?php endforeach; ?>
	</div>