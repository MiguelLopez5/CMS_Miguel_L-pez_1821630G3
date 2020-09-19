<form class="form w-80 mx-auto" action="?controller=publi&method=update" method="POST" enctype="multipart/form-data">
	<legend>Editar publicación</legend>
	<input type="hidden" name="idpub" value="<?= $publi->idP ?>">
	<label for="titulo">Titulo</label>
	<input class="form-control" type="text" name="titulo" id="titulo" value="<?= $publi->title ?>" required>
	<br><br>
	<img class="w-100 mb-1" src="<?= $publi->url_image ?>" alt="Imagen_de_lapublicación">
	<br>
	<label for="imagen">Cambiar imagen</label>
	<input class="form-control" type="file" name="imagen" id="imagen" required>
	<br><br>
	<label for="descrip">Descripción</label>
	<br>
	<textarea class="form-control" name="descri" id="descrip" required><?= $publi->description ?></textarea>
	<br><br>
	<input class="btn btn-green w-100" type="submit" value="Cambiar">
</form>