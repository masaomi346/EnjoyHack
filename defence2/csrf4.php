<?php
require_once __DIR__ . "/function.php";
login_session();
communication_https();
header("Content-Type: text/html; charset=UTF-8");
header("X-FRAME-OPTIONS: DENY");
	if(session_id() !== $_POST['token']){
		die('正規の画面からご使用ください');
	}
	$user = $_SESSION["user"];
	$password = $_POST["password"];
	$dbname = "db";
	$username = "root";
	$pass = "kamesan346";

	$pdo = new PDO("mysql:host=localhost;dbname={$dbname};charset=utf8mb4",$username,$pass);
	$st = $pdo->prepare("select * from tb2 where user = ?");
	$st->execute(array($user));
	$row = $st->fetch();
	$name = $row["user"];
	$st2 = $pdo->prepare("update tb2 set password = ? where user = ?");
	$st2->execute(array($password,$user));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
		<?php echo $user."さんのパスワードを".$password."に変更しました"; ?><br />
		<a href="main.php">戻る</a>
  </body>
</html>
