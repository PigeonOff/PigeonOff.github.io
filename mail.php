<meta http-equiv='refresh' content='1; url=http://pigeonoff.github.io'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if ($message == '') {unset($message);}}
if (isset($name) && isset($phone) && isset($message)){
$address = "pgnoff@gmail.com";
$mes = "Имя: $name \nE-mail: $phone \nТекст: $message";
$send = mail ($address,$phone,$message,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";}
}
else
{
echo "Заполните все поля";
}
?>