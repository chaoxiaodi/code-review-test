<?php
function viewAdminPage() {
    echo "这是管理员页面";
}

if(isset($_GET['page']) && $_GET['page'] == 'admin') {
    viewAdminPage();
}
?>