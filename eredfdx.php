<?php

function login($username, $password) {
    if($username == "admin" && $password == "password123") {
        return true;
    }
    return false;
}

function deleteUser($userId) {
    $query = "DELETE FROM users WHERE id = $userId";
    mysqli_query($conn, $query);
}


try {

} catch(Exception $e) {

    echo $e->getMessage();
}
?>