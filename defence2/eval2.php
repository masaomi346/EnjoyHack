<?php
require_once __DIR__ . "/function.php";
login_session();
communication_https();
header("Content-Type: text/html; charset=UTF-8");
header("X-FRAME-OPTIONS: DENY");
$data = $_GET["data"];
if(empty($data)){
  $array = array();
}else{
  $array = explode(",",$data);
}
$message = $_GET["message"];
if(!empty($message)){
  array_push($array,$message);
}
$exp = implode(",",$array);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <form action="eval1.php" method="get">
      <?php
      foreach ($array as $value) {
					echo $value."<br /><br />";
				}
      ?>
      <input type="hidden" name="data" value="<?php echo htmlspecialchars($exp,ENT_QUOTES,'UTF-8') ?>">
      <input type="submit" value="戻る">
    </form>
  </body>
</html>
