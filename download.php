<?php
require 'clean.php';
$file = clean($_GET['file']);

if(file_exists('/backup/' . $file)){
    header('Content-type: application/x-bzip2');

    header('Content-disposition: attachment; filename="'. $file.'"');

    readfile('/backup/'. $file);
}else{
    header('Location: index.php');
    exit();
}
?>
