<?php
require_once __DIR__ . "/function.php";
login_session();
communication_https();
header("Content-Type: text/html; charset=UTF-8");
header("X-FRAME-OPTIONS: DENY");
$data = $_GET["data"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <form action="eval2.php" method="get">
      <input type="hidden" name="data" value="<?php echo htmlspecialchars($data, ENT_QUOTES, 'UTF-8') ?>">
      <input type="hidden" name="token" value="<?php echo h(generate_token())?>">
      一言：<input type="text" name="message" />
      <input type="submit" value="投稿">
    </form>
  </body>
</html>
