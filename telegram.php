<?php

/* https://api.telegram.org/bot473198070:AAGSmUDq5s4f6V1Hi1oZB9pK-FtTl6GzsLg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$msg = $_POST['user_text'];
$token = "473198070:AAGSmUDq5s4f6V1Hi1oZB9pK-FtTl6GzsLg";
$chat_id = "-291862835";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>