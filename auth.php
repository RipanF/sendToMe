<?php
session_start();
	include_once("conn.php"); 
	$password = $_POST['password'];
	$data = mysqli_query($mysqli,"select * from admin where password='$password'");
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		$_SESSION['username'] = "Vert";
		$_SESSION['status'] = "login";
		header("location:admin.php");
	}else{
		header("location:login.php");
	}
?>