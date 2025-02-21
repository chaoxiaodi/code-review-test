<?php

if(isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    $destination = "uploads/" . $filename;
    

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