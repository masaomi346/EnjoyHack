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
    <input type="hidden" name="token" value="<?php echo h(generate_token())?>">
    <?php
    define('SECRET','./secret/');
    $dir = basename($_GET['dir']);
    ?>
		<h1><?php readfile(SECRET.$dir.'.html'); ?></h1>
    PHP5.3.4以下でやってみよう！！<br />
    <a href="main.php">戻る</a>
  </body>
</html>
