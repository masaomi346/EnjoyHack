<?php
require_once __DIR__ . "/function.php";
login_session();
communication_https();
header("Content-Type: text/html; charset=UTF-8");
header("X-FRAME-OPTIONS: DENY");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <h2>Hello XSS!!</h2>
    <form action="" method="get">
      <input type="hidden" name="get" />
      <input type="hidden" name="token" value="<?php echo h(generate_token())?>">
			身長<input type="text" name="height"><br />
			体重<input type="text" name="weight"><br />
			<input type=submit value="送信">
		</form>
    <a href="main.php">戻る</a>
    <?php
    if(isset($_GET["get"])) {
      echo "<p>身長".h($_GET["height"])."、体重".h($_GET["weight"])."</p>";
    }
     ?>
  </body>
</html>
