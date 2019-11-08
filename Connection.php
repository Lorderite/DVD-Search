<?php
	//Establish Connection
    $host = "localhost";			
	$user="root";
	$password="usbw";
	$database="rentalmovies_db";
	$conn = mysqli_connect($host,$user,$password, $database);
	if (!$conn) {
		echo "<p style=\"font-size: 35px\">Connection Status: <span style=\"color: Red\"> Offline</span></p>";
	}else {
		echo "<p style=\"font-size: 35px\">Connection Status: <span style=\"color: Lime\"> Online</span></p>";
	}
?>