<?php
$conn = mysqli_connect("localhost", "root", "password", "test_db");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
    echo "信用卡号: " . $row['credit_card'] . "<br>";
    echo "社保号: " . $row['ssn'] . "<br>";
}
?>