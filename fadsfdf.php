<?php
$conn = mysqli_connect("localhost", "root", "password", "test_db");


$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
    echo $row['username'] . " " . $row['password'];
}
?>