<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	$dbname = "db";
	$username = "root";
	$pass = "kamesan346";

	if(isset($_POST["change"])) {
		if($_POST["user"] != "" or $_POST["password"] != "") {
			try {
				$pdo = new PDO("mysql:host=localhost;dbname={$dbname};charset=utf8mb4",$username,$pass);
				$st = $pdo->prepare("select * from tb2 where user = ? and password = ?");
	      $st->execute(array($_POST["user"],$_POST["password"]));
				if($st->rowCount() > 0) {
					$row = $st->fetch();
					$_SESSION["user"] = $_POST["user"];
				} else {
					die("ユーザー名が違います");
				}
			} catch(PDOException $e) {
				echo("Error");
				die();
			}
		} else {
			echo "空欄があります";
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
		<?php echo $row["user"];?>さん
		<form action="csrf3.php" method="post">
			新パスワード：<input type="password" name="password"><br />
			<input type=submit value="変更">
		</form>
  </body>
</html>
