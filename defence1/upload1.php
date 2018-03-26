<?php
require_once __DIR__ . "/function.php";
login_session();
header("Content-Type: text/html; charset=UTF-8");
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>TEST</title>
   </head>
   <body>
     <form action="upload2.php" method="post" enctype="multipart/form-data">
			<input type="file" name="filename" size="50">
			<input type="submit" value="アップロード">
		 </form>
   </body>
 </html>
