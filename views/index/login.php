<form class="form w-60 mx-auto" action="?controller=security&method=login" method="POST">
	<legend>Iniciar sesión</legend>
	<div>
		<label for="nombre">Nombre</label> &nbsp;
		<input class="form-control mb-1" type="text" name="nombre" id="nombre">
	</div>
	<div>
		<label for="pass">Contraseña</label> &nbsp;
		<input class="form-control mb-1" type="password" name="pass" id="pass">
	</div>
	<div>
		<input type="submit" name="login" class="btn btn-green w-100">
	</div>
</form>