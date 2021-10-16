<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <input type="submit" value="save">
    </form>
</body>

</html>
<?php
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    // die(print_r($file));
    if (($file['size'] / 1024 / 1024) > 1 /*chek size file with MB */) {
        return print "larg file";
    }
    $types = ['image/png', 'image/jpeg'];
    if (!in_array($file['type'], $types)) {
        return print "this is not Image";
    }
    move_uploaded_file($file['tmp_name'], 'UPload/' . rand() . '.jpeg');
} //UPload
?>