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
    $os = $_GET['os'];
    $file = popen("type $os","r");
    while (($t = fgets($file)) !== FALSE){
      print $t."<br />";
    }
    pclose($file);
    ?>
    <a href="main.php">戻る</a>
  </body>
</html>
