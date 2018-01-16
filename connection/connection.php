<?php
$host = "localhost";
$user = "root";
$pass = "studio15";
$db = "db_fresh_market";
$kon = mysqli_connect($host,$user,$pass,$db);

if(!$kon){
	$kon = mysqli_connect($host,$user,"",$db);
	if (!$kon) {
			echo "Gagal Koneksi ke Database. Cek Password di connection.php";
	}
}
?>
