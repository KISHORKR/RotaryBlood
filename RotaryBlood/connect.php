<?php
	$server = "localhost";
	$user = "kishor";
	$pass = "sadatchari@1970";
	$dbname = "rotract";
	// try {
		// $con = new PDO('mysql:host=localhost;dbname=rotract', $user, $pass);
		$con = new mysqli($server, $user, $pass, $dbname);
	// }
	// catch (PDOException $e) {
 //    	print "Error!: " . $e->getMessage() . "<br/>";
 //    	die();
	// }
?>