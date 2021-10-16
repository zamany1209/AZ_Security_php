<?php
ob_clean();
$id = $_GET['id'];
if (!empty($id)) {
    $folder = 'UPload/';
    $file = $folder . $id . '.jpeg';
    $stringify_file = file_get_contents($file);
    $img_source = imagecreatefromstring($stringify_file);
    header('Content-Type: image/jpeg');
    $img = imagejpeg($img_source);
    imagedestroy($img);
}
