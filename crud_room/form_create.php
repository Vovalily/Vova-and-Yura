<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Form_form_create.php" method="get">
    Название <input type="text" name="room"><br><br>
    Количество комнат <input type="number" name="Room_val"><br><br>
    Цена <input type="number" name="price"><br><br>
    Размер <input type="number" name="size"><br><br>
    Количество постояльцев <input type="number" name="capacity"><br><br>
    Тип кровати <input type="text" name="bed"><br><br>
    Сервис <input type="text" name="services"><br><br>
    Описание <textarea name="description"></textarea><br><br>
    Картинка <textarea name="image"></textarea><br><br>
    <button type="submit">Создать</button>
</form>
</body>
</html>
