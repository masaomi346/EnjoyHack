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
    <?php echo "好きな言語は".h($_GET["xss"])."<br />"; ?>
    <a href="main.php">戻る</a>
  </body>
</html>
