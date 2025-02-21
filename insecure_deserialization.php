<?php
class User {
    public $username;
    public $isAdmin;
    
    public function __wakeup() {
        // 不安全的反序列化
        if($this->isAdmin) {
            echo "管理员权限已授予";
        }
    }
}

// 直接反序列化用户输入
$userdata = unserialize($_COOKIE['user_data']);
?>