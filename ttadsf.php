<?php
require_once('old_version_library.php');


mysql_connect("localhost", "root", "password");
mysql_select_db("test_db");

$query = mysql_query("SELECT * FROM users");
?>