<?php $db= require './common/db.php';//Подключаем базу данных
$id=$_GET['id'];//Получаем id комнаты
$items = $db->query("SELECT * FROM room WHERE id={$id}");//SQL запрос
?>
<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item):?><!--Начало цикла-->
            <div class="col-lg-8">
                <div class="room-details-item">
                    <img src="<?= $item['image']?>" alt=""><!--Картинка комнаты-->
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3><?= $item['Room']?></h3><!--Название комнаты-->
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <a href="#">Booking Now</a>
                            </div>
                        </div>
                        <h2><?= $item['price']?>$<span>/Pernight</span></h2><!--Цена комнаты-->
                        <table>
                            <tbody>
                            <tr>
                                <td class="r-o">Size:</td>
                                <td><?= $item['size']?>ft</td><!--Размер комнаты-->
                            </tr>
                            <tr>
                                <td class="r-o">Capacity:</td>
                                <td>Max persion <?= $item['capacity']?></td><!--Максимум постояльцев-->
                            </tr>
                            <tr>
                                <td class="r-o">Bed:</td>
                                <td><?= $item['bed']?></td><!--Тип кровати-->
                            </tr>
                            <tr>
                                <td class="r-o">Services:</td>
                                <td><?= $item['services']?></td><!--удобства в номере-->
                            </tr>
                            </tbody>
                        </table>
                        <p> <?= $item['description']?></p><!--Описание комнаты-->
                    </div>
                </div>
                <?php require $_SERVER['DOCUMENT_ROOT'] . '/rooms-comment.php' ?><!--Подключаем комментарий комнаты-->
                <?php endforeach;?>
                <div class="review-add">
                    <h4>Add Review</h4>
                    <form action="/form-room-comment.php" method="post" class="ra-form" id="formaaa"><!--Форма отзыва в комнате-->
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Name*">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <h5>You Rating:</h5>
                                    <div class="rating">
                                        <input type="number" pattern="[1-5]{1}" name="rating" placeholder="1-5" id="rating">
                                    </div>
                                </div>
                                <textarea name="review" placeholder="Your Review"></textarea>
                                <input name="id" type="text" hidden value="<?=$id?>">
                                <button id="form-submit" type="submit">Submit Now</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="room-booking">
                    <h3>Your Reservation</h3>
                    <!--------------------------------------Форма заявки---------------------------------------->
                    <?php require $_SERVER['DOCUMENT_ROOT'] . '/common/Reservation.html' ?><!--Подключаем форму заявки-->
                    <!--------------------------------------Форма заявки---------------------------------------->
                </div>
            </div>
        </div>
    </div>
</section>