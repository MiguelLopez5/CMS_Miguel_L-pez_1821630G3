	<div class="w-100">
	    <h1>Publicaciones</h1>
	</div>

	<div class="d-grid grid-columns-xl-5 grid-columns-l-4 grid-columns-m-3 grid-columns-s-2 grid-columns-xs-1">
	    <?php
	        foreach($consulta as $publi):
	    ?>
	    <div class="grid-item card mx-auto mb-1">
	        <h3><?= $publi->title ?></h3>
	        <p class="mb-1"><?= $publi->description ?></p>
	        <p class="mb-1"><img src="<?= $publi->url_image ?>" alt="Imagen_de_la_publicación"></p>
	        <p><b><?= $publi->name ?></b></p>
	    </div>
	    <?php endforeach; ?>
	</div>
