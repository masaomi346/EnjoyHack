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
?>
