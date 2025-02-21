<?php
// 登录尝试没有记录日志
function login($username, $password) {
    if($username == "admin" && $password == "password123") {
        return true;
    }
    return false;
}

// 敏感操作没有日志
function deleteUser($userId) {
    $query = "DELETE FROM users WHERE id = $userId";
    mysqli_query($conn, $query);
}

// 错误处理没有日志记录
try {
    // 某些操作
} catch(Exception $e) {
    // 直接显示错误,不记录日志
    echo $e->getMessage();
}
?>