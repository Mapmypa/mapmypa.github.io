
<?php
if (isset($_POST['Submit']))
{
$dt=date("d F Y, H:i:s"); 
$mail="000kkkaaa@mail.ru"; 
$title="TEST MESSAGE"; 
$username=strip_tags($_POST["username"]);
$username=htmlspecialchars($username);

$message=strip_tags($_POST["message"]);
$message=htmlspecialchars($message);
$message=str_replace("\r\n","<br>",$message); 

$email=strip_tags($_POST[«email»]);

$mess="<b>Имя:</b> $username<br>";
$mess.="<b>Сообщение:</b> $message<br>";

$mess.="<b>E-Mail:</b> <a href=’mailto:$e-mail’>$email</a><br>";
$mess.="<b>Дата и Время:</b> $dt";

$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: message/html; charset=windows-1251\r\n"; 
$headers.="From: oursite.ru\r\n"; 
mail($mail, $title, $mess, $headers);
echo "Сообщение отправлено.";
print"
<script language='Javascript' type='message/javascript'>
<!—
alert ('Ваше сообщение отправлено! Спасибо!');
function reload()
{location = 'index.php'};
setTimeout('reload()', 0);
—>
</script>";
}
?>