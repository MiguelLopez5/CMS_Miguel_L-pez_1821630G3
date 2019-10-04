<?php
	class Security extends Database
	{
		public function validateLogin($name){
			try{
				$resul = parent::connect()->prepare("SELECT * FROM users WHERE name=?");
				$resul->bindParam(1, $name, PDO::PARAM_STR);
				$resul->execute();
				return $resul->fetch();
			}
			catch(Exception $e){
				die('Error en Security->validateLogin'.$e->getMessage());
			}
		}

		public static function verifySession(){
			if(!isset($_SESSION['user'])) header("Location: ?method=login");
		}

		public function verifyRole($role){
			if (!$role == $_SESSION['user']['id_role']) header("Location: ?method=login");
		}
	}
?>