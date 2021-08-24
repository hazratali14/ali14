<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student2";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connection Successfull";
	}
	catch(PDOException $e)
	    {
	    echo  $e->getMessage();
	    }

?>
