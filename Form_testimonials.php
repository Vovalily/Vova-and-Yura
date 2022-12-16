<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Customers Say?</h2>
                </div>
            </div>
        </div>
        <?php
        $db= require './common/db.php';//Подключаем базу данных
        $items = $db->query("SELECT * FROM testimonials")->fetchAll(PDO::FETCH_ASSOC);//SQL запрос
        foreach ($items as $item):?><!--Начало цикла-->
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p><?= $item['text']?></p><!--Текст отзыва-->
                        <div class="ti-author">
                            <div class="rating">
                                <?= $item['feedback']?>/5<!--Оценка отзыва-->
                            </div>
                            <h5><?= $item['client']?></h5><!--Имя пользователя оставивший отзыв-->
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <?php endforeach;?><!--Конец цикла-->
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
