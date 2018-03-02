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

if($tipe='admin'){
	//username
	$num = 1;
	$sql = show_sql('tb_admin');;
	$result = mysqli_query($kon,$sql);
	while($row = mysqli_fetch_array($result)){
		$loopId = substr($row['id_admin'],2,6);
		$intId =(integer)$loopId;
		if($num==$intId){
			if($num==mysqli_num_rows($result)){
				$num++;
				$newId = $num;
				continue;
			}
			$num++;
			continue;
		}else{
			$newId = $num;
		}
	}
	$newId = makeId(8,12,$newId);

	//password
	$pass = makePass($_POST['password'],64,'sha512');
	$result = tambah_sql($kon,'tb_admin',array('id_admin','user_admin','pass_admin','status_admin','salt_admin'),array($newId,$_POST['username'],$pass[0],$_POST['status'],$pass[1]));
}

if($result){
	echo 'Data Telah Tersimpan!';
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}
else{
	echo "Data Gagal Tersimpan!";
	echo "<META http-equiv='refresh' content='1;".$_SESSION['lastpage']."'>";
}




 ?>