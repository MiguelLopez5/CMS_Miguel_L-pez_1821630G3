<?php
    class teacherController extends Security{
        public $rolereq;
        public function __construct(){
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
            call_user_func(["publiController", "index"]);
        }
        public function createPublication(){
            require_once 'views/teacher/header.php';
            call_user_func(["publiController", "create"]);
        }
        public function editPublication(){
            require_once 'views/teacher/header.php';
            call_user_func(["publiController", "edit"]);
        }
    }
?>
