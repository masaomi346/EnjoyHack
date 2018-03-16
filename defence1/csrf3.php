<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
$password = $_POST["password"];
$user = $_SESSION["user"]
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
		<?php echo $user;?>さん<br />
		<?php echo htmlspecialchars($password,ENT_QUOTES,'UTF-8'); ?>に変更します。よろしいですか？<br />
		<form action="csrf4.php" method="post">
			<input type="hidden" name="password" value="<?php echo $password; ?>">
			<input type=submit value="はい">
		</form>
  </body>
</html>
