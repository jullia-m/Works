<?php
require_once("conection.php");

$login = $_POST["login"];
$userpassword = $_POST["userpassword"];


$stmt = $conn->prepare("SELECT* FROM usertable WHERE login = ? AND userpassword = ?");
$stmt->bindValue(1,$login);
$stmt->bindValue(2,$userpassword);
$stmt->execute();
if($stmt->rowCount() != 0){
	echo 'success';
}else{

	echo 'error';
}

?>