<?php
require_once("conection.php");
require_once("class.User.php");


$login = $_POST["login"];
$userpassword = $_POST["userpassword"];

$User = new User();

$stmt = $conn->prepare("INSERT INTO usertable (login,userpassword) VALUES (?,?)");
$stmt->bindValue(1,$login);
$stmt->bindValue(2,$userpassword);

if($stmt->execute()){
	$User->connection();
	$User->findAll();

}else{
	echo 'error';

}












?>