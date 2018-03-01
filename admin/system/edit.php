<?php 
session_start();
include '../../connection/connection.php';
include 'sqlcommand.php';

if(!isset($_POST['tipe']) || empty($_POST['tipe'])){
echo "Kesalahan pada input data ke sistem";
echo "<br> Mohon Cek Kembali data yang di proses.";
exit();	
}

$tipe = $_POST['tipe'];

if($tipe=='admin'){
	$tabel = 'tb_admin';
	$oldKey = 'id_admin';
	$oldKeyValue = $_POST['old_id'];
	$arrData = array('user_admin','status_admin');
	$arrDataValue = array($_POST['username'],$_POST['status']);
}


$sql = edit_sql($tabel,$oldKey,$oldKeyValue,$arrData,$arrDataValue);
$result = mysqli_query($kon,$sql);
if($result){
	echo 'Data Telah Terupdate!';
	echo "<META http-equiv='refresh' content='3;".$_SESSION['lastpage']."'>";
}
else{
	echo "Data Gagal Terupdate!";
	echo "<META http-equiv='refresh' content='3;".$_SESSION['lastpage']."'>";
}


?>
