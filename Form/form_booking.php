<?php
$db= require $_SERVER['DOCUMENT_ROOT'] . '/common/db.php';///Подключаем базу данных
$checkin=$_POST['chekin'];//Дата заселения
$chekout=$_POST['chekout'];//Дата выселения
$guests=$_POST['guests'];//Количество гостей
$room=$_POST['room'];//Количество комнат
$db->query("INSERT INTO form(Checkin,Checkout,guests,room_id) VALUES('{$checkin}', '{$chekout}', '{$guests}','{$room}')");//SQL запрос
mail("toll.04@mail.ru", "Заявка на заселение", "Дата заселения: ".$checkin. "\r\n".
    "Дата выселения: ".$chekout ."\r\n".
    "Количество постояльцев: ".$guests."\r\n".
    "Количество комнат: ".$room);//Отправка данных на Email
header('Location: ../index1.php');//Возврат на главную страницу
?>
