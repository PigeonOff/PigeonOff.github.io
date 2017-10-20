<?php 
date_default_timezone_set('Europe/Moscow'); // Что бы письма приходили по московскому времени, а не времени сервера

$mailto = 'kirigoll@yandex.ru'; // Куда отправляем

$from = 'kirigoll@yandex.ru'; // Логин (От почты с которой якобы придёт письмо)
$from_pass = 'porshe'; // Пароль (От почты с которой якобы придёт письмо)
$from_name = $_SERVER['SERVER_NAME']; // Имя отправителя
$from_smtp = 'ssl://smtp.yandex.ru'; // smtp сервер
$from_port = 465; // Порт сервера