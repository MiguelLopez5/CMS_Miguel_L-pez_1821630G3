<?php
    class adminController extends Security{
        public $rolereq;
        public function __construct(){
            parent::verifySession();
            $this->rolereq = 2;
            parent::verifyRole($this->rolereq);
        }
        public function index(){
            require_once 'views/teacher/header.php';
            require_once 'views/teacher/index.php';
            require_once 'views/layouts/footer.php';
        }
        public function viewPublication(){
            require_once 'views/teacher/header.php';
            header("Refresh:0; url=?controller=publi");
        }
        public function createPublication(){
            require_once 'views/teacher/header.php';
            header("Refresh:0; url=?controller=publi&method=create")
        }
        public function editPublication(){
            require_once 'views/teacher/header.php';
            header("Refresh:0; url=?controller=publi&method=edit")
        }
    }
?>