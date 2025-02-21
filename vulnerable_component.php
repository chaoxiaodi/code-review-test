<?php
// 使用过时的、不安全的库版本
require_once('old_version_library.php');

// 使用已知存在漏洞的旧版本函数
mysql_connect("localhost", "root", "password"); // 使用已废弃的mysql函数
mysql_select_db("test_db");

$query = mysql_query("SELECT * FROM users");
?>