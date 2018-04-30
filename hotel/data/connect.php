<?php

require_once "defines.php";

try{
	$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DBNAME.";charset=utf8", DB_USER, DB_PASS);
}catch(PDOException $e){
	printf("Connection Error, %s <br/>", $e->getMessage());
	die();
}
