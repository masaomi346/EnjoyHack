<?php
require_once __DIR__ . "/function.php";
unlogin_session();

// ユーザーごとのパスワードハッシュ列
$users_hash = [
    'masaomi' => '$2y$10$cM.V76OlE9P6eTKmLXXuVu6IM3HjWvFaqLsR/4BR0f/z8Fxi7J31W'
];

$name = filter_input(INPUT_POST, "name");
$pass = filter_input(INPUT_POST, "pass");
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(password_verify($pass,$users_hash[$name])) {
        // 認証成功
        $_SESSION["name"] = $name;
        header("Location: /main.php");
        exit;
    }
    // 認証失敗
    http_response_code(403);
}
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>TEST</title>
</head>
<body>
  <h1>ログイン画面</h1>
  <form method="post" action="">
      ユーザ名: <input type="text" name="name" ><br />
      パスワード: <input type="password" name="pass" ><br />
      <input type="submit" value="ログイン">
  </form>
</body>
</html>
<?php
if(http_response_code() === 403) {
  echo "<p style='color: red;'>間違っている箇所があります</p>";
}
?>
