<form enctype="multipart/form-data" action="" method="POST">
    <input type="file" name="userfile">
    <p><input type="submit"></p>
</form>

<?php

function validateFile($name) {
    if (! isset($name)) return false;
    $imageType = exif_imagetype($name);
    if ($imageType == IMAGETYPE_JPEG || $imageType == IMAGETYPE_PNG) return true;
}
if (isset($_FILES['userfile']) && ! validateFile($_FILES['userfile']['tmp_name'])) {
    echo 'Неверный формат файла';
    exit;
}

$dir = 'image/';
$uploadfile = $dir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
}
