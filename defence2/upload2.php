<?php
require_once __DIR__ . "/function.php";
login_session();
header("Content-Type: text/html; charset=UTF-8");
$filename = $_FILES["filename"];
if ($filename["type"] != "image/jpeg" && $filename["type"] != "image/pjpeg" && $filename["type"] != "image/png" ||
	    strtolower(mb_strrchr($filename["name"],".",FALSE)) != ".jpg" ||  strtolower(mb_strrchr($filename["name"],".",FALSE)) != ".png"){
			die("Error");
}
$dir = "file/";
move_uploaded_file($filename["tmp_name"],$dir.$filename["name"]);
$url = "c.php?filename=".basename($filename["name"]);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>TEST</title>
   </head>
   <body>
     アップロードしました。<br />
     <a href="<?php echo htmlspecialchars($url,ENT_QUOTES,'UTF-8');?>">
       <?php echo htmlspecialchars($filename["name"],ENT_QUOTES,'UTF-8'); ?>
     </a>
   </body>
 </html>
