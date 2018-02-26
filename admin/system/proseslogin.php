<?php 
session_start();
include 'connect.php';
if(!isset($_POST['username']) || !isset($_POST['password'])){
	header("Location: index.php?page=login&err=wajib");
}
$user = $_POST['username'];
$pass = md5($_POST['password']);

$sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
$result = mysqli_query($link,$sql);

if(mysqli_num_rows($result) > 0){
unset($_SESSION['cart']);
unset($_SESSION['user']);
$_SESSION["admin"] = $user;
header("Location: index.php");
 } else {
 	header("Location: index.php?page=login&err=gagal");
 }
