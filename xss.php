<?php
// 直接输出未经过滤的用户输入
if(isset($_GET['name'])) {
    echo "Welcome, " . $_GET['name'];
}

// 在HTML中直接使用未过滤的数据
$userInput = $_GET['comment'];
echo "<div class='comment'>" . $userInput . "</div>";
?>