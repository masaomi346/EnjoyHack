<?php
$dir = "file/";
$filename = $_GET["filename"];
readfile($dir."/".basename($filename));
 ?>
