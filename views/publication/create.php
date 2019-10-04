
<form action="?controller=publi&method=store" method="POST" enctype="multipart/form-data">
	<label for="titulo">Titulo</label>
	<input style="border: 2px solid #494949;" type="text" name="titulo" id="titulo" required>
	<br><br>
	<label for="descrip">Descripción</label>
	<br>
	<textarea style="border: 2px solid #494949;" cols="100" rows="20" name="descri" id="descrip" required> Publicacion...</textarea>
	<br>
	<label for="imagen">Imagen</label>
	<input style="border: 2px solid #494949;" type="file" name="imagen" id="imagen" required>
	<br><br>
	<input class="btn btn-green" type="submit" value="Registrar">
</form>