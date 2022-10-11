<?php

require_once "ImageResizer.php";

if (!empty($_FILES['file'])) {

    $resizer = new ImageResizer($_FILES['file']);
    $resizer->maintainAspectRatio = true;
    $resizer->savePath = __DIR__ . '/';

    var_dump($resizer->resize(null, 200));
}



?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/*" />
    <input type="submit" value="Upload" />
</form>