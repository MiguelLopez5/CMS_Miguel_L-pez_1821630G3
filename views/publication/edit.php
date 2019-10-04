
<form action="?controller=publi&method=update" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="idpub" value="<?= $publi->idP ?>">
	<label for="titulo">Titulo</label>
	<input style="border: 2px solid #494949;" type="text" name="titulo" id="titulo" value="<?= $publi->title ?>" required>
	<br><br>
	<img style ="width: 50%; height: auto;" src="<?= $publi->url_image ?>" alt="Imagen de lapublicación">
	<br>
	<label for="imagen">Cambiar magen</label>
	<input style="border: 2px solid #494949;" type="file" name="imagen" id="imagen" required>
	<br><br>
	<label for="descrip">Descripción</label>
	<br>
	<textarea style="border: 2px solid #494949;" cols="100" rows="20" name="descri" id="descrip" required> <?= $publi->description ?></textarea>
	<br><br>
	<input class="btn btn-green" type="submit" value="Cambiar">
</form>