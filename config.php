<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "password", "anish_blog");
	// $conn = mysqli_connect("sql100.epizy.com", "epiz_26458384", "5N8qJb2VoC97JV", "epiz_26458384_anish_blog");
	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8082/anish-blog/');
?>
