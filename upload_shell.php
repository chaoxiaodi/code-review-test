<?php
// 不安全的文件上传,可以上传PHP webshell
if(isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    $destination = "uploads/" . $filename;
    
    // 没有验证文件类型和内容
    if(move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
        echo "文件上传成功: " . $destination;
    }
}
?>

<!-- HTML表单 -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传">
</form>