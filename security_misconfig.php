<?php
// 显示详细的错误信息
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 使用默认的危险配置
$conn = mysqli_connect("localhost", "root", "", "test_db");
phpinfo();
?>