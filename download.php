<?php
require 'clean.php';
header('Content-type: application/x-bzip2');

$file = $_GET['file'];

header('Content-disposition: attachment; filename="'.clean($file).'"');

readfile('/backup/'.clean($file));
?>
