<?php
$db= require $_SERVER['DOCUMENT_ROOT'] . '/common/db.php';///Подключаем базу данных
$name=$_POST['name'];//Дата заселения
$email=$_POST['email'];//Дата выселения
$text=$_POST['text'];//Количество гостей
$db->query("INSERT INTO contact(name,email,text) VALUES ('{$name}', '{$email}','{$text}')");//SQL запрос
mail("toll.04@mail.ru", "Вопрос к отелю", "Имя: ".$name. "\r\n".
    "Email: ".$email ."\r\n".
    "Обращение: ".$text);//Отправка данных на Email
header('Location: ../index1.php');//Возврат на главную страницу
?>
