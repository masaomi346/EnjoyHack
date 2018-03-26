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
    <?php echo $_SESSION["name"]."さんでログイン<br />";?>
    <h1>Enjoy Hack!!</h1>
    <a href="/logout.php">ログアウト</a>
    <ul>
      <li><a href="/xss1.php">XSSその１</a></li>
      <li><a href="/xss2_1.php">XSSその２</a></li>
      <li><a href="/sql.php">SQLインジェクション</a></li>
      <li><a href="/os.php?os=os.txt">OSコマンドインジェクション</a></li>
      <li><a href="/csrf1.php">CSRF</a></li>
      <li><a href="/dir.php?dir=a">ディレクトリトラバーサル</a></li>
      <li><a href="/eval1.php">evalインジェクション</a></li>
      <li><a href="/upload1.php">ファイルアップロード</a></li>
    </ul>
  </body>
</html>
