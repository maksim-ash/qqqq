<?php

/* https://api.telegram.org/bot7122350268:AAGyMLzvzLiPk6YHUZc9KckKr1iYcO0Wb40/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$massege = $_POST ['user_massage'];
$info = $_POST ['user_info'];
$token = "7122350268:AAGyMLzvzLiPk6YHUZc9KckKr1iYcO0Wb40";
$chat_id = "-4198935629";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Текст' => $massege,
  'Документ' => $info
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>