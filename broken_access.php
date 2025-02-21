<?php
// 没有进行权限验证就访问管理员功能
function viewAdminPage() {
    echo "这是管理员页面";
}

if(isset($_GET['page']) && $_GET['page'] == 'admin') {
    viewAdminPage();
}
?>