<?php
$id=$_GET['id'];
$db= require '../common/db.php';
$item =$db ->query("SELECT  * FROM room WHERE  id={$id}")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="edit.php" method="get">
    <input  type="hidden" name="id" value="<?=$item['id'] ?? ''?>" >
    <input type="text" value="<?=$item['Room'] ?? ''?>" name="Room" placeholder="Номер">
    <input type="text" value="<?=$item['Room_val'] ?? ''?>" name="Room_val" placeholder="Количество комнат">
    <input type="text" value="<?=$item['price'] ?? ''?>" name="price" placeholder="Цена">
    <input type="text" value="<?=$item['size'] ?? ''?>" name="size" placeholder="Размер">
    <input type="text" value="<?=$item['capacity'] ?? ''?>" name="capacity" placeholder="Количество постояльцев">
    <input type="text" value="<?=$item['services'] ?? ''?>" name="services" placeholder="Сервис">
    <textarea placeholder="Описание" value="<?=$item['description'] ?? ''?>" name="description" cols="30" rows="10" spellcheck=""></textarea>
    <textarea placeholder="Фото" value="<?=$item['image'] ?? ''?>" name="image" cols="30" rows="10" spellcheck=""></textarea>
    <button type="submit">Редактировать</button>
    <a href="/crud_room/form.php">Вернуться</a>
</form>
</body>
</html>