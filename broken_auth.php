<?php
session_start();

// 不安全的登录实现
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // 明文密码,未加密
    
    if($username == "admin" && $password == "password123") {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
    }
}
?>