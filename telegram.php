<?php

$name = $_POST['user_name'];
$msg = $_POST['msg'];
$token = "646109300:AAHBqFkPcF_1BpttnzH2ifc5wznHfATTlZE";
$chat_id = $_POST['group_name'];
$arr = array(
  'Имя пользователя: ' => $name,
  'Сообщение: ' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."\n";
};
$txt = urlencode($txt);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if($sendToTelegram==true)
    {
      echo('<script>alert("Отправлено!");
      window.location = "/index.html";
      </script>');
    }
    else 
    {
      echo('<script>alert("В ходе регистрации произошли ошибки.");
      window.location = "/index.html";
      </script>');
    }
?>