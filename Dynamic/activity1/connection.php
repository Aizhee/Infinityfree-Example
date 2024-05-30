<?php
	
	define("DSN","mysql:host=sql200.infinityfree.com;dbname=if0_36643811_employeedb");
	define("DBUSER","if0_36643811");
	define("DBPASS","fpr6UyCmnU4");

	try {

		$conn = new PDO(DSN, DBUSER, DBPASS);

	} catch (PDOException $e) {

		print "Error: " . $e->getMessage()  . "<br>";

		die();

	}

?>