<?php
$database_host = "localhost";
$database_user = "database_user_te";
$database_pass = "database_pass_te";
$database_name = "database_name_test";

try {

	$db = new PDO("mysql:host={$database_host};dbname={$database_name}",$database_user,$database_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOexception $e) {
	echo $e->getMessage();
}
$data = new dbconnect($db);
 ?>