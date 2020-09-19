<form class="form w-80 mx-auto" action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
	<legend>Crear publicación</legend>
	<label for="titulo">Titulo</label>
	<input class="form-control" type="text" name="titulo" id="titulo" required>
	<br><br>
	<label for="descrip">Descripción</label>
	<br>
	<textarea class="form-control" name="descri" id="descrip" required placeholder="Escribe aqui el texto de la publicacion..."></textarea>
	<br>
	<label for="imagen">Imagen</label>
	<input class="form-control" type="file" name="imagen" id="imagen" required>
	<br><br>
	<input class="btn btn-green w-100" type="submit" value="Registrar">
</form>