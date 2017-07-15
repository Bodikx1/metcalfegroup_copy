<?php 
$user_name = "Имя: ".htmlspecialchars($_POST["name"]);
$user_phone = "Телефон: ".htmlspecialchars($_POST["phone"]);
$user_email = "Email: ".htmlspecialchars($_POST["email"]);
$user_company = "Компания: ".htmlspecialchars($_POST["company"]);
$user_message = "Сообщение: ".htmlspecialchars($_POST["message"]);
$receive = htmlspecialchars($_POST["receive"]);

$source = $user_name."<br/>".$user_email."<br/>".$user_phone."<br/>".$user_company."<br/>".$user_message."<br/>".$receive;

$headers= "MIME-Version: 1.0\r\n";

echo $source;


$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$result = mail('dimanhim@list.ru', $btn, $source, $headers);
 
 ?>