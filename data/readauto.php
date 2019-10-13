<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

	$id = test_input($_GET['id']);

}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$db = Konekcija::getInstance()->conn;

$q = $db->query("SELECT * FROM cars WHERE car_model = '$id' ");

$q->setFetchMode(PDO::FETCH_ASSOC);