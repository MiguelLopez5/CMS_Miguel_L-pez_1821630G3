<style>
	.form-control{
		border: 2px solid #999999;
		border-radius: 5px;
	}
	div{
		padding: 1%;
	}
</style>

<?php
	/*if (isset($_SESSION['user'])){
		if($_SESSION['user']['id_role'] == "1"){
			header('Location: ?controller=user&method=index');
		}
		else if($_SESSION['user']['id_role'] == "2"){
			header('Location:?controller=publi&method=indexUser');
		}
	}*/
?>
<h1>Iniciar sesión</h1>
<form action="?controller=security&method=login" method="POST">
	<div>
		<label for="nombre">Nombre</label> &nbsp;
		<input class="form-control" type="text" name="nombre" id="nombre">
	</div>
	<div>
		<label for="pass">Contraseña</label> &nbsp;
		<input class="form-control" type="password" name="pass" id="pass">
	</div>
	<div>
		<input type="submit" name="login" class="btn btn-green">
	</div>
</form>