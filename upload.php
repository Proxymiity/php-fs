<?php
    include 'auth.php';
    $path = dirname(__FILE__) . '/' . $_POST['path'];
    $filename = $_POST['file'];
    $filepath = $path . '/' . $filename;

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
