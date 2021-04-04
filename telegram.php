<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1723802677:AAGF0XIRZxO-wIUtWgxMRcP59AVR8_kXqXc";
$chat_id = "-502215560";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>