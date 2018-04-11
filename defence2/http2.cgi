#!C:\xampp\perl\bin\perl.exe
use CGI qw/:standard/;
use CGI::Cookie;

$name = param("name");
$value = param("value");
$cookie = CGI::Cookie->new(-name=>$name,-value=>$value);
print header(-cookie=>[$cookie],-charset => "utf-8");
print <<END_OF_HTML;
Content-Type: text/html; charset=UTF-8
Set-Cookie: $name=$value
<body>
クッキーをセットしました<br />
確認してください
</body>
END_OF_HTML
