<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
		<form action="csrf2.php" method="post">
			<input type="hidden" name="change" />
			ユーザ名：<input type="text" name="user"><br />
			パスワード：<input type="password" name="password"><br />
			<input type=submit value="変更">
		</form>
  </body>
</html>
