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
    <h1>三重県の発電所一覧</h1>
    <form action="" method="post">
      <input type="hidden" name="insert" />
      <input type="hidden" name="token" value="<?php echo h(generate_token())?>">
      <label for="plant">発電所の種類</label><input type="text" name="plant"/>
      <input type="submit" value="検索" />
    </form>
    <a href="main.php">戻る</a>
    <?php
    $dbname = "db";
    $username = "root";
    $password = "kamesan346";

    function db_output($result) {
    	foreach(range(0,$result->columnCount()-1) as $index){
    		$name[] = $result->getColumnMeta($index)['name'];
    	}
    	echo "<table border='1'>\n\t<tr><th>".implode("</th><th>",$name)."</th></tr>\n";

    	foreach($result as $row){
    		echo "\t<tr><td>".implode("</td><td>",$row)."</td></tr>\n";
    	}
    	echo "</table>";
    }

    if(isset($_POST["insert"])) {
      $plant = $_POST["plant"];
      try {
        $pdo = new PDO("mysql:host=localhost;dbname={$dbname};charset=utf8mb4",$username,$password);
        $result = $pdo->prepare("select id as '番号',type as '種類',name as '施設名',addr as '住所',corp as '会社名' from `tb3` where type = ?;");
        $result->execute(array($plant));
        db_output($result);
        $pdo = null;
      } catch(PDOException $e) {
        echo("Error");
        die();
      }
    }
     ?>
  </body>
</html>
