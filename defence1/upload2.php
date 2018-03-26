<?php
require_once __DIR__ . "/function.php";
login_session();
header("Content-Type: text/html; charset=UTF-8");
$filename = $_FILES["filename"];
$dir = "file/";
move_uploaded_file($filename["tmp_name"],$dir.$filename["name"]);
$url = $dir.urlencode($filename["name"]);
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
