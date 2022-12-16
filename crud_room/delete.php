<?php
/** @var PDO $db */
$id=$_GET['id'];
$db= require '../common/db.php';
$db->query("DELETE FROM room WHERE id={$id}" );
header('Location: /crud_room/form.php');
