<?php
    class publiController extends Publication{
        public function index(){
          require_once 'views/publication/index.php';
          require_once 'views/layouts/footer.php';
        }

        public function create(){
            require_once 'views/publication/create.php';
            require_once 'views/layouts/footer.php';
        }
        public function store(){
            $nomima = $_FILES['imagen']['name'];
            $tipoima = $_FILES['imagen']['type'];
            $tamima = $_FILES['imagen']['size'];
            $ubicacion = 'uploads/'.$nomima;
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
            $idautor=$_SESSION['user']->id;
            if (parent::register($_POST, $ubicacion, $idautor)) {
              if($_SESSION['user']->id_role=="1"){
                header('Location: ?controller=admin&method=viewPublication');
              }
              elseif ($_SESSION['user']->id_role=="2") {
                header('Location: ?controller=teacher&method=viewPublication');
              }
            }
            else {
              echo 'Error en el registro';
            }
        }
        public function edit(){
            $publi = parent::search($_GET['idpub']);
            require_once 'views/publication/edit.php';
            require_once 'views/layouts/footer.php';
        }
        public function update(){
            $nomima = $_FILES['imagen']['name'];
            $tipoima = $_FILES['imagen']['type'];
            $tamima = $_FILES['imagen']['size'];
            $ubicacion = 'uploads/'.$nomima;
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
            if (parent::update_data($_POST, $ubicacion)) {
              if($_SESSION['user']->id_role=="1"){
                header('Location: ?controller=admin&method=viewPublication');
              }
              elseif ($_SESSION['user']->id_role=="2") {
                header('Location: ?controller=teacher&method=viewPublication');
              }
            }
            else {
              echo 'Error al actualizar los datos';
            }
        }
        public function delete(){
            if (parent::delete_data($_GET['idpub'])) {
              if($_SESSION['user']->id_role=="1"){
                header('Location: ?controller=admin&method=viewPublication');
              }
              elseif ($_SESSION['user']->id_role=="2") {
                header('Location: ?controller=teacher&method=viewPublication');
              }
            }
            else {
              echo 'Error al eliminar';
            }
        }
    }
?>
