<?php
$db= require '../common/db.php';
$room=$_GET['room'];
$Room_val=$_GET['Room_val'];
$price=$_GET['price'];
$size=$_GET['size'];
$capacity=$_GET['capacity'];
$bed=$_GET['bed'];
$services=$_GET['services'];
$description=$_GET['description'];
$image=$_GET['image'];
$db->query("INSERT INTO room(Room,Room_val, price, size, capacity, bed, services, description, image) 
VALUES ('{$room}', '{$Room_val}', '{$price}','{$size}','{$capacity}','{$bed}','{$services}','{$description}','{$image}')");
header('Location: /crud_room/form.php');