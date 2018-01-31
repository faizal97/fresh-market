<?php
$host = "sql12.freemysqlhosting.net";
$user = "sql12218837";
$pass = "t8YEhzxpdU";
$db = "sql12218837";

// $host = "localhost";
// $user = "root";
// $pass = "studio15";
// $db = "db_fresh_market";

$kon = mysqli_connect($host,$user,$pass,$db);

if(!$kon){
			echo "Server Maintenance";
			exit();
}
?>
