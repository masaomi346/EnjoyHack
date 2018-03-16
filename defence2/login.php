<?php
require_once __DIR__ . "/function.php";
unlogin_session();
communication_https();

// ユーザーごとのパスワードハッシュ列
$users_hash = [
    'masaomi' => '$2y$10$cM.V76OlE9P6eTKmLXXuVu6IM3HjWvFaqLsR/4BR0f/z8Fxi7J31W'
];

$name = filter_input(INPUT_POST, "name");
$pass = filter_input(INPUT_POST, "pass");
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if(validate_token(filter_input(INPUT_POST, "token")) && password_verify(
      $pass,isset($users_hash[$name]) ? $users_hash[$name] : '$2y$10$abcdefghijklmnopqrstuvwxyz' )) {
        // 認証成功
        session_regenerate_id(true);
        $_SESSION["name"] = $name;
        header("Location: /main.php");
        exit;
    }
    // 認証失敗
    http_response_code(403);
}
header("Content-Type: text/html; charset=UTF-8");
header("X-FRAME-OPTIONS: DENY");
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
      <input type="hidden" name="token" value="<?php echo h(generate_token())?>">
      <input type="submit" value="ログイン">
  </form>
</body>
</html>
<?php
if(http_response_code() === 403) {
  echo "<p style='color: red;'>間違っている箇所があります</p>";
}
?>
