<?php
function unlogin_session() {
  session_start();
  if(isset($_SESSION["name"])) {
    header("Location: /main.php");
    exit;
  }
}

function login_session() {
  session_start();
  if(!isset($_SESSION["name"])) {
      header("Location: /login.php");
      exit;
  }
}

/** htmlspecialcharsのラッパー関数
 * @param string
 * @return string
 */
function h($str) {
  return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

/** トークンの生成
 * @return string
 */
function generate_token() {
  return hash("sha256", session_id());
}

/** トークンの検証
 * @param string
 * @return bool
 */
function validate_token($token) {
  return $token === generate_token();
}

//強制的にHTTPSで通信する
function communication_https() {
  if(empty($_SERVER["HTTPS"])) {
      header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
      exit;
  }
}
 ?>
