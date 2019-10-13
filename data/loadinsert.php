<?php
require_once('dbconn.php');

if(isset($_POST['cId'])){

	$db = Konekcija::getInstance()->conn;
	$id = $_POST['cId'];
	$stmt = $db->prepare("SELECT * FROM cars where car_model='$id'");
	$stmt->execute();
	$years = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($years);
}

function loadCars()
{
	$db = Konekcija::getInstance()->conn;

	$cars = $db->query("SELECT name FROM models");

	$cars->setFetchMode(PDO::FETCH_ASSOC);
	return $cars;

}