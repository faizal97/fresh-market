<?php 
session_start();
include '../../connection/connection.php';
include 'sqlcommand.php';

if(!isset($_GET['tipe']) || empty($_GET['tipe'])){
echo "Kesalahan pada input data ke sistem";
echo "<br> Mohon Cek Kembali data yang di proses.";
exit();
}
$tipe = $_GET['tipe'];
$id = $_GET['id'];
if ($tipe=='admin') {
	if($id=='all'){
		$result = hapus_sql($kon,'tb_admin');
	}
	else{
	$result = hapus_sql($kon,'tb_admin','id_admin',$id);
}
}

if($result){
	echo 'Data Telah Terhapus!';
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}
else{
	echo "Data Gagal Terhapus!";
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}

 ?>