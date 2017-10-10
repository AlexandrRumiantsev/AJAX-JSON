<?php
// Заботимся о файловой структуре...
//header("Content-type: text/plain; charset=utf-8");
//header("Cache-Control: no-store, no-cache, must-revalidate");
//header("Cache-Control: post-check=0, pre-check=0", false);

// Получаем и проверяем...)
if (isset($_REQUEST['name'])) { $name = stripslashes($_REQUEST['name']); if ($name == '') { unset($name);} } 
if (isset($_REQUEST['email'])) { $email = stripslashes($_REQUEST['email']); if ($email == '') { unset($email);} }
if (isset($_REQUEST['text'])) { $text = stripslashes(nl2br($_REQUEST['text'])); if ($text == '') { unset($text);} }

// Здесь можно вставить схему отправки писем
// Но об этом ниже (ссылка на статью с кодом и мануалом)

echo "$name, cпасибо за обращение!Ваще сообщение отправлено! $email , $text ";
echo "<br>Проверка отработки скрипта до конца";
?>