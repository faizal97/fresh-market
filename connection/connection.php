<?php
$host = "sql12.freemysqlhosting.net";
$user = "sql12218837";
$pass = "t8YEhzxpdU";
$db = "sql12218837";
$kon = mysqli_connect($host,$user,$pass,$db);

if(!$kon){
	$kon = mysqli_connect($host,$user,"",$db);
	if (!$kon) {
			echo "Server Maintenance";
			exit();
	}
}
?>
