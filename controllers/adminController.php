<?php
    class adminController extends Security{
        public function __construct(){
            $rolereq = "1";
            parent::verifyRole($rolereq);
        }
        public function index(){
            require_once 'views/admin/header.php';
            require_once 'views/admin/index.php';
            require_once 'views/layouts/footer.php';
        }
        public function viewUser(){
            require_once 'views/admin/header.php';
            call_user_func(["userController", "index"]);
        }
        public function createUser(){
            require_once 'views/admin/header.php';
            call_user_func(["userController", "create"]);
        }
        public function editUser(){
            require_once 'views/admin/header.php';
            call_user_func(["userController", "edit"]);
        }
        public function viewPublication(){
            require_once 'views/admin/header.php';
            call_user_func(["publiController", "index"]);
        }
        public function createPublication(){
            require_once 'views/admin/header.php';
            call_user_func(["publiController", "create"]);
        }
        public function editPublication(){
            require_once 'views/admin/header.php';
            call_user_func(["publiController", "edit"]);
        }
    }
?>
