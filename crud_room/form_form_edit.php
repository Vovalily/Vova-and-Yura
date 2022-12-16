<?php
$db= require $_SERVER['DOCUMENT_ROOT'] . '/common/db.php';
$item=$db->query('SELECT * FROM  room')->fetchAll(PDO::FETCH_ASSOC);
?>
<form action="edit.php" method="post">
    <input  type="hidden" name="id" value="<?=$item['id'] ?? ''?>" >
    <input type="text" value="<?=$item['Room'] ?? ''?>" name="room" placeholder="Номер">
    <input type="text" value="<?=$item['Room_val'] ?? ''?>" name="Room_val" placeholder="Количество комнат">
    <input type="text" value="<?=$item['price'] ?? ''?>" name="price" placeholder="Цена">
    <input type="text" value="<?=$item['size'] ?? ''?>" name="size" placeholder="Размер">
    <input type="text" value="<?=$item['capacity'] ?? ''?>" name="capacity" placeholder="Количество постояльцев">
    <input type="text" value="<?=$item['services'] ?? ''?>" name="services" placeholder="Сервис">
    <textarea placeholder="Описание" value="<?=$item['description'] ?? ''?>" name="description" cols="30" rows="10" spellcheck=""></textarea>
    <textarea placeholder="Фото" value="<?=$item['image'] ?? ''?>" name="image" cols="30" rows="10" spellcheck=""></textarea>
    <a href="edit.php">Редактировать</a>
    <a href="/crud_room/form.php">Вернуться</a>
</form>