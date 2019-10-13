<?php
require_once('dbconn.php');
session_start();

if ( ! empty( $_POST ) ) {
	if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {

		$db = Konekcija::getInstance()->conn;
		$stmt = $db->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");
		$stmt->execute(
			array(
				'username' => $_POST['username'],
				'password' => $_POST['password']
			)
		);
		$count = $stmt->rowCount();
		if($count>0)
		{
			$_SESSION['username'] = $_POST['username'];

			header("location: ../index.php");
		}
		else
		{
			header('Refresh:1');
		}

	}
}
?>