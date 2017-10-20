<?php 

require_once "config.php"; 

$res = array('status'=>'error');
if (isset($_POST) && count($_POST)) {
    require_once "mail.php"; 
    $name = $_POST['name'];
    unset($_POST['name']);
    $res = array_merge($res,$_POST);
    $mailSMTP = new mail($from, $from_pass, $from_smtp, $from_name, $from_port);
    
    $message ='Заполнена форма - "'.$name.'" на сайте <a href="'.$_SERVER['SERVER_NAME'].'">'.$_SERVER['SERVER_NAME'].'</a><br/>';
    foreach ($_POST as $key => $value) {
        $message .= $key.': '.$value.'<br />';
    }
    $mailsubject = 'Форма '.$form_name.' '.$_SERVER['SERVER_NAME'];
    
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n"; // Кодировка письма
    $headers .= "From: ".$from_name." <".$from.">\r\n"; // От кого письмо
    $result =  $mailSMTP->send($mailto, $mailsubject, $message, $headers); // Отправляем письмо
    if ($result) {
        $res['status'] = 'success';
    }
}
echo json_encode($res);
?>