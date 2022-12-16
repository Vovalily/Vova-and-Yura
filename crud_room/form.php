<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    td{
        border: solid 1px black;
    }
</style>
<table>
    <thead>
    <tr>
        <td>id</td>
        <td>Room</td>
        <td>Room_val</td>
        <td>price</td>
        <td>size</td>
        <td>capacity</td>
        <td>bed</td>
        <td>services</td>
        <td>description</td>
        <td>image</td>
    </tr>
    </thead>
    <tbody>
    <article>
        <?php
        $db= require '../common/db.php';
        $db=$db->query("SELECT * FROM room")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($db as $item):?>
            <tr>
                <td><div><?= $item['id']?></div></td>
                <td> <div><?= $item['Room']?></div></td>
                <td> <div><?= $item['Room_val']?></div> </td>
                <td> <p><?= $item['price']?></p> </td>
                <td> <p><?= $item['size']?></p> </td>
                <td> <p><?= $item['capacity']?></p> </td>
                <td> <p><?= $item['bed']?></p> </td>
                <td> <p><?= $item['services']?></p> </td>
                <td> <p><?= $item['description']?></p> </td>
                <td> <p><?= $item['image']?></p> </td>
                <td> <a href="delete.php?id=<?=$item['id']?>">Удалить</a> </td>
                <td> <a href="form_edit.php?id=<?=$item['id']?>">Редактировать</a> </td>
            </tr>
        <?php endforeach;?>
    </article>
    </tbody>
</table>
<a href="form_create.php">Добавить</a>
</body>
</html>