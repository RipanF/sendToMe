<?php
session_start();
if($_SESSION['status']!="login"){header("location:login.php");}
include("conn.php");
if(isset($_GET['id']) && isset($_GET['status'])){
    $id = $_GET['id'];
    $status = $_GET['status'];
    $query = mysqli_query($mysqli, "UPDATE komentar SET status='$status' WHERE id=$id");
    if($query){
        header('Location: admin.php#cek');
    } else {
        header('Location: logout.php');
    }
} else {
    header('Location: logout.php');
}
?>