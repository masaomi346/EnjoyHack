#!C:\xampp\perl\bin\perl.exe
use CGI qw/:standard/;

$name = param("name");
$value = param("value");
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8
Set-Cookie: $name=$value
<body>
クッキーをセットしました<br />
確認してください
</body>
END_OF_HTML
