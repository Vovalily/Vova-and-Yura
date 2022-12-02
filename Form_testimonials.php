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
        $db= require $_SERVER['DOCUMENT_ROOT']. '/common/db.php';
        $items = $db->query("SELECT * FROM testimonials")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($items as $item):?>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p><?= $item['text']?></p>
                        <div class="ti-author">
                            <div class="rating">
                                <?= $item['feedback']?>/5
                            </div>
                            <h5><?= $item['client']?></h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
