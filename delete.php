<?php
    include 'auth.php';
    $path = dirname(__FILE__) . '/' . $_POST['path'];
    $filename = $_POST['file'];
    $filepath = $path . '/' . $filename;

    unlink($filepath);

    if (!(new \FilesystemIterator($path))->valid()) {
        rmdir($path);
    }
