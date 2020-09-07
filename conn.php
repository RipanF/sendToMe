<?php
	$databaseHost = 'localhost';
	$databaseName = 'db_sec';
	$databaseUsername = 'root';
	$databasePassword = '';
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
	$result = mysqli_query($mysqli, "SELECT * FROM komentar WHERE status='show' ORDER BY id DESC");
?>