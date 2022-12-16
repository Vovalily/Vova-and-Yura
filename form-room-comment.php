<?php
$db= require './common/db.php';//Подключаем базу данных
$id=$_POST['id'];//Получаем id комнаты
$name=$_POST['name'];//Получаем имя постояльца
$today = date("Y-m-d");//Получаем дату
$email=$_POST['email'];//Получаем Email
$rating=$_POST['rating'];//Получаем оценку
$review=$_POST['review'];//Получем текст комментария
$db->query("INSERT INTO comment(name,data,text,mark,email,room_id) VALUES ('{$name}', '{$today}', '{$review}','{$rating}','{$email}','{$id}')");//SQl запрос
header('Location: /room-details.php?id='.$id);//Возврат на страницу комнаты