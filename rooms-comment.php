<?php $db= require './common/db.php';
$id=$_GET['id'];
$items = $db->query("SELECT * FROM comment WHERE room_id={$id}");
?>

<div class="rd-reviews">
    <h4>Reviews</h4>
    <div class="review-item">
<?php foreach ($items as $item):?>
        <div class="ri-pic">
            <img src="https://avatars.mds.yandex.net/i?id=796a2c6ccc98507944ab13dd4116fbf8_l-5277189-images-thumbs&n=13" alt="">
        </div>
        <div class="ri-text">
            <span><?= $item['data']?></span>
            <div class="rating">
                <?= $item['mark']?>/5
            </div>
            <h5><?= $item['name']?></h5>
            <p><?= $item['text']?></p>
        </div>
<?php endforeach;?>
    </div>
</div>
