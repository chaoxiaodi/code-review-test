<?php

if(isset($_GET['name'])) {
    echo "Welcome, " . $_GET['name'];
}


$userInput = $_GET['comment'];
echo "<div class='comment'>" . $userInput . "</div>";
?>