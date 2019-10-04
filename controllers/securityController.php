<?php
	class securityController extends Security
	{
		public function login(){
			$userinfo = parent::validateLogin($_POST['nombre']);

			if(!is_object($userinfo)){
				die('Ingreso corrupto');
			}
			if(password_verify($_POST['pass'], $userinfo->password)){
				$_SESSION['user'] = $userinfo;
				if ($userinfo->id_role==1){
					header('Location:?controller=user&method=index');
				}
				else if($userinfo->id_role==2){
					header('Location:?controller=publi&method=indexUser');
				}
			}
			else{
				echo "<script>alert('Usuario o contraseña incorrectos')</script>";
				header('Refresh: 0; url=?method=login');
			}
		}
		public function logout(){
			unset($_SESSION['user']);
			session_destroy();
			header('location: ?controller=index');
		}
	}
?>