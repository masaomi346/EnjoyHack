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
    <?php
    define('SECRET','./secret/');
    $dir = $_GET['dir'];
    ?>
		<h1><?php readfile(SECRET.$dir.'.html'); ?></h1>
    PHP5.3.4以下でやってみよう！！<br />
    <a href="main.php">戻る</a>
  </body>
</html>
