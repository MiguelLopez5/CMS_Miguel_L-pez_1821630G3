<?php 
    class publiController extends Publication{
        public function indexAdmin(){                
        require_once 'views/layouts/headerAdmin.php';
        require_once 'views/publication/index.php';
        require_once 'views/layouts/footer.php';
        }

        public function indexUser(){                
            require_once 'views/layouts/headerUser.php';
            require_once 'views/publication/index.php';
            require_once 'views/layouts/footer.php';
        }

        public function create(){
            require_once 'views/layouts/headerUser.php';
            require_once 'views/publication/create.php';
            require_once 'views/layouts/footer.php';
        }
        public function store(){
            $nomima = $_FILES['imagen']['name'];
            $tipoima = $_FILES['imagen']['type'];
            $tamima = $_FILES['imagen']['size'];
            $ubicacion = 'uploads/'.$nomima;       
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
            echo parent::register($_POST, $ubicacion) ? header('Location: ?controller=publi&method=indexUser') : 'Error en el registro';
                
        }
        public function edit(){
            $publi = parent::search($_GET['idpub']);
            require_once 'views/layouts/headerUser.php';
            require_once 'views/publication/edit.php';
            require_once 'views/layouts/footer.php';
        }
        public function update(){
            $nomima = $_FILES['imagen']['name'];
            $tipoima = $_FILES['imagen']['type'];
            $tamima = $_FILES['imagen']['size'];
            $ubicacion = 'uploads/'.$nomima;
            move_uploaded_file($_FILES['imagen']['tmp_name'],$ubicacion);
            echo parent::update_data($_POST, $ubicacion) ? header('Location: ?controller=publi&method=indexUser') : 'Error al actualizar los datos';
        }
        public function delete(){
            echo parent::delete_data($_GET['idpub']) ? header('Location: ?controller=publi&method=indexUser') : 'Error al eliminar';
        }
    }
?>