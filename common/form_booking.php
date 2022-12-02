<?php
$db=  require  './db.php';
$checkin=$_POST['chekin'];
$chekout=$_POST['chekout'];
$guests=$_POST['guests'];
$room=$_POST['room'];
//$db->query("INSERT INTO form(Checkin,Checkout,guests,room_id) VALUES('{$checkin}', '{$chekout}', '{$guests}','{$room}')");
mail("toll.04@mail.ru", "Заявка на заселение", "Дата заселения: ".$checkin. "\r\n".
    " Дата выселения: ".$chekout ."\r\n".
    ". Количество постояльцев: ".$guests."\r\n".
    ". Количество комнат: ".$room,"From:yura.yusupov.04@mail.ru");
header('Location: ../index1.php');
?>
