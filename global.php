<?php 
	//if(!isset($_SESSION)) { session_start();}
	/*REQUIRE FILES */
	require('class.database.php');
	require('connect.php');

	/* DEFINE TIMEZONE */
	date_default_timezone_set("America/New_York");
	/*SET HOME DIRECTORY, kinda*/
	$home = "http://".$_SERVER['SERVER_NAME']."/";	
	define("HOME", $home);
	
?>