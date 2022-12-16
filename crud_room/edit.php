<?php
$db= require '../common/db.php';
$id=$_GET['id'];
$Room=$_GET['Room'];
$Room_val=$_GET['Room_val'];
$price=$_GET['price'];
$size=$_GET['size'];
$capacity=$_GET['capacity'];
$bed=$_GET['bed'];
$services=$_GET['services'];
$description=$_GET['description'];
$image=$_GET['image'];
$db->query("UPDATE room SET Room='{$Room}', Room_val='{$Room_val}', price='{$price}', size='{$size}',capacity='{$capacity}',
                bed='{$bed}',services='{$services}',description='{$description}',image='{$image}' WHERE id='{$id}'");
header('Location: /crud_room/form.php');
