<?php

require_once('dbconn.php');

$db = Konekcija::getInstance()->conn;

$images = $db->query("SELECT * FROM images");
$images->setFetchMode(PDO::FETCH_ASSOC);

$models1 = $db->query("SELECT * FROM models LIMIT 6");
$models1->setFetchMode(PDO::FETCH_ASSOC);



$models2 = $db->query("SELECT * FROM models WHERE id in (7,8,9,10,11)");
$models2->setFetchMode(PDO::FETCH_ASSOC);