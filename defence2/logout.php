<?php
require_once __DIR__ . "/function.php";
login_session();
communication_https();

// トークンを検証
if(!validate_token(filter_input(INPUT_GET, "token"))) {
    header("Content-Type: text/plain; charset=UTF-8", true, 400);
    header("X-FRAME-OPTIONS: DENY");
    exit("トークンが無効です");
}
setcookie(session_name(), "", 1);
session_destroy();
header("Location: /login.php");
 ?>
