<?php
    class adminController extends Security{
        public $rolereq;
        public function __construct(){
            parent::verifySession();
            $this->rolereq = 1;
            parent::verifyRole($this->rolereq);
        }
        public function index(){
            require_once 'views/admin/header.php';
            require_once 'views/admin/index.php';
            require_once 'views/layouts/footer.php';
        }
        public function viewUser(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=user");
        }
        public function createUser(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=user&method=create");
        }
        public function editUser(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=user&method=edit");
        }
        public function viewPublication(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=publi");
        }
        public function createPublication(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=publi&method=create")
        }
        public function editPublication(){
            require_once 'views/admin/header.php';
            header("Refresh:0; url=?controller=publi&method=edit")
        }
    }
?>