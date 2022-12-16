<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <?php
                $db= require './common/db.php';//Подключаем базу данных
                $items = $db->query("SELECT * FROM room")->fetchAll(PDO::FETCH_ASSOC);//SQL запрос
                foreach ($items as $item):?><!--Начало цикла-->
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="<?= $item['image']?>"><!--Картинка-->
                        <div class="hr-text">
                            <h3><?= $item['Room']?></h3><!--Название комнаты-->
                            <h2><?= $item['price']?>$<span>/Pernight</span></h2><!--Цена комнаты -->
                            <table>
                                <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td><?= $item['size']?>ft</td><!--Размер комнаты-->
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>Max persion <?= $item['capacity']?></td><!--Количество постояльцев в комнате-->
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td><?= $item['bed']?></td><!--Тип кровати-->
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td><?= $item['services']?></td><!--Удобства в комнате-->
                                </tr>
                                </tbody>
                            </table>
                            <a href="room-details.php?id=<?= $item['id']?>" class="primary-btn">More Details</a><!--Переход на детали комнаты-->
                        </div>
                    </div>
                </div>
                <?php endforeach;?><!--Конец цикла-->
            </div>
        </div>
    </div>
</section>
