<?php
require_once __DIR__ . "/function.php";
login_session();
setcookie(session_name(), "", 1);
session_destroy();
header("Location: /login.php");
 ?>
