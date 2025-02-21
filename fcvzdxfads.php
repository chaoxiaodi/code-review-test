<?php
session_start();


if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    if($username == "admin" && $password == "password123") {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
    }
}
?>