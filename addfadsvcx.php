<?php
class User {
    public $username;
    public $isAdmin;
    
    public function __wakeup() {

        if($this->isAdmin) {
            echo "管理员权限已授予";
        }
    }
}


$userdata = unserialize($_COOKIE['user_data']);
?>