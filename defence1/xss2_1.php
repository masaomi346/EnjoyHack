<?php
require_once __DIR__ . "/function.php";
session_start();
header("Content-Type: text/html; charset=UTF-8");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <h2>Hello XSS!!</h2>
    <form action="xss2_2.php" method="get">
			好きな言語は：<input type="text" name="xss"><BR>
			<input type="submit" value="投稿">
		</form>
  </body>
</html>
